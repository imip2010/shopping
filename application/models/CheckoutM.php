<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
class CheckoutM extends CI_model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	//mengambil data kurir
	public function get_courier(){
		$this->db->select('*');
		$this->db->from('courier');
		$this->db->order_by('courierID', 'ASC');
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "tidak ada produk terpopuler";
		}
	}

	public function get_seller_detail()
	{
		$memberID = $this->session->memberID;
		$this->db->select('P.productID,P.categoryID,subCategoryID,P.memberID AS sellerID,P.productCode,P.productName,P.productSeo,P.salePrice,P.conditions,P.qty,P.weight,P.discount,P.sold,P.status,P.photo1,P.photo2,P.photo3,P.photo4,P.photo5,P.photo6,P.photo7,P.description,P.ad_type,P.hits,M.memberID AS memberID,M.locationID,M.memberName,M.tmp_lahir,M.tgl_lahir,M.gender,M.address,M.phone,M.rekening,C.quantity,C.price');
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
}
?>