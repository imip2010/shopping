<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$this->load->model('HomeM');
		//in_access(); //helper buat batasi akses login/session
	}
	public function index()
	{
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('detail_v', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}
}



