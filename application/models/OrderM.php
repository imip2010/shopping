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

	public function get_invoice_pack($memberID)
	{
		$this->db->select('*');
		$this->db->from('orders O');
		$this->db->join('orders_detail OD','OD.orderID = O.orderID');
		$this->db->join('products P','OD.productID = P.productID');
		$this->db->join('members M','M.memberID = P.memberID');
		$this->db->where('O.statusOrder','Unpaid');
		$this->db->where('OD.stat',null);
		$this->db->group_by('O.orderID');
		$this->db->where('O.memberID',$memberID);
		return $this->db->get();
	}

	public function get_invoice_pack_packing($memberID)
	{
		$this->db->select('*');
		$this->db->from('orders O');
		$this->db->join('orders_detail OD','OD.orderID = O.orderID');
		$this->db->join('products P','OD.productID = P.productID');
		$this->db->join('members M','M.memberID = P.memberID');
		$this->db->where('O.statusOrder','Paid');
		$this->db->where('OD.stat','Packing');
		$this->db->group_by('O.orderID');
		$this->db->where('O.memberID',$memberID);
		return $this->db->get();
	}

	public function get_invoice_pack_send($memberID)
	{
		$this->db->select('*');
		$this->db->from('orders O');
		$this->db->join('orders_detail OD','OD.orderID = O.orderID');
		$this->db->join('products P','OD.productID = P.productID');
		$this->db->join('members M','M.memberID = P.memberID');
		$this->db->where('O.statusOrder','Paid');
		$this->db->where('OD.stat','Send');
		$this->db->group_by('O.orderID');
		$this->db->where('O.memberID',$memberID);
		return $this->db->get();
	}

	public function get_invoice_pack_done($memberID)
	{
		$this->db->select('*');
		$this->db->from('orders O');
		$this->db->join('orders_detail OD','OD.orderID = O.orderID');
		$this->db->join('products P','OD.productID = P.productID');
		$this->db->join('members M','M.memberID = P.memberID');
		$this->db->where('O.statusOrder','Paid');
		$this->db->where('OD.stat','Done');
		$this->db->group_by('O.orderID');
		$this->db->where('O.memberID',$memberID);
		return $this->db->get();
	}

	public function get_invoice_pack_reject($memberID)
	{
		$this->db->select('*');
		$this->db->from('orders O');
		$this->db->join('orders_detail OD','OD.orderID = O.orderID');
		$this->db->join('products P','OD.productID = P.productID');
		$this->db->join('members M','M.memberID = P.memberID');
		$this->db->where('O.statusOrder','Reject');
		$this->db->group_by('O.orderID');
		$this->db->where('O.memberID',$memberID);
		return $this->db->get();
	}

	public function get_detail_transaction($orderID)
	{
		$this->db->select('*');
		$this->db->from('orders O');
		$this->db->join('orders_detail OD','OD.orderID = O.orderID');
		$this->db->join('products P','OD.productID = P.productID');
		$this->db->join('members M','M.memberID = P.memberID');
		$this->db->where('O.orderID',$orderID);
		return $this->db->get();
	}

	public function get_transaction($memberID)
	{
		$this->db->select('*');
		$this->db->from('orders O');
		$this->db->join('orders_detail OD','OD.orderID = O.orderID');
		$this->db->join('products P','OD.productID = P.productID');
		$this->db->join('members M','M.memberID = P.memberID');
		$this->db->where('O.memberID',$memberID);
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

	public function get_pending_transaction($memberID)
	{
		$this->db->select('*');
		$this->db->from('orders O');
		$this->db->join('orders_detail OD','O.orderID = OD.orderID');
		$this->db->where('O.statusOrder','Pending');
		$this->db->where('O.memberID',$memberID);
		return $this->db->get();
	}

	public function get_packing_transaction($memberID)
	{
		$this->db->select('*');
		$this->db->from('orders O');
		$this->db->join('orders_detail OD','O.orderID = OD.orderID');
		$this->db->where('O.statusOrder','Packing');
		$this->db->where('O.memberID',$memberID);
		return $this->db->get();
	}

	public function get_deliver_transaction($memberID)
	{
		$this->db->select('*');
		$this->db->from('orders O');
		$this->db->join('orders_detail OD','O.orderID = OD.orderID');
		$this->db->where('O.statusOrder','Deliver');
		$this->db->where('O.memberID',$memberID);
		return $this->db->get();
	}

	public function get_done_transaction($memberID)
	{
		$this->db->select('*');
		$this->db->from('orders O');
		$this->db->join('orders_detail OD','O.orderID = OD.orderID');
		$this->db->where('O.statusOrder','Done');
		$this->db->where('O.memberID',$memberID);
		return $this->db->get();
	}

	public function get_reject_transaction($memberID)
	{
		$this->db->select('*');
		$this->db->from('orders O');
		$this->db->join('orders_detail OD','O.orderID = OD.orderID');
		$this->db->where('O.statusOrder','Reject');
		$this->db->where('O.memberID',$memberID);
		return $this->db->get();
	}

	public function cancel_order($orderID,$data)
	{
		$this->db->where('orderID', $orderID);
		$this->db->update('orders', $data);
		return TRUE;
	}

}
?>