<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Kategori extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(['HomeM','LoginM','MemberM']);
		// in_access(); //helper buat batasi akses login/session
	}
	public function index()
	{
		$this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['kategori'] = $this->MemberM->get_all_kategori();
		$this->data['menu_kategori'] = $this->HomeM->get_all_kategori()->result();

		$this->data['isi'] = $this->load->view('kategori_v', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
}



