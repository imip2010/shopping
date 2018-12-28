<!DOCTYPE html>
<!--
  Invoice template by invoicebus.com
  To customize this template consider following this guide https://invoicebus.com/how-to-create-invoice-template/
  This template is under Invoicebus Template License, see https://invoicebus.com/templates/license/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Io (third)</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="Invoicebus Invoice Template">
    <meta name="author" content="Invoicebus">

    <meta name="template-hash" content="f3142bbb0a1696d5caa932ecab0fc530">
    <style>
/*! Invoice Templates @author: Invoicebus @email: info@invoicebus.com @web: https://invoicebus.com @version: 1.0.0 @updated: 2015-03-09 09:03:07 @license: Invoicebus */
/* Reset styles */
@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700&subset=cyrillic,cyrillic-ext,latin,greek-ext,greek,latin-ext,vietnamese");
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}

html {
  line-height: 1;
}

ol, ul {
  list-style: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

caption, th, td {
  text-align: left;
  font-weight: normal;
  vertical-align: middle;
}

q, blockquote {
  quotes: none;
}
q:before, q:after, blockquote:before, blockquote:after {
  content: "";
  content: none;
}

a img {
  border: none;
}

article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
  display: block;
}

/* Invoice styles */
/**
 * DON'T override any styles for the <html> and <body> tags, as this may break the layout.
 * Instead wrap everything in one main <div id="container"> element where you may change
 * something like the font or the background of the invoice
 */
html, body {
  /* MOVE ALONG, NOTHING TO CHANGE HERE! */
}

/** 
 * IMPORTANT NOTICE: DON'T USE '!important' otherwise this may lead to broken print layout.
 * Some browsers may require '!important' in oder to work properly but be careful with it.
 */
.clearfix {
  display: block;
  clear: both;
}

.hidden {
  display: none;
}

b, strong, .bold {
  font-weight: bold;
}

#container {
  font: normal 13px/1.4em 'Open Sans', Sans-serif;
  margin: 0 auto;
  padding: 20px 100px;
  min-height: 1058px;
}

#memo .company-name {
  background: #fff url("../img/arrows.png") 560px center no-repeat;
  background-size: 100px auto;
  padding: 10px 20px;
  position: relative;
  margin-bottom: 15px;
}
#memo .company-name span {
  color: white;
  display: inline-block;
  min-width: 20px;
  font-size: 24px;
  font-weight: bold;
  line-height: 1em;
}
#memo .company-name .right-arrow {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100px;
  background: url("../img/right-arrow.png") right center no-repeat;
  background-size: auto 60px;
}
#memo .logo {
  float: left;
  clear: left;
  margin-left: 20px;
}
#memo .logo img {
  width: 150px;
  height: 100px;
}
#memo .company-info {
  margin-left: 20px;
  float: left;
  font-size: 12px;
  color: #555;
}
#memo .company-info div {
  margin-bottom: 3px;
  min-width: 20px;
}
#memo .company-info span {
  display: inline-block;
  min-width: 20px;
}
#memo:after {
  content: '';
  display: block;
  clear: both;
}

#invoice-info {
  float: left;
  margin: 10px 0 0 -20px;
}
#invoice-info > div {
  float: left;
}
#invoice-info > div > span {
  display: block;
  min-width: 20px;
  min-height: 18px;
  margin-bottom: 3px;
}
#invoice-info > div:last-child {
  margin-left: 20px;
}
#invoice-info:after {
  content: '';
  display: block;
  clear: both;
}

#client-info {
  float: right;
  margin: 5px 20px 0 0;
  min-width: 220px;
  text-align: right;
}
#client-info > div {
  margin-bottom: 3px;
  min-width: 20px;
}
#client-info span {
  display: block;
  min-width: 20px;
}

#invoice-title-number {
  text-align: center;
  margin: 20px 0;
}
#invoice-title-number span {
  display: inline-block;
  min-width: 20px;
}
#invoice-title-number #title {
  margin-right: 15px;
  text-align: right;
  font-size: 20px;
  font-weight: bold;
}
#invoice-title-number #number {
  font-size: 15px;
  text-align: left;
}

table {
  table-layout: fixed;
}
table th, table td {
  vertical-align: top;
  word-break: keep-all;
  word-wrap: break-word;
}

#items {
  margin: 20px 0 35px 0;
}
#items .first-cell, #items table th:first-child, #items table td:first-child {
  width: 18px;
  text-align: right;
}
#items table {
  border-collapse: separate;
  width: 100%;
}
#items table th {
  padding: 12px 10px;
  text-align: right;
  background: #E6E7E7;
  border-bottom: 4px solid #487774;
}
#items table th:nth-child(2) {
  width: 30%;
  text-align: left;
}
#items table th:last-child {
  text-align: right;
  padding-right: 20px !important;
}
#items table td {
  padding: 15px 10px;
  text-align: right;
  border-right: 1px solid #CCCCCF;
}
#items table td:first-child {
  text-align: left;
  border-right: 0 !important;
}
#items table td:nth-child(2) {
  text-align: left;
}
#items table td:last-child {
  border-right: 0 !important;
  padding-right: 20px !important;
}

.currency {
  border-bottom: 4px solid #487774;
  padding: 0 20px;
}
.currency span {
  font-size: 11px;
  font-style: italic;
  color: #8b8b8b;
  display: inline-block;
  min-width: 20px;
}

#sums {
  float: right;
  background: #8BA09E url("../img/left-arrow.png") -17px bottom no-repeat;
  background-size: auto 100px;
  color: white;
}
#sums table tr th, #sums table tr td {
  min-width: 100px;
  padding: 8px 20px 8px 35px;
  text-align: right;
  font-weight: 600;
}
#sums table tr th {
  text-align: left;
  padding-right: 25px;
}
#sums table tr.amount-total th {
  text-transform: uppercase;
}
#sums table tr.amount-total th, #sums table tr.amount-total td {
  font-size: 16px;
  font-weight: bold;
}
#sums table tr:last-child th {
  text-transform: uppercase;
}
#sums table tr:last-child th, #sums table tr:last-child td {
  font-size: 16px;
  font-weight: bold;
  padding-top: 20px !important;
  padding-bottom: 40px !important;
}

#terms {
  margin: 50px 20px 10px 20px;
}
#terms > span {
  display: inline-block;
  min-width: 20px;
  font-weight: bold;
}
#terms > div {
  margin-top: 10px;
  min-height: 50px;
  min-width: 50px;
}

.payment-info {
  margin: 0 20px;
}
.payment-info div {
  font-size: 12px;
  color: #8b8b8b;
  display: inline-block;
  min-width: 20px;
}

.ib_bottom_row_commands {
  margin: 10px 0 0 20px !important;
}

.ibcl_tax_value:before {
  color: white !important;
}

/**
 * If the printed invoice is not looking as expected you may tune up
 * the print styles (you can use !important to override styles)
 */
@media print {
  /* Here goes your print styles */
}
</style>
  </head>
  <body>
    <div id="container">
      <section id="memo">
        <div class="company-name">
          <img border="0" vspace="0" hspace="0" src="https://raw.githubusercontent.com/imip2010/shopping/master/assets/images/Arnawa_Apps%20Logo.png" alt="" title="" width="560" style="
			width: 50%;
			max-width: 560px;
			color: #000000; font-size: 13px; margin: 0; padding: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: block;">
        </div>
		
        <div class="company-info">
          <div style="font-size: 20px; font-weight: bold;">
            <span>Tagihan Pembayaran</span> <span>#<?php echo $invoice?></span>
          </div><hr><br>
		  <p>Hai <?php echo $memberName?>, <br> Terima kasih atas kepercayaanmu telah berbelanja di Koperasi. <br> Mohon segera lakukan pembayaran sebelum :</p>
        </div>
      </section><br>
	  
		<section id="items">
			<table >
				<tr> <th style="background-color: #e6e7e7; border-bottom: 0px solid; text-align: center; font-size:16px; font-weight: bold; color:#555;"> Jum’at, 23 November 2018 Pukul 22:52 WIB (1 x 10 jam)</th></tr>
			</table>
		</section>
		
		<section id="items">
			<table style="margin-top: -25px;" >
				<tr> <th style="background-color: #fff; border-bottom: 0px solid; text-align: center; ">Lakukan Pembayaran Sebesar :</th></tr>
        <?php 
            $sub_total1 = 0;
            foreach($order_detail as $key1 => $order1){
              $total1 = $order1->biaya_ongkir+$order1->price; 
              $sub_total1 = $sub_total1+$total1;
            }?>
				<tr> <th style="background-color: #fff; border-bottom: 0px solid; text-align: center; font-size:18px; font-weight: bold; color:#555;"><?php echo "Rp".number_format($sub_total1,0,",",".")?></th></tr>
			</table>
		</section>
		<?php foreach($bank_detail as $bank) {?>
		<section id="items">
			<table style="margin-top: -25px;">
				<tr>
          <th style="background-color: #fff; border-bottom: 0px solid; text-align: center; ">
            Transfer dapat dilakukan ke nomor rekening <?php echo $bank->bankName?> berikut ini :
          </th>
        </tr>
				<tr>
          <th style="background-color: #fff; border-bottom: 0px solid; text-align: center; font-size:18px; font-weight: bold; color:#555;">
            (<?php echo $bank->noRek ?>)
            <span style="font-weight: normal;"> a/n </span>
            <?php echo $bank->atasNama ?>
          </th>
        </tr>
			</table>
		</section>
    <?php }?>
		
      
 
      
      <div class="clearfix"></div>
      
      <section id="invoice-title-number">
      
        <span id="number">Berikut adalah penjelasan tagihan pembayaran :</span>
        
      </section>
      
      <div class="clearfix"></div>
      
      <section id="items">
        
        <table cellpadding="0" cellspacing="0">
        
          <tr>
            <th>No</th> <!-- Dummy cell for the row number and row commands -->
            <th>Nama Produk</th>
            <th>Jumlah Produk</th>
            <th>Harga</th>
            <th>Diskon</th>
            <th>Ongkos Kirim</th>
            <th>Total</th>
          </tr>
          <?php 
            $sub_total = 0;
            $total_diskon = 0;
            $total_ongkir = 0;
            foreach($order_detail as $key => $order){?>
              <tr data-iterate="item">
                <td><?php echo $key+1?></td> <!-- Don't remove this column as it's needed for the row commands -->
                <td><?php echo $order->productName?></td>
                <td><?php echo $order->quantity?></td>
                <td><?php echo "Rp".number_format($order->salePrice,0,",",".")?></td>
                <td><?php echo $order->discount?>%</td>
                <td><?php echo "Rp".number_format($order->biaya_ongkir,0,",",".")?></td>
                <td><?php echo "Rp".number_format($order->biaya_ongkir+$order->price,0,",",".")?></td>
              </tr>
          <?php
            $total = $order->biaya_ongkir+$order->price; 
            $sub_total = $sub_total+$total;
            }?>
          
        </table>
        
      </section>
      
      <section id="sums">
      
        <table cellpadding="0" cellspacing="0">
          <tr>
            <th>Sub-total</th>
            <td><?php echo "Rp".number_format($sub_total,0,",",".")?></td>
          </tr>
          
          <tr data-iterate="tax">
            <th>Pajak</th>
            <td>0</td>
          </tr>
          
          <tr class="amount-total">
            <th>Grand Total</th>
            <td><?php echo "Rp".number_format($sub_total,0,",",".")?></td>
          </tr>
		  
        </table>
        
      </section>
	  
      
      <div class="clearfix"></div>
	  
	  
		
	<section><br><br>
		<div class="company-info">
		  <p>Setelah melakukan pembayaran, sistem kami akan memverifikasi pembayaran secara otomatis. Jika kamu menghadapi kendala mengenai pembayaran, silakan langsung Hubungi Koperasi atau Ubah Metode Pembayaran untuk memilih metode pembayaran lain.</p>
		</div>
	</section><br><hr>
      
     <section id="invoice-info">
        <div>
          <span>Copyright © 2018 PT Arnintech.com. All Rights Reserved </span>
          <span>Graha Kas, Lantai 3 Kompleks Perkantoran Kebayoran Baru Mall No.88 Jl. Kebayoran Baru</span>
          <span>Jakarta Selatan Indonesia 12120</span>
        </div>
      </section>

  </body>
</html>
