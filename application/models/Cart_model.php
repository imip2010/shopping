<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
class Cart_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//mengambil produk 
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

	//mengambil total produk dalam keranjang 
	public function count_product($memberID){
		$this->db->select('count(C.cartID) as Total');
		$this->db->from('carts C');
		$this->db->join('products P','C.productID = P.productID');
		$this->db->join('members M','C.memberID = M.memberID');
		$this->db->where('C.memberID', $memberID);
		$query = $this->db->get();
		if($query){
			return $query->row()->Total;
		}else{
			echo "tidak ditemukan";
		}
	}

	//tambah kuantitas
	public function count_p($cartID){
		$this->db->set('quantity','quantity+1', FALSE);
		$this->db->where('cartID',$cartID);
		$this->db->update('carts');
	}

	//kurangi kuantitas
	public function count_m($cartID){
		$this->db->set('quantity','quantity-1', FALSE);
		$this->db->where('cartID',$cartID);
		$this->db->update('carts');
	}

	public function get_quantity($memberID,$cartID)
	{
		$this->db->select('quantity');
		$this->db->from('carts C');
		$this->db->join('products P','C.productID = P.productID');
		$this->db->join('members M','C.memberID = M.memberID');
		$this->db->where('C.memberID', $memberID);
		$this->db->where('C.cartID', $cartID);
		$query = $this->db->get();
		if($query){
			return $query->row()->quantity;
		}else{
			echo "tidak ditemukan";
		}
	}

	public function update_courier_cart($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function update_product($productID,$qty,$sold)
	{
		$this->db->set('qty','qty-'.$qty, FALSE);
		$this->db->set('sold','sold+'.$sold, FALSE);
		$this->db->where('productID',$productID);
		$this->db->update('products');
	}
}