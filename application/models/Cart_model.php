<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
class Cart_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//mengambil produk terpopuler
	public function get_all_produk(){
		$hasil=$this->db->get('products');
        return $hasil->result();
	}

	//ambil keranjang by member id
	public function get_cart($memberID){
		$this->db->select('*');
		$this->db->from('carts C');
		$this->db->join('products P','C.productID = P.productID');
		$this->db->join('members M','C.memberID = M.memberID');
		$this->db->where('C.memberID', $memberID);
		$this->db->order_by('C.createDate');
		$query = $this->db->get();
		if($query){
			return $query->result();
		}else{
			echo "tidak ditemukan";
		}
	}
}