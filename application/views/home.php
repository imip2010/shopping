    
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!--header kedua : mulai -->
    <!-- ============================================================== -->

    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <?php
                            $i = 1;
                            foreach ($get_header2 as $header2) {
                                if($i==1){
                                    ?>
                                    <div class="carousel-item active"> <img class="img-slide" src="<?php echo base_url()?>assets/images/<?php echo $header2->icon;?>" alt="First slide"> </div>
                                    <?php
                                }else{
                                    ?>
                                    <div class="carousel-item"> <img class="img-slide" src="<?php echo base_url()?>assets/images/<?php echo $header2->icon;?>" alt="next slide"> </div>
                                    <?php
                                }
                                $i++;
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End row -->
    <!-- ============================================================== -->
    <!-- header kedua : selesai -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- PPOB BAGIAN 1 : MULAI -->
    <!-- ============================================================== -->
    <div class="card-group">
        <!-- Card -->
        <div class="card">
            <div class="card-body" >
                <div class="d-flex align-items-center">
                    <div class="m-r-10">
                        <a href="#"><img src="<?php echo base_url()?>assets/images/icon_white/pulsa.png" class="btn btn-circle btn-lg bg-danger"/></a>
                    </div>
                    <div>
                     <h3 style="padding-left: 15px;" > Pulsa </h3>
                 </div>
                 <div class="ml-auto">
                    <a href="#"><i class="ti-angle-double-right font-20"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                    <a href="#"><img src="<?php echo base_url()?>assets/images/icon_white/paketdata.png" class="btn btn-circle btn-lg bg-info"/></a>
                </div>
                <div>
                    <h3 style="padding-left: 15px;" > Paket Data </h3>

                </div>
                <div class="ml-auto">
                    <a href="#"><i class="ti-angle-double-right font-20"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                    <a href="#"><img src="<?php echo base_url()?>assets/images/icon_white/pln.png" class="btn btn-circle btn-lg bg-success"/></a>
                </div>
                <div>
                    <h3 style="padding-left: 15px;" > Listrik </h3>

                </div>
                <div class="ml-auto">
                    <a href="#"><i class="ti-angle-double-right font-20"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                    <a href="#"><img src="<?php echo base_url()?>assets/images/icon_white/pdam.png" class="btn btn-circle btn-lg bg-warning"/></a>
                </div>
                <div>
                    <h3 style="padding-left: 15px;" > PDAM </h3>
                </div>
                <div class="ml-auto">
                    <a href="#"><i class="ti-angle-double-right font-20"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- PPOB BAGIAN 1 : SELESAI -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- PPOB BAGIAN 2 : MULAI -->
<!-- ============================================================== -->
<div class="card-group">
    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                    <a href="#"><img src="<?php echo base_url()?>assets/images/icon_white/kereta.png" class="btn btn-circle btn-lg bg-danger"/></a>
                </div>
                <div>
                    <h3 style="padding-left: 15px;" > Tiket Kereta Api </h3>
                </div>
                <div class="ml-auto">
                    <a href="#"><i class="ti-angle-double-right font-20"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                    <a href="#"><img src="<?php echo base_url()?>assets/images/icon_white/pesawat.png" class="btn btn-circle btn-lg bg-info"/></a>
                </div>
                <div>
                    <h3 style="padding-left: 15px;" > Tiket Pesawat </h3>

                </div>
                <div class="ml-auto">
                    <a href="#"><i class="ti-angle-double-right font-20"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                    <a href="#"><img src="<?php echo base_url()?>assets/images/icon_white/hotel.png" class="btn btn-circle btn-lg bg-success"/></a>
                </div>
                <div>
                    <h3 style="padding-left: 15px;" > Hotel </h3>

                </div>
                <div class="ml-auto">
                    <a href="#"><i class="ti-angle-double-right font-20"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    <!-- Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="m-r-10">
                    <a href="#"><img src="<?php echo base_url()?>assets/images/icon_white/bpjs.png" class="btn btn-circle btn-lg bg-warning"/></a>
                </div>
                <div>
                    <h3 style="padding-left: 15px;" > BPJS </h3>

                </div>
                <div class="ml-auto">
                    <a href="#"><i class="ti-angle-double-right font-20"></i></a>
                </div>
            </div>
        </div>
    </div>
</div><br><br>
<!-- ============================================================== -->
<!-- PPOB BAGIAN 2 : SELESAI -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- PROMO HARI INI : MULAI -->
<!-- ============================================================== -->

<h4 class="page-title">Promo Hari Ini</h4>
<div class="row el-element-overlay">
    <div class="col-lg-2 col-md-6">
        <div class="card">
            <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo base_url()?>assets/images/gallery/chair.jpg" alt="user" />
                    <div class="el-overlay">
                        <ul class="list-style-none el-info">
                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo base_url()?>assets/images/gallery/chair.jpg"><i class="sl-icon-magnifier"></i></a></li>
                            <li class="el-item"><a class="btn default btn-outline el-link" href="<?php echo base_url()?>detail"><i class="sl-icon-link"></i></a></li>
                            <li class="el-item"><a class="btn default btn-outline el-link" href="<?php echo base_url()?>detail"><i class="sl-icon-basket"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex no-block align-items-center">
                    <div class="m-l-15">
                        <h5>Rounded Chair</h5>
                        <span class="text-muted">Jakarta Selatan</span>
                        <h5>Rp. 150.000</h5>
                    </div>
                    <div class="ml-auto m-r-15"><br>
                        <a href="<?php echo base_url()?>detail"><button type="button" class="btn btn-dark " >Detail</button></a>                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-6">
        <div class="card">
            <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo base_url()?>assets/images/gallery/chair2.jpg" alt="user" />
                    <div class="el-overlay">
                        <ul class="list-style-none el-info">
                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo base_url()?>assets/images/gallery/chair2.jpg"><i class="sl-icon-magnifier"></i></a></li>
                            <li class="el-item"><a class="btn default btn-outline el-link" href="<?php echo base_url()?>detail"><i class="sl-icon-link"></i></a></li>
                            <li class="el-item"><a class="btn default btn-outline el-link" href="<?php echo base_url()?>detail"><i class="sl-icon-basket"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex no-block align-items-center">
                    <div class="m-l-15">
                        <h5>Rounded Chair</h5>
                        <span class="text-muted">Jakarta Selatan</span>
                        <h5>Rp. 150.000</h5>
                    </div>
                    <div class="ml-auto m-r-15"><br>
                        <a href="<?php echo base_url()?>detail"><button type="button" class="btn btn-dark " >Detail</button></a>                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-6">
        <div class="card">
            <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo base_url()?>assets/images/gallery/chair3.jpg" alt="user" />
                    <div class="el-overlay">
                        <ul class="list-style-none el-info">
                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo base_url()?>assets/images/gallery/chair3.jpg"><i class="sl-icon-magnifier"></i></a></li>
                            <li class="el-item"><a class="btn default btn-outline el-link" href="<?php echo base_url()?>detail"><i class="sl-icon-link"></i></a></li>
                            <li class="el-item"><a class="btn default btn-outline el-link" href="<?php echo base_url()?>detail"><i class="sl-icon-basket"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex no-block align-items-center">
                    <div class="m-l-15">
                        <h5>Rounded Chair</h5>
                        <span class="text-muted">Jakarta Selatan</span>
                        <h5>Rp. 150.000</h5>
                    </div>
                    <div class="ml-auto m-r-15"><br>
                        <a href="<?php echo base_url()?>detail"><button type="button" class="btn btn-dark " >Detail</button></a>                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-6">
        <div class="card">
            <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo base_url()?>assets/images/gallery/chair4.jpg" alt="user" />
                    <div class="el-overlay">
                        <ul class="list-style-none el-info">
                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo base_url()?>assets/images/gallery/chair4.jpg"><i class="sl-icon-magnifier"></i></a></li>
                            <li class="el-item"><a class="btn default btn-outline el-link" href="<?php echo base_url()?>detail"><i class="sl-icon-link"></i></a></li>
                            <li class="el-item"><a class="btn default btn-outline el-link" href="<?php echo base_url()?>detail"><i class="sl-icon-basket"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex no-block align-items-center">
                    <div class="m-l-15">
                        <h5>Rounded Chair</h5>
                        <span class="text-muted">Jakarta Selatan</span>
                        <h5>Rp. 150.000</h5>
                    </div>
                    <div class="ml-auto m-r-15"><br>
                        <a href="<?php echo base_url()?>detail"><button type="button" class="btn btn-dark " >Detail</button></a>                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-6">
        <div class="card">
            <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo base_url()?>assets/images/gallery/chair4.jpg" alt="user" />
                    <div class="el-overlay">
                        <ul class="list-style-none el-info">
                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo base_url()?>assets/images/gallery/chair4.jpg"><i class="sl-icon-magnifier"></i></a></li>
                            <li class="el-item"><a class="btn default btn-outline el-link" href="<?php echo base_url()?>detail"><i class="sl-icon-link"></i></a></li>
                            <li class="el-item"><a class="btn default btn-outline el-link" href="<?php echo base_url()?>detail"><i class="sl-icon-basket"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex no-block align-items-center">
                    <div class="m-l-15">
                        <h5>Rounded Chair</h5>
                        <span class="text-muted">Jakarta Selatan</span>
                        <h5>Rp. 150.000</h5>
                    </div>
                    <div class="ml-auto m-r-15"><br>
                        <a href="<?php echo base_url()?>detail"><button type="button" class="btn btn-dark " >Detail</button></a>                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-6">
        <div class="card">
            <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo base_url()?>assets/images/gallery/chair3.jpg" alt="user" />
                    <div class="el-overlay">
                        <ul class="list-style-none el-info">
                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo base_url()?>assets/images/gallery/chair3.jpg"><i class="sl-icon-magnifier"></i></a></li>
                            <li class="el-item"><a class="btn default btn-outline el-link" href="<?php echo base_url()?>detail"><i class="sl-icon-link"></i></a></li>
                            <li class="el-item"><a class="btn default btn-outline el-link" href="<?php echo base_url()?>detail"><i class="sl-icon-basket"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex no-block align-items-center">
                    <div class="m-l-15">
                        <h5>Rounded Chair</h5>
                        <span class="text-muted">Jakarta Selatan</span>
                        <h5>Rp. 150.000</h5>
                    </div>
                    <div class="ml-auto m-r-15"><br>
                        <a href="<?php echo base_url()?>detail"><button type="button" class="btn btn-dark " >Detail</button></a>                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br>
<!-- ============================================================== -->
<!-- PROMO HARI INI : SELESAI -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- PRODUK TERBARU : MULAI -->
<!-- ============================================================== -->

<h4 class="page-title">Produk Terbaru</h4>
<div class="row el-element-overlay">
    <?php  
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

      <div class="col-lg-2 col-md-6">
        <div class="card">
            <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo base_url()?>assets/images/product/thumb/small_<?php echo $produk_terbaru->photo1?>" alt="user" />
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
                        <span class="text-muted"><?php echo $produk_terbaru->address;?></span>
                        <h5><?php  echo $divharga;?></h5>
                    </div>
                    <div class="ml-auto m-r-15"><br>
                        <a href="<?php echo base_url()?>detail"><button type="button" class="btn btn-dark " >Detail</button></a>                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>

</div>
<!-- ============================================================== -->
<!-- PRODUK TERBARU : SELESAI -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
