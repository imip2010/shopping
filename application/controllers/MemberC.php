<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberC extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model(['HomeM','LoginM']);
		// in_access(); //helper buat batasi akses login/session
	}

	public function index(){
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['get_produk_terbaru'] = $this->HomeM->get_produk_terbaru()->result();
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['get_header2'] = $this->HomeM->get_header2()->result();
		$this->data['isi'] = 'isi';
		$this->data['isi'] = $this->load->view('home', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}

	public function kategori()
	{
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('kategori_v', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
}



