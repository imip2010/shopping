<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
class LoginC extends CI_Controller {

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
		$this->load->model(['LoginM','MailM','MemberM']);
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
		$cek_verified=$this->LoginM->ceknums($email,$password)->row();
		if($ceknum>0){
			$userData 	= array(
				'email' 			=> $query->email,
				'nama'				=> $query->memberName,
				'password' 			=> $query->password,
				'memberID' 			=> $query->memberID,
				'address' 			=> $query->address,
				'logged_in' 		=> TRUE
			);
			$lastLogin = date('Y-m-d H:i:s');
			$this->LoginM->lastLogin($lastLogin, $query->memberID);
			$this->session->set_userdata($userData);			
			redirect('HomeC');
		}elseif($cek_verified->status=="N"){
			$this->session->set_flashdata('error','Email anda belum diverifikasi');
			redirect('LoginC');
		}else{
			$this->session->set_flashdata('error','Email atau kata sandi salah');
			redirect('LoginC');
		}
	}

	public function log_out(){
		$this->session->sess_destroy();	
		redirect(base_url().'LoginC/');	
	}

	public function register(){
		$this->load->view('register');
	}

	function generate_password($length = 30){
		$chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
		$str = '';
		$max = strlen($chars) - 1;

		for ($i=0; $i < $length; $i++)
			$str .= $chars[rand(0, $max)];

		return $str;
	}	

	public function post_register(){
		$this->form_validation->set_rules('username', 'Username','required|is_unique[members.username]');
		$this->form_validation->set_rules('email','Email');
		$this->form_validation->set_rules('fullName','Full Name');
		$this->form_validation->set_rules('phone','Phone');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[50]|matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password','Confirm password','trim|required|min_length[6]|max_length[50]');
		$this->form_validation->set_message('is_unique', 'Data %s sudah dipakai'); 

		if($this->form_validation->run() == FALSE){
			$this->register();
		}else{
			$username   	= $_POST['username'];  
			$email          = $_POST['email'];  
			$fullName       = $_POST['fullName'];  
			$phone      	= $_POST['phone']; 
			$password       = $_POST['password'];  
			$passhash       = hash('md5', $password);
			$status			= "N";
			$createdDate 	= date('Y-m-d H:i:s');
			$verificationCode = $this->generate_password();


			$data_register	= array(
				'username' 			=> $username,
				'email' 			=> $email,
				'phone' 			=> $phone,
				'memberName' 		=> $fullName,
				'password' 			=> $passhash,
				'createdDate'		=> $createdDate,
				'status'			=> $status,
				'codeVerication'	=> $verificationCode);
			
			if($this->LoginM->insert_data_member($data_register)){
            	$this->send_verification($email, $username, $verificationCode); //kirim email
				$this->session->set_flashdata('sukses','Register successfull. Please Login. . .');  
				redirect(base_url('LoginC/'));
			}else{
				$this->session->set_flashdata('error','Register unsuccessfull. Please try again. . .');  
				redirect(base_url('LoginC/register'));
			}
		}

	}

	public function send_verification($email, $username, $verificationCode){
		
        $subject = "Email aktivasi: Aktifkan akun EMarket.com Anda melalui email ini!";
 
        $data = array(
            'username' => $username,
            'email' => $email,
            'verificationCode' => $verificationCode
        );

        $template = 'emails/email_verification';
        
        $this->MailM->send_invoice($email,$subject,$data,$template);

		redirect(base_url('LoginC/'));	
	}

	public function activate($verificationCode)
	{
		// $verificationCode = $this->uri->segment(2);
		$data = array('status' => 'Y');

		if ($this->LoginM->activate($data, $verificationCode)) {
			redirect('LoginC');
			echo 'Email anda berhasil diverifikasi';
		}else{
			redirect('LoginC');
			echo 'Email anda gagal diverifikasi';
		}
	}

	public function reset_password()
	{
		$email = $this->input->post('email');
		$codeVerication = $this->MemberM->get_member_by_email($email)->row()->codeVerication;

		if (!empty($codeVerication)) {
			$subject = "Ganti Kata Sandi : Ubah kata sandi Anda melalui email ini!";
	 
	        $data = array(
	            'codeVerication' => $codeVerication
	        );

	        $template = 'emails/forgot_password';
	        
	        $this->MailM->send_invoice($email,$subject,$data,$template);

	        echo "Buka email anda untuk mendapatkan tautan ganti kata sandi!";
		}else{
			echo "Alamat email Tidak Terdaftar!";
		}
	}

	public function load_reset()
	{
		$this->data['dataDiri'] = $this->MemberM->get_member_by_vc($this->uri->segment(2))->row()->memberID;
		return $this->load->view('member/reset_password', $this->data);
	}

	public function reset()
	{
		$this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[50]|matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password','Confirm password','trim|required|min_length[6]|max_length[50]');
		if($this->form_validation->run() == FALSE){
			$this->log_in();
		}else{
			$memberID 	= $this->input->post('dataDiri');
			$password 	= $this->input->post('password');
			$data = array('password' => hash('md5', $password));
			// print_r($memberID);

			if ($this->LoginM->reset_password($data, $memberID)) {
				$this->session->set_flashdata('sukses','Kata sandi berhasil diubah!');  
				redirect(base_url('LoginC/'));
			}else{
				echo "Gagal!";
			}
		}

	}
}



