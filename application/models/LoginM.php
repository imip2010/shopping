<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class LoginM extends CI_Model{
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}
	public function ceknum($email, $password){ //cek akun di db pengguna jabatan (berapa rows)
		$this->db->where('email', $email);
		$this->db->where('password', md5($password));
		$this->db->where('status', 'Y');
		return $this->db->get('members');
	}

	public function insert_data_member($data){ //post pengguna
		$this->db->insert('members', $data);
		return TRUE;
	}

	public function lastLogin($time, $memberID){
		$data = array('lasLogin' => $time);

		$this->db->where('memberID', $memberID);
		$this->db->update('members', $data);
		return TRUE;
	}

	public function activate($data, $verificationCode)
	{
		$this->db->where('codeVerication',$verificationCode);
		$this->db->update('members', $data);
		return TRUE;
	}
}