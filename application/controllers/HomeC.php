<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class HomeC extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model(['LoginM','HomeM','CheckoutM','MemberM']);
		// time_ago();
		//in_access(); //helper buat batasi akses login/session
	}

	public function index(){
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['get_produk_diskon'] = $this->HomeM->get_produk_diskon()->result();
		$this->data['menu_kategori'] = $this->HomeM->get_all_kategori()->result();

        $memberID = $this->session->userdata('memberID');
        if ($this->MemberM->get_shop($memberID)->num_rows() > 0) {
            $this->data['detail_shop'] = $this->MemberM->get_shop($memberID)->result()[0];
        }

		$this->data['get_produk_terbaru'] = $this->HomeM->get_produk_terbaru()->result();
		$this->data['get_header2'] = $this->HomeM->get_header2()->result();
		$this->data['isi'] = 'isi';
		$this->data['isi'] = $this->load->view('home', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}

	public function detail_produk($id_produk){
        $memberID = $this->session->userdata('memberID');
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['menu_kategori'] = $this->HomeM->get_all_kategori()->result();

		$this->data['detail_produk'] = $this->HomeM->get_detail_product($id_produk)->result()[0];
		$productID = $this->HomeM->get_detail_product($id_produk)->result()[0]->productID;
		$kategori = $this->HomeM->get_detail_product($id_produk)->result()[0]->categoryID;
		$this->data['produk_terkait'] = $this->HomeM->get_produk_terkait($kategori, $productID)->result();
		
		//dilihat
		$hit = $this->HomeM->get_detail_product($id_produk)->result()[0]->hits;
		$hits_new = $hit + 1;
		$this->HomeM->dilihat($id_produk, $hits_new);

		$this->data['provinsi'] = $this->HomeM->get_provinsi()->result();

        if ($this->MemberM->get_shop($memberID)->num_rows() > 0) {
            $this->data['detail_shop'] = $this->MemberM->get_shop($memberID)->result()[0];
        }
		$this->data['favorit'] = $this->HomeM->favorit($id_produk)->num_rows();
		$this->data['isi'] = $this->load->view('detail_v', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}

	public function get_kabupaten()
	{
		$id_provinsi = $this->input->post('id_provinsi');
		$data = $this->HomeM->get_kabupaten($id_provinsi)->result();
		echo json_encode($data);
	}

	public function cek_ongkir($origin,$destination,$weight,$total,$cost)
    {
        $data = $this->CheckoutM->get_courier()->result();
        echo "
            <table class='table' id='tabel_cek_ongkir'>
			    <tbody>
			";
        foreach ($data as $key => $kurir) {
            $ongkir = $this->CheckoutM->cek_ongkir($origin,$destination,$weight,$kurir->courierName);
            $service = count($ongkir['rajaongkir']['results'][0]['costs']);
            if($service>0){
	            echo "
				        <tr>
				            <td style='border: 0px; background:#3587d8; color:#FFF' width='250'><b>".$ongkir['rajaongkir']['results'][0]['name']."</b></td>
				            <td style='border: 0px'>
								<tr>
						            <td width='200' style='color: #3587d8'><b>SERVIS</b></td>
						            <td style='color: #3587d8'><b>WAKTU PENGANTARAN</b></td>
						            <td style='color: #3587d8'><b>ONGKOS KIRIM</b></td>
						            <td style='color: #3587d8'><b>TOTAL HARGA</b></td>
								</tr>
				";
					for ($i=0; $i < $service; $i++) { 
						echo "
								<tr>
									<td style='color: #000'>".$ongkir['rajaongkir']['results'][0]['costs'][$i]['service']." - (".$ongkir['rajaongkir']['results'][0]['costs'][$i]['description'].")</td>
									<td style='color: #000'>".$ongkir['rajaongkir']['results'][0]['costs'][$i]['cost'][0]['etd']."</td>
									<td style='color: #000'>Rp ".number_format($ongkir['rajaongkir']['results'][0]['costs'][$i]['cost'][0]['value'],0,',','.')."</td>
									<td style='color: #000'>Rp ".number_format(($ongkir['rajaongkir']['results'][0]['costs'][$i]['cost'][0]['value']+($total*$cost)),0,',','.')."</td>
								</tr>
						";
					};
				echo "
							</td>
				            <td></td>
				        </tr>
				";
			}else{
				echo "
				        <tr>
				            <td style='border: 0px; background:#ff7878; color:#FFF' width='250'><b>".$ongkir['rajaongkir']['results'][0]['name']."</b></td>
				            <td style='color: #ff7878;'>Tidak mendukung pengiriman</td>
				        </tr>
				";
			}
			            // <td><img src='".base_url()."assets/images/jasa/jt.png' style='width: 50%;'/></td>
            // print_r(count($ongkir['rajaongkir']['results'][0]['costs']));
            // echo " *X* ";

            // for ($i=0; $i < count($ongkir['rajaongkir']['results'][0]['costs']); $i++) { 
            // 	// print_r($ongkir['rajaongkir']['results'][0]['costs'][$i]);
            // 	print_r($ongkir['rajaongkir']['results'][0]['costs'][$i]['service']);
            // 	echo " Harga : ";
            // 	print_r($ongkir['rajaongkir']['results'][0]['costs'][$i]['cost'][0]['value']);
            // 	echo " Estimasi : ";
            // 	print_r($ongkir['rajaongkir']['results'][0]['costs'][$i]['cost'][0]['etd']);
            // 	echo " ||||||||||||||||||||||| ";
            // }
        }
        echo "  
			    </tbody>
			</table>
			";
    }
}



