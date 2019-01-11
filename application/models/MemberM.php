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
		$this->db->select('P.productID,P.categoryID,subCategoryID,P.memberID AS sellerID,P.productCode,P.productName,P.productSeo,P.salePrice,P.conditions,P.qty,P.weight,P.discount,P.sold,P.status,P.photo1,P.photo2,P.photo3,P.photo4,P.photo5,P.photo6,P.photo7,P.description,P.ad_type,P.hits,M.memberID AS memberID,M.memberName,M.tmp_lahir,M.tgl_lahir,M.gender,M.phone,M.rekening,C.*,L.*');
		$this->db->from('carts C');
		$this->db->join('products P','C.productID = P.productID');
		$this->db->join('members M','C.memberID = M.memberID');
		$this->db->join('location L','L.memberID = P.memberID');
		$this->db->where('L.status_alamat', '1');
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
		$this->db->from('members D');
		$this->db->join('location L', 'D.locationID = L.locationID','left');
		$this->db->join('kelurahan Z','L.id_kelurahan = Z.id_kelurahan');
		$this->db->join('kecamatan K','Z.id_kecamatan = K.id_kecamatan');
		$this->db->join('kabupaten_kota P','K.id_kabupaten_kota = P.id_kabupaten_kota');
		$this->db->join('propinsi J','P.id_propinsi = J.id_propinsi');
		// $this->db->join('courier D','M.courierID = D.courierID');
		// $this->db->join('shipping S','M.shippingID = S.shippingID','left');
		// $this->db->join('bank B', 'M.bankID = B.bankID');
		$this->db->where('D.memberID',$memberID);
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	public function get_members($memberID){
		$this->db->select('*');
		$this->db->from('members D');
		$this->db->where('D.memberID',$memberID);
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	public function get_member_by_email($email){
		$this->db->select('*');
		$this->db->from('members D');
		$this->db->where('D.email',$email);
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	public function get_member_by_vc($vc){
		$this->db->select('*');
		$this->db->from('members D');
		$this->db->where('D.codeVerication',$vc);
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
		$this->db->from('propinsi');
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

	// alamat
	public function get_all_provinsi(){
		$response = array();
		$this->db->select('*');
		$this->db->from('propinsi');
		$this->db->order_by('nama_propinsi');
		$query = $this->db->get();
		$response = $query->result_array();
		return $response;
	}

	public function get_kabupaten_kota($postData){
		$response = array();
		$this->db->select('*');
		$this->db->from('kabupaten_kota');
		$this->db->where('id_propinsi', $postData['id_propinsi']);
		$this->db->order_by('nama_kabupaten_kota');
		$query = $this->db->get();
		$response = $query->result_array();
		return $response;
	}

	public function get_kecamatan($postData){
		$response = array();
		$this->db->select('*');
		$this->db->from('kecamatan');
		$this->db->where('id_kabupaten_kota', $postData['id_kabupaten_kota']);
		$this->db->order_by('nama_kecamatan');
		$query = $this->db->get();
		$response = $query->result_array();
		return $response;
	}

	public function get_postcode($postData){
		$response = array();
		$this->db->select('*');
		$this->db->from('kabupaten_kota');
		$this->db->where('id_kabupaten_kota', $postData['id_kabupaten_kota']);
		$query = $this->db->get();
		$response = $query->result_array();
		return $response;
	}

	public function get_kelurahan($postData){
		$response = array();
		$this->db->select('*');
		$this->db->from('kelurahan');
		$this->db->where('id_kecamatan', $postData['id_kecamatan']);
		$this->db->order_by('nama_kelurahan');
		$query = $this->db->get();
		$response = $query->result_array();
		return $response;
	}
// ===============
	// TAMBAH ALAMAT
	public function insertToLocation($data){
		$this->db->insert('location', $data);
		return $this->db->insert_id();
	}

	// tambah shipping address
	public function insertToShippingAddress($data){
		$this->db->insert('shipping_address', $data);
		return $this->db->insert_id();
	}

	// tambah shipment address
	public function insertToShipmentAddress($data){
		$this->db->insert('shipment_address', $data);
		return $this->db->insert_id();
	}

	// hapus alamat
	public function delete($locationID){
		$this->db->where('locationID', $locationID);
		$this->db->delete('location');
		return TRUE;
	}

	// update location
	public function updateToLocation($locationID, $data){
		$this->db->where('locationID', $locationID);
		$this->db->update('location', $data);
		return TRUE;
	}

	public function updateToShippingAddress($shipping_addressID, $data){
		$this->db->where('shipping_addressID', $shipping_addressID);
		$this->db->update('shipping_address', $data);
		return TRUE;
	}

	// UPDATE ALAMAT
	public function update_address($locationID, $data){
		$this->db->where('locationID', $locationID);
		$this->db->update('location', $data);
		return TRUE;
	}

	// =========

	// GET ALAMAT
	public function get_address($memberID){
		$this->db->select('*');
		$this->db->from('location L');
		$this->db->join('kabupaten_kota K','L.id_kabupaten_kota = K.id_kabupaten_kota');
		$this->db->join('propinsi P','K.id_propinsi = P.id_propinsi');
		$this->db->where('L.memberID', $memberID);
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	public function get_shipping_address($memberID){
		$this->db->select('*');
		// $this->db->from('shipping_address A');
		// $this->db->join('location L', 'A.locationID = L.locationID');
		// // $this->db->join('kelurahan Z','L.id_kelurahan = Z.id_kelurahan');
		// // $this->db->join('kecamatan K','Z.id_kecamatan = K.id_kecamatan');
		// $this->db->join('kabupaten_kota P','L.id_kabupaten_kota = P.id_kabupaten_kota');
		// $this->db->join('propinsi J','P.id_propinsi = J.id_propinsi');
		// $this->db->where('A.memberID', $memberID);
		// $this->db->order_by('L.status_alamat','ASC');
		$this->db->from('location L');
		$this->db->join('kabupaten_kota K','L.id_kabupaten_kota = K.id_kabupaten_kota');
		$this->db->join('propinsi P','K.id_propinsi = P.id_propinsi');
		$this->db->where('L.status_alamat', '1');
		$this->db->where('L.memberID', $memberID);
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	//update almaat no default
	public function update_alamat($locationID,$data){
		$this->db->where('locationID', $locationID);
		$this->db->update('location', $data);
		return TRUE;
	}

	// jadiin utama  alamat
	public function set_utama($locationID, $data){
		$this->db->where('locationID', $locationID);
		$this->db->update('location', $data);
		return TRUE;
	}
	//ambil shpping addres utama
	public function get_shipping_address_utama($memberID){
		$this->db->select('*');
		$this->db->from('shipping_address A');
		$this->db->join('location L', 'A.locationID = L.locationID');
		$this->db->join('kelurahan Z','L.id_kelurahan = Z.id_kelurahan');
		$this->db->join('kecamatan K','Z.id_kecamatan = K.id_kecamatan');
		$this->db->join('kabupaten_kota P','K.id_kabupaten_kota = P.id_kabupaten_kota');
		$this->db->join('propinsi J','P.id_propinsi = J.id_propinsi');
		$this->db->where('A.memberID', $memberID);
		$this->db->where('A.status_alamat', "default");
		$this->db->order_by('A.status_alamat','ASC');
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	// ambil shipping_address by id
	public function get_shipping_address_by_id($shipping_addressID){
		$this->db->select('*');
		$this->db->from('shipping_address A');
		$this->db->where('A.shipping_addressID', $shipping_addressID);
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	//ambil alamat utama
	public function get_default_address($id){
		$this->db->select('*');
		$this->db->from('location L');
		$this->db->join('kabupaten_kota K','L.id_kabupaten_kota = K.id_kabupaten_kota');
		$this->db->join('propinsi P','K.id_propinsi = P.id_propinsi');
		$this->db->where('L.status_alamat', '1');
		$this->db->where('L.memberID', $id);
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ditemukan";
		}
	}

	// hapus alamat
	public function delete_address($id){
		$this->db->where('locationID', $id);
		$this->db->delete('location');
		return "berhasil";
	}

	// public function hapus_alamat($shipping_addressID){
	// 	$this->db->where('shipping_addressID', $shipping_addressID);
	// 	$this->db->delete('shipping_address');
	// 	return "berhasil";
	// }

	// hapus location
	// public function hapus_location($locationID){
	// 	$this->db->where('locationID', $locationID);
	// 	$this->db->delete('location');
	// 	return "berhasil";
	// }

	public function get_bank_id($id)
	{
		$this->db->select('*');
		$this->db->from('bank');
		$this->db->where('bankID',$id);
		return $this->db->get();
	}
}