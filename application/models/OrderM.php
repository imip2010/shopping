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
}
?>