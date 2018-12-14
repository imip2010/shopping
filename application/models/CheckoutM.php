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
			echo "kosong";
		}
	}

	//mengambil data bank
	public function get_bank(){
		$this->db->select('*');
		$this->db->from('bank');
		$this->db->order_by('bankID', 'ASC');
		$query = $this->db->get();
		if($query){
			return $query;
		}else{
			echo "kosong";
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
			echo "kosong";
		}
	}


	public function cek_ongkir($origin, $destination, $weight, $courier)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "origin=".$origin."&destination=".$destination."&weight=".$weight."&courier=".$courier,
		CURLOPT_HTTPHEADER => array(
		    "cache-control: no-cache",
		    "content-type: application/x-www-form-urlencoded",
		    "key: 966efb3eebb5d1bb9fa6fbaecdc4c967",
		    "postman-token: 00066086-b0eb-4ef8-cebb-c6ee5b54cede"
		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  return json_decode($response, true);
		}
	}

	public function get_ongkir($kurir)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "origin=160&destination=500&weight=1700&courier=".$kurir,
		CURLOPT_HTTPHEADER => array(
		    "cache-control: no-cache",
		    "content-type: application/x-www-form-urlencoded",
		    "key: 966efb3eebb5d1bb9fa6fbaecdc4c967",
		    "postman-token: 00066086-b0eb-4ef8-cebb-c6ee5b54cede"
		),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  echo $response;
		}
	}
}
?>