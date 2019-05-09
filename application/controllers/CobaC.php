<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class CobaC extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('HomeM');
		//in_access(); //helper buat batasi akses login/session
	}

	
	public function pulsa()
	{
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('PulsaV', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
	
	public function paket()
	{
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('PaketV', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
	
	public function listrik()
	{
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('ListrikV', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
	
	public function pdam()
	{
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('PdamV', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
	
	public function kereta()
	{
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('KeretaV', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
	
	public function pesawat()
	{
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('PesawatV', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
	
	public function hotel()
	{
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('HotelV', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
	
	public function bpjs()
	{
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('BpjsV', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
  
	public function detail(){
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('detail_v', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
	public function kategori(){
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['kategori'] = $this->MemberM->get_all_kategori();
		$this->data['menu_kategori'] = $this->HomeM->get_all_kategori()->result();

		$this->data['isi'] = $this->load->view('kategori_v', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
	public function label_barang(){
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('labelbarang_v', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
	public function pengaturan_alamat(){
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('pengaturan_alamat_v', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
	public function pengaturan_profil(){
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('pengaturan_profile_v', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
	public function infoedit(){
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('profile_edit_v',$this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
	public function rating(){
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('rating',$this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
  
	public function metodepembayaran(){
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('member/MetodepembayaranV', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
  
	public function pembayaran(){
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('member/PembayaranV', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
  
	public function riwayat(){
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('member/Riwayatbelanja', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}

	
	public function rincianbelumbayar(){
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('member/Blmbayar_v', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}

	
	public function dikemas(){
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('member/Dikemas_v', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
	
	public function dikirim(){
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('member/Dikirim_v', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}

	public function detail_transaksi(){
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('member/detail_transaksi', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}

	public function ubahmetode(){
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('member/ubahmetode_v', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}

	public function toko(){
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('Toko_v', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
	
}
  

