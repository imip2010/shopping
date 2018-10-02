<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class MemberC extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model(['HomeM','LoginM','MemberM']);
		in_access(); //helper buat batasi akses login/session
	}

    // pindah ke jual barang
    public function jual_barang(){
        $this->data['dataDiri'] = $this->session->userdata();
        $this->data['logged_in'] = $this->session->userdata('logged_in');
        $this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
        $this->data['kategori'] = $this->MemberM->get_all_kategori();
        $this->data['menu_kategori'] = $this->HomeM->get_all_kategori()->result();

        $this->data['isi'] = 'isi';
        $this->data['isi'] = $this->load->view('member/jual_barang', $this->data, TRUE);
        $this->load->view('layout', $this->data);
    }


    // beli barang
    public function beli_barang($memberID){
        $this->data['dataDiri'] = $this->session->userdata();
        $this->data['logged_in'] = $this->session->userdata('logged_in');
        $this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
        $this->data['daftar_barang'] = $this->MemberM->get_produk_by_id()->result();
        $this->data['kategori'] = $this->MemberM->get_all_kategori();
        $this->data['menu_kategori'] = $this->HomeM->get_all_kategori()->result();
        $this->data['MemberM'] = $this->MemberM;

        //ambil barang di keranjang
        $this->data['keranjang'] = $lele = $this->MemberM->get_keranjang_by_id($memberID)->result();
        if(count($lele) == 0){
            $this->session->set_flashdata('error_keranjang','Keranjang anda masih kosong !');
            redirect('HomeC');
        }else{
            $this->data['isi'] = 'isi';
            $this->data['isi'] = $this->load->view('member/beli_barang', $this->data, TRUE);
            $this->load->view('layout', $this->data);
        }

    }

    // pindah ke daftar_barang
    public function daftar_barang(){
        $this->data['dataDiri'] = $this->session->userdata();
        $this->data['logged_in'] = $this->session->userdata('logged_in');
        $this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
        $this->data['daftar_barang'] = $this->MemberM->get_produk_by_id()->result();
        $this->data['kategori'] = $this->MemberM->get_all_kategori();
        $this->data['menu_kategori'] = $this->HomeM->get_all_kategori()->result();

        $this->data['isi'] = 'isi';
        $this->data['isi'] = $this->load->view('member/daftar_barang', $this->data, TRUE);
        $this->load->view('layout', $this->data);
    }
    
    // pengaturan profil
    public function pengaturan_profile(){
        $this->data['dataDiri'] = $this->session->userdata();
        $this->data['logged_in'] = $this->session->userdata('logged_in');
        $this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
        $this->data['daftar_barang'] = $this->MemberM->get_produk_by_id()->result();
        $this->data['kategori'] = $this->MemberM->get_all_kategori();
        $this->data['menu_kategori'] = $this->HomeM->get_all_kategori()->result();
        $memberID = $this->session->userdata('memberID');
        $this->data['detail_member'] = $this->MemberM->get_members($memberID)->result()[0];
        $this->data['provinsi'] = $this->MemberM->get_all_provinsi();
        $this->data['shipping_address'] = $this->MemberM->get_shipping_address($memberID)->result();
        // $this->data['locationID'] = $this->MemberM->get_shipping_address_by_id(4)->result()[0]->locationID;

        $this->data['isi'] = 'isi';
        $this->data['isi'] = $this->load->view('member/pengaturan_profile_v', $this->data, TRUE);
        $this->load->view('layout', $this->data);
    }

    // alamat
    public function get_kabupaten_kota(){
        $postData = $this->input->post();
        $data = $this->MemberM->get_kabupaten_kota($postData);
        echo json_encode($data);
    }

    public function get_kecamatan(){
        $postData = $this->input->post();
        $data = $this->MemberM->get_kecamatan($postData);
        echo json_encode($data);
    }

    public function get_kelurahan(){
        $postData = $this->input->post();
        $data = $this->MemberM->get_kelurahan($postData);
        echo json_encode($data);
    }

    public function insertToCart($memberID, $productID){
        $harga  = $this->HomeM->get_detail_product($productID)->result()[0]->salePrice;
        $diskon = $this->HomeM->get_detail_product($productID)->result()[0]->discount;

        $disc = ($diskon/100)*$harga;

        $harga_final = $harga-$disc;


        $data_cart = array(
            'memberID'      => $memberID, 
            'productID'     => $productID, 
            'createDate'    => date('Y-m-d H:i:s'), 
            'price'         => $harga_final, 
            'quantity'      => "1", 
            'stockCart'     => "0", 
        );


        // cari product berdasarkan member
        $dikeranjang = $this->MemberM->get_keranjang_by_2id($memberID, $productID)->num_rows();

        // jika ga ada -> insert
        if($dikeranjang == 0){
            if($this->MemberM->insertToCart($data_cart)){
                $this->session->set_flashdata('sukses','Produk berhasil dimasukkan ke keranjang');
                redirect('MemberC/beli_barang/'.$memberID);
            }else{
                $this->session->set_flashdata('error','Produk tidak berhasil dimasukkan ke keranjang');
            }
        }else{ //kalo ada update quantitynya

            $qty_lama = $this->MemberM->get_keranjang_by_2id($memberID, $productID)->result()[0]->quantity;
            $qty_baru = $qty_lama + 1;
            $data_cart_update = array(
                'quantity' => $qty_baru,
            );

            $cart_id = $this->MemberM->get_keranjang_by_2id($memberID, $productID)->result()[0]->cartID;

            if($this->MemberM->updateToCart($cart_id, $data_cart_update)){
                $this->session->set_flashdata('sukses','Produk berhasil dimasukkan ke keranjang');
                redirect('MemberC/beli_barang/'.$memberID);
            }else{
                $this->session->set_flashdata('error','Produk tidak berhasil dimasukkan ke keranjang');
            }
        }
    }

    // get pilihan kategori
    public function get_sub_kategori(){
        $postData = $this->input->post();
        $data = $this->MemberM->get_sub_kategori($postData);
        echo json_encode($data);
    }

    public function seo_title($s){
        $c = array (' ');
        $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');

        $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d

        $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
        return $s;
    }

    //post produk
    public function post_jual_barang(){
        $this->form_validation->set_rules('nama_barang','Nama Barang','required');
        $this->form_validation->set_rules('kondisi','Kondisi','required');
        $this->form_validation->set_rules('kategori','Kategori Barang','required');
        $this->form_validation->set_rules('sub_kategori','Sub Kategori Barang','required');
        $this->form_validation->set_rules('harga','Harga','required');
        $this->form_validation->set_rules('stok','Stok','required');
        $this->form_validation->set_rules('berat','berat','required');
        $this->form_validation->set_rules('diskon','diskon','required');
        $this->form_validation->set_rules('deskripsi','Deskripsi','required');

        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('error','Data anda tidak berhasil disimpan, cek data yang Anda masukkan');
            redirect_back();
        }else{
            $nama_barang            = $_POST['nama_barang'];  
            $kondisi                = $_POST['kondisi'];  
            $kategori_barang        = $_POST['kategori'];  
            $sub_kategori_barang    = $_POST['sub_kategori'];  
            $harga                  = $_POST['harga'];  
            $berat                  = $_POST['berat'];  
            $stok                   = $_POST['stok'];  
            $diskon                 = $_POST['diskon'];  
            $deskripsi              = $_POST['deskripsi']; 
            $memberID               = $this->session->userdata('memberID');
            $productCode            = date('ymdhis');
            $productSeo             = $this->seo_title($nama_barang); 

            $this->load->library('upload');
            $dataInfo = array();
            $files = $_FILES;
            $cpt = count($_FILES['userfile']['name']);
            for($i=0; $i<=$cpt; $i++)
            {           
                $_FILES['userfile']['name']= $files['userfile']['name'][$i];
                $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

                $this->upload->initialize($this->set_upload_options());
                $this->upload->do_upload();
                $dataInfo[] = $this->upload->data();
            }

            $data  = array(
                'productName'       => $nama_barang,
                'photo1'            => $dataInfo[0]['file_name'],
                'photo2'            => $dataInfo[1]['file_name'],
                'photo3'            => $dataInfo[2]['file_name'],
                'photo4'            => $dataInfo[3]['file_name'],
                'photo5'            => $dataInfo[4]['file_name'],
                'photo6'            => $dataInfo[5]['file_name'],
                'conditions'        => $kondisi,  
                'categoryID'        => $kategori_barang,  
                'subCategoryID'     => $sub_kategori_barang,  
                'salePrice'         => $harga,
                'weight'            => $berat,
                'qty'               => $stok,
                'discount'          => $diskon,
                'memberID'          => $memberID,
                'productCode'       => $productCode,
                'productSeo'        => $productSeo,
                'description'       => $deskripsi);

            if($this->MemberM->insert_jual_barang($data)){
                $this->session->set_flashdata('sukses','Data anda berhasil disimpan');
                redirect('MemberC/daftar_barang');
            }else{
                $this->session->set_flashdata('error','Data anda tidak berhasil disimpan');
                redirect_back();
            }
        }
    }

    private function set_upload_options(){   
    //upload an image options
        $config = array();
        $config['upload_path']      = './assets/images/product/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['create_thumb']     = TRUE;
        $config['max_size']         = '0';
        $config['overwrite']        = FALSE;
        $config['encrypt_name']     = TRUE;
        // $new_name = time().$_FILES["userfile"]['name'];
        // $config['file_name'] = 'small_'.$new_name;
        return $config;
    }

    //upload produk(image)
    public function upload(){       
        $this->load->library('upload');
        $dataInfo = array();
        $files = $_FILES;
        $cpt = count($_FILES['userfile']['name']);
        for($i=0; $i<$cpt; $i++)
        {           
            $_FILES['userfile']['name']= $files['userfile']['name'][$i];
            $_FILES['userfile']['type']= $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error']= $files['userfile']['error'][$i];
            $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

            $this->upload->initialize($this->set_upload_options());
            $this->upload->do_upload();
            $dataInfo[] = $this->upload->data();
        }

        $data = array(
            'name' => $this->input->post('pd_name'),
            'prod_image' => $dataInfo[0]['file_name'],
            'prod_image1' => $dataInfo[1]['file_name'],
            'prod_image2' => $dataInfo[2]['file_name'],
            'created_time' => date('Y-m-d H:i:s')
        );
        $result_set = $this->tbl_products_model->insertUser($data);
    }

    public function hapus_barang($productID){
        if($this->MemberM->hapus_barang($productID)){
            // define('EXT', '.'.pathinfo(__FILE__, PATHINFO_EXTENSION));
        // define('FCPATH', __FILE__);
        // define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
            // define('PUBPATH',str_replace(SELF,'',FCPATH));

            // $this->db->where('productID',$productID);
            // $photo1 = $this->db->get('products')->row()->photo1;
            // $photo2 = $this->db->get('products')->row()->photo2;
            // $photo3 = $this->db->get('products')->row()->photo3;
            // $photo4 = $this->db->get('products')->row()->photo4;
            // $photo5 = $this->db->get('products')->row()->photo5;
            // $photo6 = $this->db->get('products')->row()->photo6;


            // unlink(PUBPATH."assets\images\product".$photo1);
            // unlink(PUBPATH."assets\images\product".$photo2);
            // unlink(PUBPATH."assets\images\product".$photo3);
            // unlink(PUBPATH."assets\images\product".$photo4);
            // unlink(PUBPATH."assets\images\product".$photo5);
            // unlink(PUBPATH."assets\images\product".$photo6);
            $this->session->set_flashdata('sukses','Data anda berhasil dihapus');
            redirect_back();
        }else{
            $this->session->set_flashdata('error','Data anda tidak berhasil dihapus');
            redirect_back();
        }
    }

    public function hapus_cart($cartID){
        if($this->MemberM->hapus_cart($cartID)){
            $this->session->set_flashdata('sukses', 'Item berhasil dihapus dari Keranjang');
            redirect_back();
        }else{
            $this->session->set_flashdata('error','Item tidak berhasil dihapus dari Keranjang');
            redirect_back();
        }
    }

    public function checkout(){
        // $memberID               = $_POST['memberID'];  
        // $memberTo               = $_POST['memberTo'];  
        // $customerName           = $_POST['customerName'];  
        // $qty                    = $_POST['qty'];  
        // $total_harga            = $_POST['total_order'];  

        // $this->data['post'] = array(
        //     'memberID'      => $memberID,
        //     'memberTo'      => $memberTo,
        //     'customerName'  => $customerName,
        //     'qty'           => $qty,
        //     'total_harga'   => $total_harga,
        // );

        $this->data['dataDiri'] = $this->session->userdata();
        $this->data['logged_in'] = $this->session->userdata('logged_in');
        $this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
        $this->data['daftar_barang'] = $this->MemberM->get_produk_by_id()->result();
        $this->data['kategori'] = $this->MemberM->get_all_kategori();
        $this->data['menu_kategori'] = $this->HomeM->get_all_kategori()->result();
        $memberID = $this->session->userdata('memberID');
        $this->data['detail_member'] = $this->MemberM->get_detail_members($memberID)->result()[0];
        $this->data['all_province'] = $this->MemberM->get_provinces();

        $this->data['isi'] = 'isi';
        $this->data['isi'] = $this->load->view('member/checkout', $this->data, TRUE);
        $this->load->view('layout', $this->data);
    }

    public function get_city(){
        $postData   = $this->input->post();
        $data       = $this->MemberM->get_cities($postData);
        echo json_encode($data);
    }

    //update member checkout
    public function update_members(){
        $this->form_validation->set_rules('memberID','memberID','required');
        $this->form_validation->set_rules('nama','Nama Member','required');
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('phone','phone','required');
        $this->form_validation->set_rules('provinsi','provinsi','required');
        $this->form_validation->set_rules('kota','kota','required');
        $this->form_validation->set_rules('address','address','required');

        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('error','Data tidak berhasil diubah');  
            redirect_back();
        }else{
            $memberName     = $this->input->post('nama');
            $email          = $this->input->post('email');
            $phone          = $this->input->post('phone');
            $provinceID     = $this->input->post('provinsi');
            $cityID         = $this->input->post('kota');
            $address        = $this->input->post('address');
            $memberID       = $this->input->post('memberID');
            
            $data_update_member = array(
                'memberName'    => $memberName, 
                'email'         => $email, 
                'phone'         => $phone, 
                'provinceID'    => $provinceID, 
                'cityID'        => $cityID, 
                'address'       => $address, 
            );

            if($this->MemberM->update_data_member($memberID, $data_update_member)){
                $this->session->set_flashdata('sukses', 'Data berhasil diubah');
                redirect_back();
            }else{
                $this->session->set_flashdata('error', 'Data tidak berhasil diubah');
                redirect_back();
            }
        }
    }

     //update member checkout
    public function update_member(){
        $this->form_validation->set_rules('memberID','memberID','required',  array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('username','username');
        $this->form_validation->set_rules('memberName','Nama Member');
        $this->form_validation->set_rules('tmp_lahir','tmp_lahir');
        $this->form_validation->set_rules('tgl_lahir','tgl_lahir');
        $this->form_validation->set_rules('gender','gender');
        $this->form_validation->set_rules('email','email');
        $this->form_validation->set_rules('phone','phone');
        $this->form_validation->set_rules('password','password');

        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('error','Data tidak berhasil diubah');  
            redirect_back();
        }else{

            $username       = $this->input->post('username');
            $tmp_lahir      = $this->input->post('tmp_lahir');
            $tgl_lahir      = $this->input->post('tgl_lahir');
            $gender         = $this->input->post('gender');
            $memberName     = $this->input->post('memberName');
            $email          = $this->input->post('email');
            $phone          = $this->input->post('phone');
            $password       = $this->input->post('password');
            $memberID       = $this->input->post('memberID');
            
            $data_update_member = array(
                'memberName'    => $memberName, 
                'email'         => $email, 
                'phone'         => $phone, 
                'username'      => $username, 
                'gender'        => $gender, 
                'tmp_lahir'     => $tmp_lahir, 
                'password'      => md5($password), 
                'tgl_lahir'     => $tgl_lahir, 
            );

            if($this->MemberM->update_data_member($memberID, $data_update_member)){
                $this->session->set_flashdata('sukses', 'Data berhasil diubah');
                redirect_back();
            }else{
                $this->session->set_flashdata('error', 'Data tidak berhasil diubah');
                redirect_back();
            }
        }
    }


    // tambah alamat
    public function post_tambah_alamat(){
        $this->form_validation->set_rules('shipping_address_name','Nama alamat','required',array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('nama_penerima','Nama penerima','required',array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('no_hp','No HP','required',array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('locationName','Nama lokasi','required',array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('kode_pos','kode pos','required',array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('id_kelurahan','kelurahan','required',array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('memberID','member ID','required',array('required' => 'You must provide a %s.'));

        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('error', 'Data tidak berhasil diubah');
            redirect_back();
        }else{
            $memberID               = $this->input->post('memberID');
            $shipping_address_name  = $this->input->post('shipping_address_name');
            $nama_penerima          = $this->input->post('nama_penerima');
            $locationName           = $this->input->post('locationName');
            $kode_pos               = $this->input->post('kode_pos');
            $id_kelurahan           = $this->input->post('id_kelurahan');
            $no_hp                  = $this->input->post('no_hp');

            $data_insertToLocation = array(
                'id_kelurahan'  => $id_kelurahan, 
                'locationName'  => $locationName, 
                'kode_pos'      => $kode_pos, 
            );

            if($locationID = $this->MemberM->insertToLocation($data_insertToLocation)){
                $data_tambah_alamat = array(
                    'memberID'              => $memberID, 
                    'locationID'            => $locationID, 
                    'shipping_address_name' => $shipping_address_name, 
                    'nama_penerima'         => $nama_penerima, 
                    'no_hp'                 => $no_hp, 
                    'status_alamat'         => "no_default", 
                );
                if($this->MemberM->insertToShippingAddress($data_tambah_alamat)){
                    $this->session->set_flashdata('sukses', 'Data alamat berhasil disimpan');
                    redirect_back();
                }else{
                    $this->MemberM->delete($locationID);
                    $this->session->set_flashdata('error', 'Data tidak berhasil disimpan');
                    redirect_back();
                }
            }else{                
                $this->session->set_flashdata('error', 'Data tidak berhasil disimpan');
                redirect_back();
            }

        }
    }

    // set utama alamat
    public function set_utama($memberID, $shipping_addressID){
        $default = array('status_alamat' => "default");
        $no_default = array('status_alamat' => "no_default");
        if ($this->MemberM->update_alamat($memberID, $no_default)) {
            if ($this->MemberM->set_utama($memberID, $shipping_addressID, $default)) {
                $locationID = $this->MemberM->get_shipping_address_utama($memberID)->result()[0]->locationID;
                $data = array('locationID' => $locationID);
                $this->MemberM->update_data_member($memberID, $data);
                $this->session->set_flashdata('sukses', 'Alamat berhasil diubah menjadi alamat utama');
                redirect_back();
            }else{
                $this->session->set_flashdata('error', 'Alamat tidak berhasil diubah');
                redirect_back();
            }
        }else{
            $this->session->set_flashdata('error', 'Alamat tidak berhasil diubah');
            redirect_back();
        }
    }

    // hapus alamat
    public function hapus_alamat($shipping_addressID){
        $locationID = $this->MemberM->get_shipping_address_by_id($shipping_addressID)->result()[0]->locationID;
        if($this->MemberM->hapus_location($locationID)){
            if($this->MemberM->hapus_alamat($shipping_addressID)){
                $this->session->set_flashdata('sukses', 'Alamat berhasil dihapus');
                redirect_back();
            }else{
                $this->session->set_flashdata('error','Alamat tidak berhasil dihapus');
                redirect_back();                
            }
        }else{
            $this->session->set_flashdata('error','Alamat tidak berhasil dihapus');
            redirect_back();
        }
    }

    public function post_ubah_alamat(){
        $this->form_validation->set_rules('shipping_address_name','Nama alamat');
        $this->form_validation->set_rules('nama_penerima','Nama penerima');
        $this->form_validation->set_rules('no_hp','No HP');
        $this->form_validation->set_rules('locationName','Nama lokasi');
        $this->form_validation->set_rules('kode_pos','kode pos');
        $this->form_validation->set_rules('id_kelurahan','kelurahan');
        $this->form_validation->set_rules('memberID','member ID','required',array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('shipping_addressID','Shipping Address ID','required',array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('locationID','Location ID','required',array('required' => 'You must provide a %s.'));

        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('error', 'Data tidak berhasil diubah');
            redirect_back();
        }else{
            $shipping_addressID     = $this->input->post('shipping_addressID');
            $memberID               = $this->input->post('memberID');
            $locationID             = $this->input->post('locationID');
            $shipping_address_name  = $this->input->post('shipping_address_name');
            $nama_penerima          = $this->input->post('nama_penerima');
            $locationName           = $this->input->post('locationName');
            $kode_pos               = $this->input->post('kode_pos');
            $id_kelurahan           = $this->input->post('id_kelurahan');
            $no_hp                  = $this->input->post('no_hp');

            $data_updateToLocation = array(
                'id_kelurahan'  => $id_kelurahan, 
                'locationName'  => $locationName, 
                'kode_pos'      => $kode_pos, 
            );

            if($locationID = $this->MemberM->updateToLocation($locationID, $data_updateToLocation)){
                $data_update_alamat         = array(
                    'memberID'              => $memberID, 
                    'locationID'            => $locationID, 
                    'shipping_address_name' => $shipping_address_name, 
                    'nama_penerima'         => $nama_penerima, 
                    'no_hp'                 => $no_hp, 
                    'status_alamat'         => "no_default", 
                );
                if($this->MemberM->updateToShippingAddress($shipping_addressID, $data_update_alamat)){
                    $this->session->set_flashdata('sukses', 'Data alamat berhasil disimpan');
                    redirect_back();
                }else{
                    $this->MemberM->delete($locationID);
                    $this->session->set_flashdata('error', 'Data tidak berhasil disimpan');
                    redirect_back();
                }
            }else{                
                $this->session->set_flashdata('error', 'Data tidak berhasil disimpan');
                redirect_back();
            }

        }
    }
}



