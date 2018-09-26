<div class='body'>
	<div class='container_page'>
		<div class='container'>
			<div class='page'>
				<main class='page-content'>         
					<h1 class='page-heading' data-cart-page-title>Keranjang Belanja (<?php echo count($keranjang);?> item)</h1>
					<div class='page-cart'>
						<div data-cart-status></div><div class='loadingOverlay'></div>
						<div data-cart-content class='hl-cart-content'>
							<?php
							$data=$this->session->flashdata('sukses');
							if($data!=""){ ?>
								<div class="alert alert-success"><strong>Sukses! </strong> <?=$data;?></div>
							<?php } ?>
							<?php 
							$data2=$this->session->flashdata('error');
							if($data2!=""){ ?>
								<div class="alert alert-danger"><strong> Error! </strong> <?=$data2;?></div>
							<?php } ?>
							<form method='post' action='<?php echo site_url('MemberC/checkout')?>'>
								<table class='table table-striped table-bordered' data-cart-quantity=''>
									<thead class='cart-header'>
										<tr>
											<th class='cart-header-item'>No</th>
											<th class='cart-header-item'>Image</th>
											<th class='cart-header-item' style="min-width: 200px;">Produk</th>
											<th class='cart-header-item'>Harga</th>
											<th class='cart-header-item'>Quantity</th>
											<th class='cart-header-item'>Total</th>
											<th class='cart-header-item' style="width: 10px;">Aksi</th>
										</tr>
									</thead>
									<tbody class='cart-list'>
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
												<td class='cart-item-block cart-item-figure'><?php echo $j;?></td>
												<td>
													<img style="max-width: 200px;" src='<?php echo base_url()?>assets/images/product/<?php echo $ker->photo1?>'>
												</td>
												<td class='cart-item-block cart-item-title' >
													<h6 class='cart-item-name'><a href='#'> <?php echo $ker->productName;?>  </a></h6>
												</td>
												<td class='cart-item-block cart-item-info cart-item-total'>
													<?php
													if($ker->discount != 0){
														?>
														<strike><strong class='cart-item-value'><?php echo "Rp".number_format(($ker->salePrice),0,",",".");?></strong></strike>
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
														<strong class='cart-item-value'><?php echo "Rp".number_format(($ker->price),0,",",".");?></strong>
														<?php
														$harga = $ker->price;
														$diskon_harga = 0;
													}
													?>
												</td>
												<td class='cart-item-block cart-item-info cart-item-quantity'>
													<div class='form-increment'>
														<select name='myfield'>
															<?php
															for ($i=1; $i <= $ker->qty; $i++) { 
																if($i == $ker->quantity){
																	?>
																	<option selected><?php echo $i;?></option>
																	<?php
																}else{
																	?>
																	<option><?php echo $i;?></option>
																	<?php
																}
															}
															?>
														</select>
														<noscript><input type="submit" value="Submit"></noscript>
													</div>
												</td>						
												<td class='cart-item-block'>
													<strong class='cart-item-value'>
														<span class='cart-item-label'>
															<?php 
															$total = $ker->quantity*$ker->salePrice;
															echo "Rp".number_format(($total),0,",",".");
															?>
															
														</span>
													</strong>
												</td>
												<td class='cart-item-block'>
													<a href="<?php echo site_url('MemberC/hapus_cart/').$ker->cartID;?>" title="hapus" class="btn btn-danger btn-sm" onClick="return confirm('Anda yakin akan menghapus item ini dari keranjang?')"><span class="ti-trash"></span>
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
							</div>


							<ul class='cart-totals' class="text-right">
								<li class='cart-total'>
									<div class='cart-total-label'>
										<strong>Sub Total</strong>
									</div>
									<div class='cart-total-value'>
										<span>
											<?php 
											echo "Rp".number_format(($sub_total),0,",",".");
											?>
										</span>
									</div>
								</li>
								<li class='cart-total'>
									<div class='cart-total-label'>
										<strong>Diskon:</strong>
									</div>
									<div class='cart-total-value'>
										<strong>
											<?php
											echo "Rp".number_format(($total_diskon),0,",",".");
											?>	
										</strong>
										<button class='coupon-code-cancel' style='display: none;'>Cancel</button>
									</div>
									<div class='clear'></div>

								</li>

								<li class='cart-total'>
									<div class='cart-total-label'>
										<strong>Grand total:</strong>
									</div>
									<div class='cart-total-value cart-total-grandTotal'>
										<span>
											<?php 
											$grand_total = $sub_total-$total_diskon;
											echo "Rp".number_format(($grand_total),0,",",".");
											?>
										</span>
									</div>
								</li>
							</ul>
						</div>

						<div class='cart-actions text-right'>
							<input type="submit" name="submit" value="Proses Checkout" class='btn btn-primary btn-lg'>
						</a>
					</div>
					<br>
					<!-- snippet location cart -->
				</div>
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