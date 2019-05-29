<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
			<div class="sidebar-categories">
					<div class="head">Browse Categories</div>
					<ul class="main-categories">
						<?php 
						// print_r($menu_kategori);
						foreach ($menu_kategori as $kategori) {
							?>
							<li class="main-nav-list">
								<a href="<?php echo base_url()?>kategori?cat=<?php echo $kategori->categoryID;?>" >
								<!-- <a data-toggle="collapse" href="<?php //echo base_url()?>/kategori?cat=<?php //echo strtolower(str_replace(" ","",$kategori->categoryName));?>" aria-expanded="false" aria-controls="fruitsVegetable"> -->
								<span
									class="lnr lnr-arrow-right"></span><?php echo " ".$kategori->categoryName;?><span class="number"><img src="<?php echo base_url()?>assets/images/kategori/<?php echo $kategori->icons;?>" /></span></a>
								<!-- <ul class="collapse" id="fruitsVegetable" data-toggle="collapse" aria-expanded="false" aria-controls="fruitsVegetable">
									<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
									<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
									<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
									<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
									<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
								</ul> -->
							</li>
							
							<?php
						}
						?>
						
<!-- 
						<li class="main-nav-list"><a data-toggle="collapse" href="#meatFish" aria-expanded="false" aria-controls="meatFish"><span
								 class="lnr lnr-arrow-right"></span>Meat and Fish<span class="number">(53)</span></a>
							<ul class="collapse" id="meatFish" data-toggle="collapse" aria-expanded="false" aria-controls="meatFish">
								<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
								<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
								<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
							</ul>
						</li>
						<li class="main-nav-list"><a data-toggle="collapse" href="#cooking" aria-expanded="false" aria-controls="cooking"><span
								 class="lnr lnr-arrow-right"></span>Cooking<span class="number">(53)</span></a>
							<ul class="collapse" id="cooking" data-toggle="collapse" aria-expanded="false" aria-controls="cooking">
								<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
								<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
								<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
							</ul>
						</li>
						<li class="main-nav-list"><a data-toggle="collapse" href="#beverages" aria-expanded="false" aria-controls="beverages"><span
								 class="lnr lnr-arrow-right"></span>Beverages<span class="number">(24)</span></a>
							<ul class="collapse" id="beverages" data-toggle="collapse" aria-expanded="false" aria-controls="beverages">
								<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
								<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
								<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
							</ul>
						</li>
						<li class="main-nav-list"><a data-toggle="collapse" href="#homeClean" aria-expanded="false" aria-controls="homeClean"><span
								 class="lnr lnr-arrow-right"></span>Home and Cleaning<span class="number">(53)</span></a>
							<ul class="collapse" id="homeClean" data-toggle="collapse" aria-expanded="false" aria-controls="homeClean">
								<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
								<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
								<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
							</ul>
						</li>
						<li class="main-nav-list"><a href="#">Pest Control<span class="number">(24)</span></a></li>
						<li class="main-nav-list"><a data-toggle="collapse" href="#officeProduct" aria-expanded="false" aria-controls="officeProduct"><span
								 class="lnr lnr-arrow-right"></span>Office Products<span class="number">(77)</span></a>
							<ul class="collapse" id="officeProduct" data-toggle="collapse" aria-expanded="false" aria-controls="officeProduct">
								<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
								<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
								<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
							</ul>
						</li>
						<li class="main-nav-list"><a data-toggle="collapse" href="#beauttyProduct" aria-expanded="false" aria-controls="beauttyProduct"><span
								 class="lnr lnr-arrow-right"></span>Beauty Products<span class="number">(65)</span></a>
							<ul class="collapse" id="beauttyProduct" data-toggle="collapse" aria-expanded="false" aria-controls="beauttyProduct">
								<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
								<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
								<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
							</ul>
						</li>
						<li class="main-nav-list"><a data-toggle="collapse" href="#healthProduct" aria-expanded="false" aria-controls="healthProduct"><span
								 class="lnr lnr-arrow-right"></span>Health Products<span class="number">(29)</span></a>
							<ul class="collapse" id="healthProduct" data-toggle="collapse" aria-expanded="false" aria-controls="healthProduct">
								<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
								<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
								<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
							</ul>
						</li>
						<li class="main-nav-list"><a href="#">Pet Care<span class="number">(29)</span></a></li>
						<li class="main-nav-list"><a data-toggle="collapse" href="#homeAppliance" aria-expanded="false" aria-controls="homeAppliance"><span
								 class="lnr lnr-arrow-right"></span>Home Appliances<span class="number">(15)</span></a>
							<ul class="collapse" id="homeAppliance" data-toggle="collapse" aria-expanded="false" aria-controls="homeAppliance">
								<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
								<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
								<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
							</ul>
						</li>
						<li class="main-nav-list"><a class="border-bottom-0" data-toggle="collapse" href="#babyCare" aria-expanded="false"
							 aria-controls="babyCare"><span class="lnr lnr-arrow-right"></span>Baby Care<span class="number">(48)</span></a>
							<ul class="collapse" id="babyCare" data-toggle="collapse" aria-expanded="false" aria-controls="babyCare">
								<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
								<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
								<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
								<li class="main-nav-list child"><a href="#" class="border-bottom-0">Meat<span class="number">(11)</span></a></li>
							</ul>
						</li> -->
					</ul>
				</div>
				<?php if(@$_REQUEST['cat'] && @$getSubCat): ?>
				<form action="" method="get">
				<input type="hidden" name='cat' value="<?=$_REQUEST['cat']?>" />
				<div class="sidebar-filter mt-50">
					<div class="top-filter-head">Product Filters</div>
					<div class="common-filter">
						<div class="head">Brands</div>
						<!-- <form action="#"> -->
							<ul>
								<?php foreach($getSubCat as $subcat): ?> 
								<?php //print_r($subcat->subCategorySeo);die(); ?>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="<?=$subcat->subCategorySeo?>" name="radio" value="<?=$subcat->subCategoryName?>"><label for="<?=$subcat->subCategorySeo?>"><?=$subcat->subCategoryName?><span></span></label></li>
								<!-- <li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Asus<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label for="gionee">Gionee<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="micromax" name="brand"><label for="micromax">Micromax<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="samsung" name="brand"><label for="samsung">Samsung<span>(19)</span></label></li> -->
								<?php endforeach; ?> 
							</ul>
						<!-- </form> -->
					</div>
					<!-- <div class="common-filter">
						<div class="head">Color</div>
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">Black<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">Black
										Leather<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Black
										with red<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Spacegrey<span>(19)</span></label></li>
							</ul>
						</form>
					</div> -->
					<div class="common-filter">
						<div class="head">Price</div>
						<div class="price-range-area">
							<div id="price-range"></div>
							<!-- <div class="value-wrapper d-flex"> -->
								<div class="price">Price:</div>
								<span>Rp&nbsp;</span>
								<div id="lower-value"><input type="number" name='min-val' value="" /></div>
								<div class="to">to</div>
								<span>Rp&nbsp;</span>
								<div id="upper-value"><input type="number" name='min-val' value="" /></div>
							<!-- </div> -->
							
						</div>
						<hr>
						<button type="submit" class="btn btn-dark " >Filter</button>
					</div>
					</form> 
				</div>
				<?php endif;?>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
			<!-- Start Filter Bar -->
			<div class="filter-bar d-flex flex-wrap align-items-center">
				<div class="sorting">
					<select>
						<option value="1">Default sorting</option>
						<option value="1">Default sorting</option>
						<option value="1">Default sorting</option>
					</select>
				</div>
				<div class="sorting mr-auto">
					<select>
						<option value="1">Show 12</option>
						<option value="1">Show 12</option>
						<option value="1">Show 12</option>
					</select>
				</div>
				<div class="pagination">
					<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
					<a href="#">6</a>
					<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<!-- End Filter Bar -->
			<h4 class="page-title"></h4>
				<div class="row el-element-overlay">
					<?php  
					if(count($get_produk_terbaru) == 0){
						echo "<h4>Kategori tersebut belum tersedia<h4>";
					}
					// print_r($get_produk_terbaru);    
					foreach ($get_produk_terbaru as $produk_terbaru) {
						// diskon  
						$harga      = number_format($produk_terbaru->salePrice,0,',','.');
						$disc       = ($produk_terbaru->discount/100)*$produk_terbaru->salePrice;
						$hargadisc  = number_format(($produk_terbaru->salePrice-$disc),0,",",".");

						$d=$produk_terbaru->discount;

						$hargatetap  = "<span> </span>
						<span data-product-price-without-tax class='price price--withoutTax'> Rp. $hargadisc</span>";
						$hargadiskon = "<span data-product-rrp-without-tax class='price price--rrp' style='color: red;''> $d% </span><br>
						<span data-product-price-without-tax class='price price--withoutTax'><strike><small> Rp. $harga</small></strike></span>
						<span data-product-price-without-tax class='price price--withoutTax'> Rp. $hargadisc</span>";
						if ($d!='0'){
						$divharga=$hargadiskon;
					}else{
						$divharga=$hargatetap;
					} 
					?>

					<div class="col-lg-4 col-md-6">
						<div class="card">
							<div class="el-card-item">
								<div class="el-card-avatar el-overlay-1"> <img src="<?php echo base_url()?>assets/images/product/<?php echo $produk_terbaru->photo1?>" style="width: 200px; height: 200px;" alt="user"/>
									<div class="el-overlay">
										<ul class="list-style-none el-info">
											<li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo base_url()?>detail"><i class="sl-icon-magnifier"></i></a></li>
											<li class="el-item"><a class="btn default btn-outline el-link" href="<?php echo base_url()?>detail"><i class="sl-icon-link"></i></a></li>
											<li class="el-item"><a class="btn default btn-outline el-link" href="<?php echo base_url()?>detail"><i class="sl-icon-basket"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="d-flex no-block align-items-center">
									<div class="m-l-15">
										<h5><?php echo $produk_terbaru->productName;?></h5>
										<span class="text-muted"><?php echo $produk_terbaru->nama_kabupaten_kota;?></span>
										<h5><?php  echo $divharga;?></h5>
									</div>
									<div class="ml-auto m-r-15"><br>
										<a href="<?php echo site_url('detail_produk/').$produk_terbaru->productID?>"><button type="button" class="btn btn-dark " >Detail</button></a>                                    
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
				?>

				</div>
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting mr-auto">
						<select>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
						</select>
					</div>
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Filter Bar -->
			</div>
		</div>
	</div>