<?php
defined('BASEPATH') OR exit('No direct script acces allowed');
class OrderM extends CI_model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function add_to_orders($data)
	{
		$this->db->insert('orders', $data);
		return $this->db->insert_id();
	}

	public function add_to_order_detail($data)
	{
		$this->db->insert('orders_detail', $data);
		return TRUE;
	}

	public function get_orders($orderID)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('orderID',$orderID);
		return $this->db->get();
	}

	public function get_order_detail($orderID)
	{
		$this->db->select('P.productID,P.categoryID,P.subCategoryID,P.productCode,P.productName,P.productSeo,P.salePrice,P.conditions,P.qty,P.weight,P.sold,P.status,P.photo1,P.photo2,P.photo3,P.photo4,P.photo5,P.photo6,P.photo7,P.description,P.ad_type,P.hits,OD.*');
		$this->db->from('orders_detail OD');
		$this->db->join('products P','OD.productID = P.productID');
		$this->db->where('orderID',$orderID);
		return $this->db->get();
	}
}
?>