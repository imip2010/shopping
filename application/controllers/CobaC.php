<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	
	public function kereta()
	{
        $this->data['dataDiri'] = $this->session->userdata();
		$this->data['logged_in'] = $this->session->userdata('logged_in');
		$this->data['isi'] = 'isi';
		$this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		$this->data['isi'] = $this->load->view('KeretaV', $this->data, TRUE);
		$this->load->view('layout', $this->data);
	}

}
