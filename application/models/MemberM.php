<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MemberM extends CI_Model{
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}
	
	public function get_all_kategori(){
		$response = array();
		$this->db->select('*');
		$this->db->from('categories');
		$query = $this->db->get();
		$response = $query->result_array();
		return $response;
	}

	public function get_sub_kategori($postData){
		$response = array();
		$this->db->select('sub_categories.subCategoryID, sub_categories.subCategoryName, categories.categoryID');
		$this->db->from('sub_categories');
		$this->db->join('categories', 'categories.categoryID = sub_categories.categoryID');
		$this->db->where('sub_categories.categoryID', $postData['categoryID']);
		$query = $this->db->get();
		$response = $query->result_array();
		return $response;
	}

	// get produk by id
	public function get_produk_by_id(){
		$memberID = $this->session->userdata('memberID');
		$this->db->select('*');
		$this->db->from('products P');
		$this->db->join('members M','P.memberID = M.memberID','left');
		$this->db->join('categories C','P.categoryID = C.categoryID','left');
		$this->db->join('sub_categories S','P.subCategoryID = S.subCategoryID');
		$this->db->where('P.memberID', $memberID);
		$this->db->order_by('P.productName');
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	public function insert_jual_barang($data){
		$this->db->insert('products', $data);
		return TRUE;
	}

	public function hapus_barang($productID){
		$this->db->where('productID', $productID);
		$this->db->delete('products');
		return "berhasil";
	}
}