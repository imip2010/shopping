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

		$this->data['isi'] = 'isi';
		$this->data['isi'] = $this->load->view('member/jual_barang', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}

	// pindah ke daftar_barang
	public function daftar_barang(){
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['daftar_barang'] = $this->MemberM->get_produk_by_id()->result();
		$this->data['kategori'] = $this->MemberM->get_all_kategori();

		$this->data['isi'] = 'isi';
		$this->data['isi'] = $this->load->view('member/daftar_barang', $this->data, TRUE);
		$this->load->view('layout', $this->data);
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
    		$nama_barang   			= $_POST['nama_barang'];  
    		$kondisi      			= $_POST['kondisi'];  
    		$kategori_barang        = $_POST['kategori'];  
    		$sub_kategori_barang    = $_POST['sub_kategori'];  
    		$harga    				= $_POST['harga'];  
    		$berat    				= $_POST['berat'];  
    		$stok    				= $_POST['stok'];  
    		$diskon    				= $_POST['diskon'];  
    		$deskripsi    			= $_POST['deskripsi']; 
    		$memberID 				= $this->session->userdata('memberID');
    		$productCode 			= date('ymdhis');
    		$productSeo      		= $this->seo_title($nama_barang); 

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

    		$data  = array(
    			'productName'   	=> $nama_barang,
    			'photo1' 			=> $dataInfo[0]['file_name'],
    			'photo2' 			=> $dataInfo[1]['file_name'],
    			'photo3' 			=> $dataInfo[2]['file_name'],
    			'photo4' 			=> $dataInfo[3]['file_name'],
    			'photo5' 			=> $dataInfo[4]['file_name'],
    			'conditions'        => $kondisi,  
    			'categoryID'        => $kategori_barang,  
    			'subCategoryID'     => $sub_kategori_barang,  
    			'salePrice'         => $harga,
    			'weight'        	=> $berat,
    			'qty'        		=> $stok,
    			'discount'        	=> $diskon,
    			'memberID'        	=> $memberID,
    			'productCode'		=> $productCode,
    			'productSeo'		=> $productSeo,
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
    	$config['upload_path'] 		= './assets/images/product/';
    	$config['allowed_types'] 	= 'gif|jpg|png';
    	$config['create_thumb']		= TRUE;
    	$config['max_size']      	= '0';
    	$config['overwrite']     	= FALSE;
    	$config['encrypt_name'] 	= TRUE;
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

}



