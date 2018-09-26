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
		$this->db->join('members M','P.memberID = M.memberID');
		$this->db->join('categories C','P.categoryID = C.categoryID');
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

	// hapus cart
	public function hapus_cart($cartID){
		$this->db->where('cartID', $cartID);
		$this->db->delete('carts');
		return "Berhasil hapus";
	}

	//ambil keranjang by member id
	public function get_keranjang_by_id($memberID){
		$this->db->select('*');
		$this->db->from('carts C');
		$this->db->join('products P','C.productID = P.productID');
		$this->db->join('members M','C.memberID = M.memberID');
		$this->db->where('C.memberID', $memberID);
		$this->db->order_by('C.createDate');
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	//ambil keranjang by member id dan produk id
	public function get_keranjang_by_2id($memberID, $productID){
		$this->db->select('*');
		$this->db->from('carts C');
		$this->db->join('products P','C.productID = P.productID');
		$this->db->join('members M','C.memberID = M.memberID');
		$this->db->where('C.memberID', $memberID);
		$this->db->where('P.productID', $productID);
		$this->db->order_by('C.createDate');
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	// masukin ke keranjang
	public function insertToCart($data){
		$this->db->insert('carts', $data);
		return TRUE;
	}

	// update keranjang 
	public function updateToCart($cart_id, $data){
		$this->db->where('cartID', $cart_id);
		$this->db->update('carts', $data);
		return TRUE;
	}

	public function whose_product($productID){
		$this->db->select('*');
		$this->db->from('products');
		$this->db->join('members','products.memberID = members.memberID');
		$this->db->where('productID', $productID);
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	public function get_detail_members($memberID){
		$this->db->select('*');
		$this->db->from('members M');
		$this->db->join('provinces P','M.provinceID = P.provinceID');
		$this->db->join('cities C','M.cityID = C.cityID');
		$this->db->join('courier D','M.courierID = D.courierID');
		// $this->db->join('shipping S','M.shippingID = S.shippingID','left');
		// $this->db->join('bank B', 'M.bankID = B.bankID');
		$this->db->where('memberID',$memberID);
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	// ambil semua porvinsi
	public function get_provinces(){
		$response = array();
		$this->db->select('*');
		$this->db->from('provinces');
		$query = $this->db->get();
		$response = $query->result_array();
		return $response;
	}

	// ambil citi berdasarkan provinsi
	public function get_cities($postData){
		$response = array();
		$this->db->select('cities.cityID, cities.cityName, provinces.provinceID');
		$this->db->from('cities');
		$this->db->join('provinces', 'cities.provinceID = provinces.provinceID');
		$this->db->where('cities.provinceID', $postData['provinceID']);
		$query = $this->db->get();
		$response = $query->result_array();
		return $response;
	}

	// update data member
	public function update_data_member($memberID, $data){
		$this->db->where('memberID', $memberID);
		$this->db->update('members', $data);
		return TRUE;
	}
}