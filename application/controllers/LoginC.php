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
		}else{
			$this->session->set_flashdata('error','Email atau kata sandi salah');
			redirect('LoginC');
		}
	}

	public function log_out(){
		$this->session->sess_destroy();	
		redirect(base_url().'HomeC/');	
	}

	public function register(){
		$this->load->view('register');
	}

	function generate_password($length = 10){
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
            	$this->sendemail($email, $passhash, $username); //kirim email
				$this->session->set_flashdata('sukses','Register successfull. Please Login. . .');  
				redirect(base_url('LoginC/'));
			}else{
				$this->session->set_flashdata('error','Register unsuccessfull. Please try again. . .');  
				redirect(base_url('LoginC/register'));
			}
		}

	}

	public function sendemail($email, $password, $username){
		$to = $email;
		$pass = $password;
		$username = $username;		
		$subject = "Email aktivasi: Aktifkan akun EMarket.com Anda melalui email ini!";
		$html = "<h5>Thank you for your registration at e-market.com</h5>
		<p>
		Your username : $username <br>
		Your email account : $to <br>
		Your password : $pass <br><br>

		Your activation code is $verificationCode <br><br>
		For activation please click this url: <br>
		<a href='http://www.ecommerce.com/activate.php?code=$verificationCode&email=$email'>http://www.ecommerce.com/activate.php?code=$verificationCode&email=$email</a>
		<br><br><br>
		Thank You<br>
		This is an automated email. Do not reply. For trouble send to <a href='mailto: admin@ecommerce.com'>admin@ecommerce.com</a><br><br>
		E-market.com
		</p>
		";	
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		// Additional headers
		$headers .= 'From: Membership <membership@ecommerce.com>' . "\r\n";

		mail($to, $subject, $html, $headers);
		
		header("Location: success.html?suc=ok");		
	}
}



