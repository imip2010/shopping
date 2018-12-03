<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Cart extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(['Cart_model','HomeM','MemberM']);
		//in_access(); //helper buat batasi akses login/session
	}

	public function index()
	{
		$data['products']=$this->Cart_model->get_all_produk();
        $this->load->view('v_cart',$data);
	}

	public function cart_count()
	{
		$data_count=$this->Cart_model->count_product($this->session->memberID);
        echo $data_count;
	}

	public function show_cart()
	{
		foreach ($this->Cart_model->get_cart($this->session->memberID) as $items) {
			echo "
				<li>
                    <a>
                        <div class='message-body' style='margin-left: 20px;'>
	                        <img src='".base_url()."assets/images/product/".$items->photo1."' width='50' height='30'>&nbsp <b>".$items->productName."</b>
	                        <span style='float:right; margin-right: 20px;'>
	                        	<span style='color:#4798e8;'>Rp ".number_format($items->price,0,',','.')."</span>
	                        	<span style='font-size:9px;'> x </span>".$items->quantity."
	                        </span>
                        </div>
                    </a>
                </li>
			";
		}
	}

	public function add_to_cart()
	{
		$productID = $this->input->post('productID');
		$memberID = $this->session->memberID;

		$harga  = $this->HomeM->get_detail_product($productID)->result()[0]->salePrice;
        $diskon = $this->HomeM->get_detail_product($productID)->result()[0]->discount;

        $disc = ($diskon/100)*$harga;

        $harga_final = $harga-$disc;


        $data_cart = array(
            'memberID'      => $memberID, 
            'productID'     => $productID, 
            'createDate'    => date('Y-m-d H:i:s'), 
            'price'         => $harga_final, 
            'quantity'      => "1", 
            'stockCart'     => "0", 
        );
        // $this->cart->insert($data_cart);
        // echo $this->show_cart();


        // cari product berdasarkan member
        $dikeranjang = $this->MemberM->get_keranjang_by_2id($memberID, $productID)->num_rows();

        // jika ga ada -> insert
        if($dikeranjang == 0){
            if($this->MemberM->insertToCart($data_cart)){
                $this->session->set_flashdata('sukses','Produk berhasil dimasukkan ke keranjang');
                echo $this->show_cart();
                // redirect('MemberC/beli_barang/'.$memberID);
            }else{
                $this->session->set_flashdata('error','Produk tidak berhasil dimasukkan ke keranjang');
            }
        }else{ //kalo ada update quantitynya

            $qty_lama = $this->MemberM->get_keranjang_by_2id($memberID, $productID)->result()[0]->quantity;
            $qty_baru = $qty_lama + 1;
            $data_cart_update = array(
                'quantity' => $qty_baru,
            );

            $cart_id = $this->MemberM->get_keranjang_by_2id($memberID, $productID)->result()[0]->cartID;

            if($this->MemberM->updateToCart($cart_id, $data_cart_update)){
                $this->session->set_flashdata('sukses','Produk berhasil dimasukkan ke keranjang');
                echo $this->show_cart();
                // redirect('MemberC/beli_barang/'.$memberID);
            }else{
                $this->session->set_flashdata('error','Produk tidak berhasil dimasukkan ke keranjang');
            }
        }
	}

	// public function show_cart()
	// {
	// 	$output = "";
	// 	$no = 0;
	// 	foreach ($this->cart->contents() as $items) {
	// 		$no++;
	// 		$output .="
	// 			<tr>
	// 				<td>".$items['price']."</td>
	// 				<td>".$items['productID']."</td>
	// 			</tr>
	// 		";
	// 	}
	// 	$output .="
	// 		<tr>
	// 			<th colspan='3'>Total</th>
	// 			<th colspan='2'>".$this->cart->total()."</th>
	// 		</tr>
	// 	";
	// 	return $output;
	// }

	// public function load_cart()
	// {
	// 	echo $this->show_cart();
	// }
}