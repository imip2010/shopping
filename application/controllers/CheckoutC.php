<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class CheckoutC extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(['Cart_model','HomeM','MemberM','CheckoutM','OrderM']);
		//in_access(); //helper buat batasi akses login/session
	}

    public function index()
    {
        $this->data['dataDiri'] = $this->session->userdata();
        $this->data['logged_in'] = $this->session->userdata('logged_in');
        $this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
        $this->data['daftar_barang'] = $this->MemberM->get_produk_by_id()->result();
        $this->data['kategori'] = $this->MemberM->get_all_kategori();
        $this->data['menu_kategori'] = $this->HomeM->get_all_kategori()->result();
        $this->data['MemberM'] = $this->MemberM;

        //ambil barang di keranjang
        $this->data['keranjang'] = $lele = $this->MemberM->get_keranjang_by_id($this->session->memberID)->result();
        $this->data['kurirs'] = $this->CheckoutM->get_courier()->result();
        $this->data['banks'] = $this->CheckoutM->get_bank()->result();
        if(count($lele) == 0){
            $this->session->set_flashdata('error_keranjang','Keranjang anda masih kosong !');
            redirect('HomeC');
        }else{
            $this->data['isi'] = 'isi';
            $this->data['isi'] = $this->load->view('member/MetodepembayaranV', $this->data, TRUE);
            $this->load->view('layout', $this->data);
        }
    }

    public function get_seller()
    {
        print_r($this->CheckoutM->get_seller_detail()->result());
    }

    public function add_to_orders()
    {
        $cek = $this->CheckoutM->get_seller_detail()->result();
        $arrLength = count($cek);

        $data_order = array(
            'invoice'       => 'ZSN12312312312312', 
            'statusOrder'   => 'Pending', 
            'dateOrder'     => date('Y-m-d H:i:s'), 
            'pendingOrder'  => '1', 
            'paidOrder'     => '0', 
            'sendOrder'     => '0', 
            'acceptOrder'   => '0', 
            'rejectOrder'   => '0', 
            'accountBank'   => 'BRI', 
            'datePaid'      => date('Y-m-d H:i:s'), 
            'dateSend'      => date('Y-m-d H:i:s'), 
            'dateFinish'    => date('Y-m-d H:i:s'), 
            'photo'         => 'xxxxxxxx.jpg', 
            'dibaca'        => 'N', 
            'rate'          => 0, 
            'catatan'       => '', 
            'resi'          => 'JNE12312312312312312', 
        );
        $orderID = $this->OrderM->add_to_orders($data_order);
        // print_r($orderID);

        foreach ($cek as $key => $data) {
            $total[$key] = $data->quantity*$data->price;
            $data_order_detail = array(
                'orderID'   => $orderID, 
                'productID' => $data->productID, 
                'sellerID'  => $data->sellerID, 
                'memberID'  => $data->memberID, 
                'quantity'  => $data->quantity, 
                'discount'  => $data->discount, 
                'price'     => $total[$key], 
            );
            $this->OrderM->add_to_order_detail($data_order_detail);
            // print_r($data_order_detail);
        }

        
    }
}