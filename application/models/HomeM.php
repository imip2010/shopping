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
		$this->db->join('location L', 'D.locationID = L.locationID','left');
		$this->db->join('kelurahan Z','L.id_kelurahan = Z.id_kelurahan');
		$this->db->join('kecamatan K','Z.id_kecamatan = K.id_kecamatan');
		$this->db->join('kabupaten_kota P','K.id_kabupaten_kota = P.id_kabupaten_kota');
		$this->db->join('propinsi J','P.id_propinsi = J.id_propinsi');
		$this->db->limit('6');
		$this->db->order_by('A.productID','DESC');
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	// get produk dengan diskon
	public function get_produk_diskon(){
		$this->db->select('*');
		$this->db->from('products A');
		$this->db->join('sub_categories B','A.subCategoryID = B.subCategoryID', 'left');
		$this->db->join('categories C', 'A.categoryID = C.categoryID', 'left');
		$this->db->join('members D', 'A.memberID = D.memberID','left');
		$this->db->join('location L', 'D.locationID = L.locationID','left');
		$this->db->join('kelurahan Z','L.id_kelurahan = Z.id_kelurahan');
		$this->db->join('kecamatan K','Z.id_kecamatan = K.id_kecamatan');
		$this->db->join('kabupaten_kota P','K.id_kabupaten_kota = P.id_kabupaten_kota');
		$this->db->join('propinsi J','P.id_propinsi = J.id_propinsi');
		$this->db->where('A.discount != 0');
		$this->db->limit('6');
		$this->db->order_by('A.productID','DESC');
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	public function get_all_kategori(){
		$this->db->select('*');
		$this->db->from('categories');
		$query = $this->db->get();
		return $query;
	}

	public function get_detail_product($productID){
		$this->db->select('*');
		$this->db->from('products A');
		$this->db->join('sub_categories B','A.subCategoryID = B.subCategoryID', 'left');
		$this->db->join('categories C', 'A.categoryID = C.categoryID', 'left');
		$this->db->join('members D', 'A.memberID = D.memberID','left');
		$this->db->join('location L', 'D.locationID = L.locationID','left');
		$this->db->join('kelurahan Z','L.id_kelurahan = Z.id_kelurahan');
		$this->db->join('kecamatan K','Z.id_kecamatan = K.id_kecamatan');
		$this->db->join('kabupaten_kota P','K.id_kabupaten_kota = P.id_kabupaten_kota');
		$this->db->join('propinsi J','P.id_propinsi = J.id_propinsi');
		$this->db->where('A.productID', $productID);
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	public function get_produk_terkait($kategoriID,$productID){
		$this->db->select('*');
		$this->db->from('products A');
		$this->db->join('sub_categories B','A.subCategoryID = B.subCategoryID', 'left');
		$this->db->join('categories C', 'A.categoryID = C.categoryID', 'left');
		$this->db->join('members D', 'A.memberID = D.memberID','left');
		$this->db->join('location L', 'D.locationID = L.locationID','left');
		$this->db->join('kelurahan Z','L.id_kelurahan = Z.id_kelurahan');
		$this->db->join('kecamatan K','Z.id_kecamatan = K.id_kecamatan');
		$this->db->join('kabupaten_kota P','K.id_kabupaten_kota = P.id_kabupaten_kota');
		$this->db->join('propinsi J','P.id_propinsi = J.id_propinsi');
		$this->db->where('A.productID !=', $productID);
		$this->db->where('C.categoryID', $kategoriID);
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	public function favorit($productID){
		$this->db->select('*');
		$this->db->from('favorite F');
		$this->db->join('products P','P.productID = F.productID','left');
		$this->db->join('members M', 'M.memberID = F.memberID','left');
		$this->db->where('P.productID', $productID);
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	//fungsi dilihat
	public function dilihat($productID, $hit){
		$data = array('hits' => $hit);

		$this->db->where('productID', $productID);
		$this->db->update('products', $data);
		return TRUE;
	}
}
?>