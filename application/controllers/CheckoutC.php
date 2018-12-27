<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class CheckoutC extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(['Cart_model','HomeM','MemberM','CheckoutM','OrderM','MailM']);
        $this->load->helper('string');
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
        $this->data['get_default_address'] = $this->MemberM->get_default_address($this->session->memberID)->result();

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

        $shipping_address = array(
            'memberID' => $this->session->memberID, 
            'id_kabupaten_kota' => $this->MemberM->get_default_address($this->session->memberID)->row()->id_kabupaten_kota, 
            'shipping_address_name' => $this->MemberM->get_default_address($this->session->memberID)->row()->locationName, 
            'nama_penerima' => $this->session->nama, 
        );
        $shipping_address_id = $this->MemberM->insertToShippingAddress($shipping_address);

        $data_order = array(
            'memberID'      => $this->session->memberID, 
            'bankID'        => $this->input->post('bankID'), 
            'member_shipping_address_id' => $shipping_address_id,
            'invoice'       => 'AN'.random_string('numeric', 15), 
            'statusOrder'   => 'Pending', 
            'dateOrder'     => date('Y-m-d H:i:s'), 
            'pendingOrder'  => '1', 
            'paidOrder'     => '0', 
            'sendOrder'     => '0', 
            'acceptOrder'   => '0', 
            'rejectOrder'   => '0', 
            'datePaid'      => date('Y-m-d H:i:s'), 
            'dateSend'      => date('Y-m-d H:i:s'), 
            'dateFinish'    => date('Y-m-d H:i:s'), 
            'photo'         => 'xxxxxxxx.jpg', 
            'dibaca'        => 'N', 
            'rate'          => 0, 
            'catatan'       => $this->input->post('catatan'), 
            'resi'          => 'JNE12312312312312312', 
        );
        $orderID = $this->OrderM->add_to_orders($data_order);
        // print_r($orderID);

        foreach ($cek as $key => $data) {
            $shipment_address = array(
                'sellerID' => $data->sellerID, 
                'id_kabupaten_kota' => $this->MemberM->get_default_address($data->sellerID)->row()->id_kabupaten_kota, 
                'shipping_address_name' => $this->MemberM->get_default_address($data->sellerID)->row()->locationName, 
                'seller_name' => $this->MemberM->get_members($data->sellerID)->row()->memberName, 
            );
            $shipment_address_id = $this->MemberM->insertToShipmentAddress($shipment_address);

            $total[$key] = $data->quantity*$data->price;
            $data_order_detail = array(
                'orderID'   => $orderID, 
                'productID' => $data->productID, 
                'sellerID'  => $data->sellerID, 
                'seller_shipment_address_id'  => $shipment_address_id, 
                'memberID'  => $this->session->memberID, 
                'service'   => $this->input->post('service'.$data->productID), 
                'estimasi'  => $this->input->post('estimate'.$data->productID), 
                'biaya_ongkir'  => $this->input->post('cost'.$data->productID), 
                'quantity'  => $data->quantity, 
                'discount'  => $data->discount, 
                'price'     => $total[$key], 
            );
            $stored = $this->OrderM->add_to_order_detail($data_order_detail);
            // print_r($data_order_detail);
        }


        if (!empty($stored)) {
            $this->send_invoice($orderID);
            // redirect('/transaksi');
        }else{
            // $this->send_invoice($orderID);
            redirect('/beli_barang/'.$this->session->memberID);
        }
    }

    public function cek_ongkir($origin,$destination,$weight,$cartID)
    {
        $data = $this->CheckoutM->get_courier()->result();

        foreach ($data as $kurir) {
            $ongkir = $this->CheckoutM->cek_ongkir($origin,$destination,$weight,$kurir->courierName);
            $service = count($ongkir['rajaongkir']['results'][0]['costs']);
            if($service>0){
                echo "
                        <tr style='border: 0px; background: transparent;'>
                            <td></td>
                        </tr>
                        <tr>
                            <td style='border: 0px; background:#3587d8; color:#FFF' width='250'><b>".$ongkir['rajaongkir']['results'][0]['name']."</b>
                            </td>
                        </tr>
                                <tr>
                                    <td width='200' style='color: #3587d8'><b>SERVIS</b></td>
                                    <td style='color: #3587d8'><b>WAKTU PENGANTARAN</b></td>
                                    <td style='color: #3587d8'><b>ONGKOS KIRIM</b></td>
                                    <td style='color: #3587d8'><b>AKSI</b></td>
                                </tr>
                ";
                    for ($i=0; $i < $service; $i++) { 
                        echo "
                                <tr style='background: transparent;'>
                                    <td style='color: #000'>".$ongkir['rajaongkir']['results'][0]['costs'][$i]['service']." - (".$ongkir['rajaongkir']['results'][0]['costs'][$i]['description'].")</td>
                                    <td style='color: #000'>".$ongkir['rajaongkir']['results'][0]['costs'][$i]['cost'][0]['etd']."</td>
                                    <td style='color: #000'>Rp ".number_format($ongkir['rajaongkir']['results'][0]['costs'][$i]['cost'][0]['value'],0,',','.')."</td>
                                    <td>
                                        <form method='POST' action='".base_url()."/cart_update'>
                                            <input type='hidden' name='cartID' value='".$cartID."'>
                                            <input type='hidden' name='service' value='".$ongkir['rajaongkir']['results'][0]['costs'][$i]['service']."'>
                                            <input type='hidden' name='estimate' value='".$ongkir['rajaongkir']['results'][0]['costs'][$i]['cost'][0]['etd']."'>
                                            <input type='hidden' name='cost' value='".$ongkir['rajaongkir']['results'][0]['costs'][$i]['cost'][0]['value']."'>
                                            <button class='btn btn-info' type='submit'>Pilih</button>
                                        </form>
                                    </td>
                                </tr>
                        ";
                    };
            }
        }
    }

    public function update_products()
    {
        $product = $this->Cart_model->get_cart($this->session->memberID);
        foreach ($product as $key => $cart) {
            $productID = $cart->productID;
            $sold = $cart->quantity;
            $qty = $cart->quantity;

            $cartID = $cart->cartID;

            $this->Cart_model->update_product($productID,$qty,$sold);
            $this->MemberM->hapus_cart($cartID);
        }
        // $this->Cart_model->update_product();
    }

    public function send_invoice($orderID)
    {
        // $data['invoice'] = $this->OrderM->get_orders($orderID)->row()->invoice;
        // $data['memberName'] = $this->session->nama;
        $bankID = $this->OrderM->get_orders($orderID)->row()->bankID;
        // $data['bank_detail'] = $this->MemberM->get_bank_id($bankID)->result();
        // $data['order_detail'] = $this->OrderM->get_order_detail($orderID)->result();
        // print_r($data['order_detail']);
        // $this->load->view('emails/invoice',$data);

        
        $userEmail = 'rumbleroom5@gmail.com';
        $subject = 'Arnawa SMTP Dicoba';

        $data = array(
            'invoice' => $this->OrderM->get_orders($orderID)->row()->invoice,
            'memberName' => $this->session->nama,
            'bank_detail' => $this->MemberM->get_bank_id($bankID)->result(),
            'order_detail' => $this->OrderM->get_order_detail($orderID)->result()
        );

        $this->MailM->send_invoice($userEmail,$subject,$data);

        $this->update_products();
    }
}