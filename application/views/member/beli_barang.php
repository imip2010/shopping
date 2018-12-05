<div class="card">
	<div class='card-body'>
		<div class='container_page'>
			<div class='page'>
				<main class='page-content'>
					<input type="hidden" id="memberIDs" value="<?php echo $this->session->memberID ?>">
					<h3 class='page-heading' data-cart-page-title>Keranjang Belanja (
						<?php echo count($keranjang);?> item)</h3>
					<div class='page-cart'>
						<div data-cart-status></div>
						<div class='loadingOverlay'></div>
						<div data-cart-content class='hl-cart-content'>
							<?php
								$data=$this->session->flashdata('sukses');
								if($data!=""){ 
							?>
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span>
								</button>
								<h3 class="text-success"><i class="fa fa-check-circle"></i> Sukses!</h3>
								<?=$data;?>
							</div>
							<?php 
								} 
							?>
							<?php 
								$data2=$this->session->flashdata('error');
								if($data2!=""){ 
							?>
							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span>
								</button>
								<h3 class="text-danger"><i class="fa fa-check-circle"></i> Gagal!</h3>
								<?=$data2;?>
							</div>
							<?php 
								} 
							?>
							<form method='post' action='<?php echo site_url(' MemberC/checkout')?>'> <table class='table table-striped table-bordered'
								data-cart-quantity=''>
								<thead class='cart-header'>
									<tr>
										<th class='cart-header-item'>No</th>
										<th class='cart-header-item'>Image</th>
										<th class='cart-header-item' style="min-width: 200px;">Produk</th>
										<th class='cart-header-item' style="min-width: 200px;">Harga</th>
										<th class='cart-header-item'>Quantity</th>
										<th class='cart-header-item' style="min-width: 200px;">Total</th>
										<th class='cart-header-item' style="width: 10px;">Aksi</th>
									</tr>
								</thead>
								<tbody class='cart-list' id="memberDetailCard">
									<?php
									// print_r($keranjang);
									$j=0;
									$sub_total = 0;
									$total_diskon = 0;
									foreach ($keranjang as $ker) {
										$j++;
										?>
									<!-- inputan tabel orders -->
									<input type="hidden" name="memberID[]" value="<?php echo $dataDiri['memberID']?>">
									<input type="hidden" name="memberTo[]" value="<?php echo $MemberM->whose_product($ker->productID)->result()[0]->memberID;?>">
									<input type="hidden" name="customerName[]" value="<?php echo $ker->memberName;?>">
									<input type="hidden" name="qty[]" value="<?php echo $ker->quantity;?>">


									<tr class='cart-item' data-item-row>
										<td class='cart-item-block cart-item-figure'>
											<?php echo $j;?>
										</td>
										<td>
											<img style="max-width: 200px;" src='<?php echo base_url()?>assets/images/product/<?php echo $ker->photo1?>'>
										</td>
										<td class='cart-item-block cart-item-title'>
											<h6 class='cart-item-name'><a href='#'>
													<?php echo $ker->productName;?> </a></h6>
										</td>
										<td class='cart-item-block cart-item-info cart-item-total'>
											<?php
												if($ker->discount != 0){
													?>
											<strike><strong class='cart-item-value'>
													<?php echo "Rp".number_format(($ker->salePrice),0,",",".");?></strong></strike>
											<span class='cart-item-label'>
												<?php 
														$diskon = $ker->salePrice-($ker->discount/100*$ker->salePrice);
														echo "Rp".number_format(($diskon),0,",",".");
														?>
											</span>
											<?php
													// $harga = $diskon;
													$diskon_harga = ($ker->discount/100*$ker->salePrice)*$ker->quantity;
													$harga = $ker->price;
												}else{
											?>
											<strong class='cart-item-value'>
												<?php echo "Rp".number_format(($ker->price),0,",",".");?></strong>
												<?php
														$harga = $ker->price;
														$diskon_harga = 0;
													}
												?>
										</td>
										<td class='cart-item-block cart-item-info cart-item-quantity'>
											<div class="btn-group">
											    <button type="button" class="btn btn-info ccount_m" id="count_m<?php echo $ker->cartID ?>">-</button>
											    <span class="btn col-md-6" id="cquantity<?php echo $ker->cartID ?>" style="background: #FFF;"><?php echo $ker->quantity ?></span>
											    <!-- <input type="text" class="btn col-md-2" id="cquantity<?php echo $ker->cartID ?>" value="<?php echo $ker->quantity ?>"> -->
											    <button type="button" class="btn btn-info ccount_p" id="count_p<?php echo $ker->cartID ?>">+</button>
											</div>
											<!-- <div class='form-increment'>
												<select name='myfield'>
													<?php
														for ($i=1; $i <= $ker->qty; $i++) { 
															if($i == $ker->quantity){
																?>
													<option selected>
														<?php echo $i;?>
													</option>
													<?php
															}else{
																?>
													<option>
														<?php echo $i;?>
													</option>
													<?php
															}
														}
														?>
												</select>
												<noscript><input type="submit" value="Submit"></noscript>
											</div> -->
										</td>
										<td class='cart-item-block'>
											<strong class='cart-item-value'>
												<span class='cart-item-label' id="card-total<?php echo $ker->cartID ?>">
													<?php 
														$total = $ker->quantity*$ker->salePrice;
														echo "Rp".number_format(($total),0,",",".");
														?>

												</span>
											</strong>
										</td>
										<td class='cart-item-block'>
											<a href="<?php echo site_url('MemberC/hapus_cart/').$ker->cartID;?>" title="hapus" class="btn btn-danger btn-sm"
												onClick="return confirm('Anda yakin akan menghapus item ini dari keranjang?')"><span class="ti-trash"></span>
											</a>
										</td>
									</tr>

									<?php
										$sub_total = $sub_total+$total;
										$total_diskon = $total_diskon+$diskon_harga;
										?>
									<input type="hidden" name="total_order[]" value="<?php echo $sub_total-$total_diskon?>">
									<?php

									}
									?>
								</tbody>
								</table>
								<!-- </form> -->
						</div><br>

						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-10">
									<div class="text-right">
										<h3> Sub Total &nbsp Rp </h3>
										<h3> Diskon &nbsp Rp </h3>
										<h3> Grand Total &nbsp Rp </h3>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="text-right" id="paid">
										<h6 style="font-size: 20px;"> <?php echo "&nbsp;".number_format(($sub_total),0,",","."); ?> </h6>
										<h6 style="font-size: 20px;"> <?php echo "&nbsp".number_format(($total_diskon),0,",","."); ?> </h6>
										<h6 style="font-size: 20px;"> <?php $grand_total = $sub_total-$total_diskon; echo "&nbsp".number_format(($grand_total),0,",","."); ?> </h6>
									</div>
								</div>
							</div>
						</div><br>


					</div>

					<div class='cart-actions text-right'>
						<input type="submit" name="submit" value="Proses Checkout" class='btn btn-info btn-lg'>
						</a>
					</div>
					<br>
					<!-- snippet location cart -->
				</main>
			</div>
		</div>
		</form>

	</div>
	<div id='modal' class='modal'>
		<a href='#' class='modal-close' aria-label='Close' role='button'>
			<span aria-hidden='true'>&#215;</span>
		</a>
		<div class='modal-content'></div>
		<div class='loadingOverlay'></div>
	</div>
</div>
<script src="<?php echo base_url()?>assets/libs/jquery/dist/jquery.min.js"></script>
<script>
    $(function (){
    	var memberID = $('#memberIDs').val();
        $(".ccount_m").click(function (){
            var btnID = '#' + $(this).attr('id');
            var fnID = btnID.replace('#count_m','');
	        var request = $.ajax({
		        type: "POST",
		        url: "<?php echo base_url();?>Cart/count_m/"+fnID
	        });
	        request.done(function( msg ) {
	        	// $('#cquantity'+fnID).load("<?php echo base_url();?>Cart/get_cart_quantity/"+fnID);
	        	$('#cquantity'+fnID).fadeOut(300, function(){
					$('#cquantity'+fnID).load("<?php echo base_url();?>Cart/get_cart_quantity/"+fnID).fadeIn().delay(1000);
					// $('#itemLabel').html("<?php echo site_url();?>MemberC/beli_barang/ #itemLabel").fadeIn().delay(1000);
				});
				$('#card-total'+fnID).fadeOut(300, function(){
					$('#card-total'+fnID).load("<?php echo base_url();?>MemberC/beli_barang/"+memberID+" #card-total"+fnID).fadeIn().delay(1000);
				});
				$('#paid').fadeOut(300, function(){
					$('#paid').load("<?php echo base_url();?>MemberC/beli_barang/"+memberID+" #paid").fadeIn().delay(1000);
				});
				// $('#cquantity'+fnID).load("<?php echo site_url('MemberC/beli_barang/');?>"+memberID+" #cquantity"+fnID);
				// $('#cquantity'+fnID).replaceWith("");
				// alert(msg);
	   //      	$('#cquantity'+fnID).load("<?php echo site_url('MemberC/beli_barang/');?>"+memberID+" #cquantity"+fnID);
	   //      	// $('.container_page').load("<?php echo site_url('MemberC/beli_barang/');?>"+memberID);
				// $('#cquantity'+fnID).fadeOut(800, function(){
				// 	$('#cquantity'+fnID).load("<?php echo site_url('MemberC/beli_barang/');?>"+memberID+" #cquantity"+fnID).fadeIn().delay(2000);
    //                 // $('#cquantity'+fnID).html("xx").fadeIn().delay(2000);
    //                 // $('.container_page').load("<?php echo site_url('MemberC/beli_barang/');?>"+memberID).fadeIn().delay(2000);
				// });
			});
	        request.fail(function(jqXHR, textStatus) {
	            alert( "Request failed: " + textStatus );
	        });
        });
        $(".ccount_p").click(function (){
            var btnID = '#' + $(this).attr('id');
            var fnID = btnID.replace('#count_p','');
	        var request = $.ajax({
		        type: "POST",
		        url: "<?php echo base_url();?>Cart/count_p/"+fnID
	        });
	        request.done(function( msg ) {
	        	$('#cquantity'+fnID).fadeOut(300, function(){
					$('#cquantity'+fnID).load("<?php echo base_url();?>Cart/get_cart_quantity/"+fnID).fadeIn().delay(1000);
				});
				$('#card-total'+fnID).fadeOut(300, function(){
					$('#card-total'+fnID).load("<?php echo base_url();?>MemberC/beli_barang/"+memberID+" #card-total"+fnID).fadeIn().delay(1000);
				});
				$('#paid').fadeOut(300, function(){
					$('#paid').load("<?php echo base_url();?>MemberC/beli_barang/"+memberID+" #paid").fadeIn().delay(1000);
				});
				// alert('Success');
	            // return;
			});
	        request.fail(function(jqXHR, textStatus) {
	            alert( "Request failed: " + textStatus );
	        });
        });
    });
</script>