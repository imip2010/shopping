<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class OrderC extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model(['OrderM','HomeM','LoginM','MemberM']);
        $this->load->helper('string');
        //in_access(); //helper buat batasi akses login/session
    }

    public function transaction()
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

        $this->data['invoices'] = $this->OrderM->get_invoice_pack($this->session->memberID)->result();
        $this->data['invoices_packing'] = $this->OrderM->get_invoice_pack_packing($this->session->memberID)->result();
        $this->data['invoices_send'] = $this->OrderM->get_invoice_pack_send($this->session->memberID)->result();
        $this->data['invoices_done'] = $this->OrderM->get_invoice_pack_done($this->session->memberID)->result();
        $this->data['invoices_reject'] = $this->OrderM->get_invoice_pack_reject($this->session->memberID)->result();
        $this->data['transactions'] = $this->OrderM->get_transaction($this->session->memberID)->result();

        // print_r($this->data['transactions']);
        $this->data['isi'] = 'isi';
        $this->data['sidebar'] = $this->load->view('member/sidebar', $this->data, TRUE);
        $this->data['isi'] = $this->load->view('member/Riwayatbelanja', $this->data, TRUE);
        $this->load->view('layout', $this->data);
    }

    public function detail_transaction()
    {
        $this->data['dataDiri'] = $this->session->userdata();
        $this->data['logged_in'] = $this->session->userdata('logged_in');
        $this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
        $this->data['daftar_barang'] = $this->MemberM->get_produk_by_id()->result();
        $this->data['kategori'] = $this->MemberM->get_all_kategori();
        $this->data['menu_kategori'] = $this->HomeM->get_all_kategori()->result();
        $this->data['MemberM'] = $this->MemberM;
        $this->data['get_default_address'] = $this->MemberM->get_default_address($this->session->memberID)->result();


        $this->data['detail_transaksi'] = $this->OrderM->get_detail_transaction($this->uri->segment(2))->result();
        $this->data['invoice'] = $this->OrderM->get_detail_transaction($this->uri->segment(2))->row()->invoice;
        $this->data['statusOrder'] = $this->OrderM->get_detail_transaction($this->uri->segment(2))->row()->statusOrder;
        $this->data['bankID'] = $this->OrderM->get_detail_transaction($this->uri->segment(2))->row()->bankID;
        $this->data['detail_member'] = $this->MemberM->get_detail_members($this->session->memberID)->result();

        // print_r($this->data['transactions']);
        $this->data['isi'] = 'isi';
        $this->data['sidebar'] = $this->load->view('member/sidebar', $this->data, TRUE);
        $this->data['isi'] = $this->load->view('member/detail_transaksi', $this->data, TRUE);
        $this->load->view('layout', $this->data);
    }
}