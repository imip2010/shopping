<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Kategori extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model(['OrderM','HomeM','LoginM','MemberM','CheckoutM','Category']);
        $this->load->helper('string');
        //in_access(); //helper buat batasi akses login/session
    }

    public function index()
    {
        // $memberID = $this->session->userdata('memberID');
        $this->data['dataDiri'] = $this->session->userdata();
        $this->data['logged_in'] = $this->session->userdata('logged_in');
        $this->data['menu_kategori'] = $this->HomeM->get_all_kategori()->result();

        if(isset($_REQUEST['cat'])){
            $this->data['get_produk_terbaru'] = $this->Category->get_produk_ByCat($_REQUEST['cat'])->result();
            // print_r(count($resultCat));die();
            // if(count($resultCat) > 0){
            //     $this->data['get_produk_terbaru'] = $resultCat;
            // }else{
            //     $this->data['get_produk_terbaru'] = "Kategori tersebut belum tersedia";
            // }
                
        }
        else{
            $this->data['get_produk_terbaru'] = $this->HomeM->get_produk_terbaru()->result();
        }
            

// echo "<pre>";print_r($this->data['produk_terpopuler']);die();
        // $this->data['produk_terpopuler'] = $this->HomeM->get_produk_terpopuler()->result();
		// $this->data['get_produk_diskon'] = $this->HomeM->get_produk_diskon()->result();
		$this->data['menu_kategori'] = $this->HomeM->get_all_kategori()->result();
        $this->data['getSubCat'] = $this->Category->get_subCategoryByID($_REQUEST['cat'])->result();
		
        $memberID = $this->session->userdata('memberID');
        if ($this->MemberM->get_shop($memberID)->num_rows() > 0) {
            $this->data['detail_shop'] = $this->MemberM->get_shop($memberID)->result()[0];
        }

		
		$this->data['get_header2'] = $this->HomeM->get_header2()->result();
        $this->data['isi'] = $this->load->view('category/category',$this->data,TRUE);
        $this->load->view('layout', $this->data);
    }
}