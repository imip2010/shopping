<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class LoginM extends CI_Model{
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}
	public function ceknum($email, $password){ //cek akun di db pengguna jabatan (berapa rows)
		$this->db->where('email', $email);
		$this->db->where('password', md5($password));
		return $this->db->get('members');
	}
}