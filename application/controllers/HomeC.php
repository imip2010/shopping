<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeC extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model(['LoginM','HomeM']);
		//in_access(); //helper buat batasi akses login/session
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

	public function register(){
		$this->form_validation->set_rules('username', 'Username','required|is_unique[members.username]');
		$this->form_validation->set_rules('email','Email');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[50]|matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password','Confirm password','trim|required|min_length[6]|max_length[50]');
		$this->form_validation->set_message('is_unique', 'Data %s sudah dipakai'); 

		if($this->form_validation ){}

	}
}



