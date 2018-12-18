<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// $route['detail_produk/(:num)/(:any)'] = 'HomeC/detail_produk/$1';
// $route['profil'] = 'HomeC/';
$route['default_controller'] = 'HomeC/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Produk
$route['detail_produk/(:num)'] = 'HomeC/detail_produk/$1';
$route['cart/'] = 'Cart/index';
$route['beli_barang/(:num)'] = 'MemberC/beli_barang/$1';
// $route['courier_cart/(:any)/(:any)/(:any)/(:num)'] = 'Cart/update_courier_cart/$1/$2/$3/$4';
$route['cart_update'] = 'Cart/update_courier_cart';
// $route['add_to_cart/'] = 'Cart/add_to_cart';

//Detail Produk
$route['kabupaten'] = 'HomeC/get_kabupaten';

//Pembayaran
$route['tagihan'] = 'CheckoutC/index';
$route['seller_detail'] = 'CheckoutC/get_seller';
$route['bayar'] = 'CheckoutC/add_to_orders';
$route['biaya/(:any)'] = 'CheckoutC/get_ongkir/$1';
$route['cek_ongkir/(:num)/(:num)/(:num)/(:num)'] = 'HomeC/cek_ongkir/$1/$2/$3/$4';

//Member
$route['pengaturan_profile']	= 'MemberC/pengaturan_profile';
$route['jual_barang'] 			= 'MemberC/jual_barang';
$route['daftar_barang'] 		= 'MemberC/daftar_barang';
$route['labelbarang'] 			= 'CobaC/label_barang';
$route['transaksi'] 			= 'MemberC/get_transaksi';
$route['tambah_alamat']			= 'MemberC/post_tambah_alamat';
