<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class HomeC extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model(['LoginM','HomeM']);
		// time_ago();
		//in_access(); //helper buat batasi akses login/session
	}

	public function index(){
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();

		$this->data['get_produk_terbaru'] = $this->HomeM->get_produk_terbaru()->result();
		$this->data['get_header2'] = $this->HomeM->get_header2()->result();
		$this->data['isi'] = 'isi';
		$this->data['isi'] = $this->load->view('home', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}

	public function detail_produk($id_produk){
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();

		$this->data['detail_produk'] = $this->HomeM->get_detail_product($id_produk)->result()[0];
		
		//dilihat
		$hit = $this->HomeM->get_detail_product($id_produk)->result()[0]->hits;
		$hits_new = $hit + 1;
		$this->HomeM->dilihat($id_produk, $hits_new);
		
		$this->data['favorit'] = $this->HomeM->favorit($id_produk)->num_rows();
		$this->data['isi'] = $this->load->view('detail_v', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
}



