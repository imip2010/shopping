<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class Login extends CI_Controller {

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
	var $data = array();

	public function __construct(){
		parent::__construct();
		$this->load->model('LoginM');
	}

	public function index(){
		$this->load->view('login_v');
	}

	public function log_in(){
		if($this->input->post('submit')){
			if($this->LoginM->check_captcha() == TRUE)
				echo "<span style=\"color:blue\">Captcha cocok</span>";
			else echo "<span style=\"color:red\">Captcha salah</span>";
		}
		$email		=$this->input->post('email');
		$password	=$this->input->post('password');
		$ceknum		=$this->LoginM->ceknum($email,$password)->num_rows();
		$query		=$this->LoginM->ceknum($email,$password)->row();
		if($ceknum>0){
			$userData 	= array(
				'email' 			=> $query->email,
				'password' 			=> $query->password,
				'logged_in' 		=> TRUE
			);
			$this->session->set_userdata($userData);			
			redirect('home');
		}else{
			$this->session->set_flashdata('error','Email atau kata sandi salah');
			redirect('login');
		}
	}

	public function log_out(){
		$this->session->sess_destroy();	
		redirect(base_url().'home/');	
	}
}



