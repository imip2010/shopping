<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
class HomeM extends CI_model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//mengambil produk terpopuler
	public function get_produk_terpopuler(){
		$this->db->select('*');
		$this->db->from('products');
		$this->db->order_by('productID', 'DESC');
		$this->db->limit('6');
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ada produk terpopuler";
		}
	}

	//ambil data kontak
	public function get_kontak(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->order_by('userID');
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	//ambil header2
	public function get_header2(){
		$this->db->select('*');
		$this->db->from('header2');
		$this->db->where('status = "Y"');
		$this->db->order_by('headerDuaID','DESC');
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	//ambil header3
	public function get_header3(){
		$this->db->select('*');
		$this->db->from('header3');
		$this->db->where('status = "Y"');
		$this->db->order_by('headerTigaID', 'DESC');
		$this->db->limit('3');
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	//ambil data kategori
	public function get_kategori(){
		$this->db->select('*');
		$this->db->from('categories A');
		$this->db->join('products B', 'A.categoryID = B.categoryID', 'left');
		$this->db->group_by('A.categoryName');
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	//ambil produk terbaru
	public function get_produk_terbaru(){
		$this->db->select('*');
		$this->db->from('products A');
		$this->db->join('sub_categories B','A.subCategoryID = B.subCategoryID', 'left');
		$this->db->join('categories C', 'A.categoryID = C.categoryID', 'left');
		$this->db->join('members D', 'A.memberID = D.memberID');
		$this->db->order_by('A.productID');
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}
}
?>