<br>
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <!-- <?php echo print_r($detail_produk);?> -->
    <!-- Column bagian kiri : mulai -->
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div id="flash-session"></div>
                <h3 class="card-title"><?php echo $detail_produk->productName?></h3>
                <h6 class="card-subtitle"><?php echo $detail_produk->memberName?></h6>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="white-box text-center"> <img src="<?php echo base_url()?>assets/images/product/<?php echo $detail_produk->photo1;?>" class="img-responsive" style="max-width: 100%;"> </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-6">
                        <h4 class="box-title">Deskripsi Produk</h4>
                        <p><?php echo $detail_produk->description;?></p>
                        <?php
                        $harga = number_format($detail_produk->salePrice,0,',','.');

                        $disc       = ($detail_produk->discount/100)*$detail_produk->salePrice;
                        $hargadisc  = number_format(($detail_produk->salePrice-$disc),0,",",".");

                        $d=$detail_produk->discount;

                        $hargatetap  = "<span> </span>
                        <span data-product-price-without-tax class='price price--withoutTax'> Rp. $hargadisc</span>";
                        $hargadiskon = "<span data-product-rrp-without-tax class='price price--rrp' style='color: red;''> $d% </span><br>
                        <span data-product-price-without-tax class='price price--withoutTax'><strike><small> Rp. $harga</small></strike></span>
                        <span data-product-price-without-tax class='price price--withoutTax'> Rp. $hargadisc</span>";
                        if ($d!='0'){
                            $divharga=$hargadiskon;
                            ?>
                            <h2 class="m-t-40"><?php echo $divharga;?></h2>
                            <?php
                        }else{
                          $divharga=$hargatetap;
                          ?>
                          <h2 class="m-t-40"><?php echo $divharga;?></h2>
                          <?php
                      } 
                      ?>
                      <?php
                      // print_r($dataDiri);
                      if($logged_in == 1){
                        // echo $detail_produks->memberID;
                        // echo $dataDiri['memberID'];
                        if($detail_produk->memberID == $dataDiri['memberID']){
                            echo "";
                        }else{
                            ?>
                            <button class="btn btn-dark btn-rounded m-r-5" id="add_cart" data-toggle="tooltip" title="" data-original-title="Add to cart" data-produkid="<?php echo $detail_produk->productID;?>" data-produknama="<?php echo $detail_produk->productName;?>" data-produkharga="<?php echo $detail_produk->salePrice;?>" data-memberID="$dataDiri['memberID']">
                                <i class="ti-shopping-cart"></i> Tambah Ke keranjang 
                            </button>
                            <a class="btn btn-info btn-rounded" href="<?php echo base_url('MemberC/insertToCart/').$dataDiri['memberID']."/".$detail_produk->productID;?>">Beli Sekarang</a>
                            <?php
                        }
                    }else{
                        ?>
                        <button class="btn btn-dark btn-rounded m-r-5" data-toggle="tooltip" title="" data-original-title="Add to cart"><i class="ti-shopping-cart"></i> Tambah Ke keranjang </button>
                        <a class="btn btn-info btn-rounded" href="<?php echo base_url('MemberC/insertToCart/');?>">Beli Sekarang</a>
                        <?php
                    }
                    ?>

                     <!--  <h3 class="box-title m-t-40">Key Highlights</h3>
                      <ul class="list-unstyled">
                        <li><i class="fa fa-check text-success"></i> Sturdy structure</li>
                        <li><i class="fa fa-check text-success"></i> Designed to foster easy portability</li>
                        <li><i class="fa fa-check text-success"></i> Perfect furniture to flaunt your wonderful collectibles</li>
                    </ul> -->
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="nav nav-pills m-t-30 m-b-30">
                        <li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">General Info</a> </li>
                        <li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Estimasi Ongkos Kirim</a> </li>
                        <li class="nav-item"> <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">Feedback</a> </li>
                    </ul>

                    <div class="tab-content br-n pn">
                        <div id="navpills-1" class="tab-pane active">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td width="390"><h5>Informasi</h5></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><i class="ti-bookmark-alt font-16"></i>&nbsp Kondisi</td>
                                                <td>
                                                   <?php if($detail_produk->conditions == '1'){
                                                    echo "Baru";
                                                }else{
                                                    echo "Bekas";
                                                }
                                                ?> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="ti-shopping-cart"></i>&nbsp Terjual</td>
                                            <td><?php echo $detail_produk->sold;?></td>
                                        </tr>
                                        <tr>
                                            <td><i class="ti-eye"></i>&nbsp Dilihat</td>
                                            <td><?php echo $detail_produk->hits?></td>
                                        </tr>
                                        <tr>
                                            <td><i class="ti-heart"></i>&nbsp Difavoritkan</td>
                                            <td><?php echo $favorit?></td>
                                        </tr>
                                        <tr>
                                            <td><i class="ti-time"></i>&nbsp Diperbaharui </td>
                                            <td>
                                                <?php 
                                                $time_get = strtotime($detail_produk->updateDate);

                                                $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
                                                $lengths = array("60","60","24","7","4.35","12","10");

                                                $now = time();

                                                $difference     = $now - $time_get;
                                                $tense         = "ago";

                                                for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
                                                    $difference /= $lengths[$j];
                                                }

                                                $difference = round($difference);

                                                if($difference != 1) {
                                                    $periods[$j].= "s";
                                                }

                                                echo "$difference $periods[$j] ago ";
                                                
                                                ?>    
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="390"><h5>Spesifikasi</h5></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Kategori</td>
                                            <td><?php echo $detail_produk->categoryName;?> </td>
                                        </tr>
                                        <tr>
                                            <td>Berat</td>
                                            <td><?php echo $detail_produk->weight." Gram";?></td>
                                        </tr>
                                     <!--    <tr>
                                            <td>Merek</td>
                                            <td> Lainnya </td>
                                        </tr> -->
                                              <!--   <tr>
                                                    <td>Size</td>
                                                    <td> XS, S, M, L, XL, XXL, Other Size </td>
                                                </tr> -->
                                        <tr>
                                            <td>Deskripsi</td>
                                            <td> <p><?php echo $detail_produk->description;?> </p> </td>
                                        </tr>
                                            <!-- <tr>
                                                <td>Catatan</td>
                                                <td> <p>Catatan Pelapak tetap tunduk terhadap Aturan penggunaan Koperasi.

                                                    Kaos Custom
                                                    Bahan Combed 20s & 30s

                                                    Jenis Sablon :

                                                    Sablon Rubber & Plastisol

                                                    Sablon Flex, Flock & Beludru

                                                    Print DTG (Direct To Garment)

                                                Catatan Pelapak terakhir kali diubah pada tanggal 10 Agustus 2018, pukul 12.01 WIB</p>
                                            </td>
                                        </tr> -->
                                        <tr>
                                            <tr>
                                                <td></td>
                                                <td class="text-right"> Anda Berminat ? &nbsp
                                                    <!-- <button type="button" class="btn waves-effect waves-light btn-success">Beli Sekarang</button> -->
                                                    <?php
                                                    if($logged_in == 1){
                                                        if($detail_produk->memberID == $dataDiri['memberID']){
                                                            echo "";
                                                        }else{
                                                            ?>
                                                            <a class="btn waves-effect waves-light btn-success" href="<?php echo base_url('MemberC/insertToCart/').$dataDiri['memberID']."/".$detail_produk->productID;?>">Beli Sekarang</a>
                                                            <?php
                                                        }
                                                    }else{
                                                        ?>
                                                        <a class="btn waves-effect waves-light btn-success" href="<?php echo base_url('MemberC/insertToCart/');?>">Beli Sekarang</a>
                                                        <?php
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div id="navpills-2" class="tab-pane">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td width="390">Masukan Jumlah</td>
                                                <td>
                                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected" style="width: 150px;">
                                                        <span class="input-group-btn input-group-prepend"></span>
                                                        <input id="demo3" type="text" value="-1" name="demo3" class="form-control">
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Masukan Tujuan</td>
                                                <td style="width: 300px">
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                        <option selected>Pilih Provinsi </option>
                                                        <option value="1">DKI Jakarta</option>
                                                        <option value="2">Banten</option>
                                                        <option value="3">Bengkulu</option>
                                                    </select>
                                                </td>
                                                <td style="width: 555px">
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                        <option selected>Pilih Kota/Kabupaten </option>
                                                        <option value="1">Jakarta Pusat</option>
                                                        <option value="2">Jakarta Barat</option>
                                                        <option value="3">Jakarta Selatan</option>
                                                    </select>
                                                </td>
                                                <td style="width: 300px">
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                        <option selected>Pilih Kecamatan </option>
                                                        <option value="1">Kebayoran Baru</option>
                                                        <option value="2">Kebayoran Lama</option>
                                                        <option value="3">Pasar Minggu</option>
                                                    </select>
                                                </td>
                                                <td style="width: 0px"></td>
                                                <td style="width: 0px"></td>
                                            </tr>
                                            <tr>
                                                <td>Estimasi ongkos ke </td>
                                                <td></td>
                                                <td> SERVIS </td>
                                                <td>WAKTU PENGANTARAN</td>
                                                <td>ONGKOS KIRIM</td>
                                                <td>HARGA + ONGKOS KIRIM</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><img src="<?php echo base_url()?>assets/images/jasa/jt.png" style="width: 50%;"/></td>
                                                <td>J&T REG</td>
                                                <td  style="width: 400px"><p style="color: red;">Tidak dijangkau pelapak</p></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><img src="<?php echo base_url()?>assets/images/jasa/jne.png" style="width: 50%;"/></td>
                                                <td> <p> JNE REG </p>
                                                    <p> JNE Trucking </p> 
                                                </td>
                                                <td  style="width: 400px">
                                                    <p style="color: red;">Tidak dijangkau pelapak</p>
                                                    <p style="color: red;">Tidak dijangkau pelapak</p>
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="navpills-3" class="tab-pane">
                            <div class="row">
                                <div class="col-md-8"> 
                                    <p><br/> Belum ada feedback.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>




        </div>
    </div>
</div>
<!-- Column bagian kiri : selesai -->

<!-- Column bagian kanan : mulai -->
<div class="col-lg-4">
    <div class="card">
        <div class="card-body">
            <button class="btn btn-facebook waves-effect waves-light" type="button"> <i class="fab fa-facebook"></i> </button>
            <button class="btn btn-twitter waves-effect waves-light" type="button"> <i class="fab fa-twitter"></i> </button>
            <button class="btn btn-googleplus waves-effect waves-light" type="button"> <i class="fab fa-google-plus"></i> </button>
            <button class="btn btn-instagram waves-effect waves-light" type="button"> <i class="fab fa-instagram"></i> </button>
            <button class="btn btn-pinterest waves-effect waves-light" type="button"> <i class="fab fa-pinterest"></i> </button>
            <button class="btn btn-line waves-effect waves-light" type="button"> <i class="fab fa-line"></i> </button>
            <br><br>
            <h5>PELAPAK</h5>

            <div class="d-flex no-block align-items-center p-15  m-b-10">
                <span class="user-img"><img src="<?php echo base_url()?>assets/images/users/1.jpg" alt="user" class="rounded-circle" width="60"></span>
                <div class="m-l-10">
                    <h4 class="m-b-0"><?php echo $detail_produk->memberName;?></h4>
                    <!-- <p class=" m-b-0"><i class="mdi mdi-thumb-up font-20"></i>&nbsp 90% (10 feedback)</p> -->
                    <a href="#"><p><i class="ti-location-pin font-20"></i><?php echo $detail_produk->nama_kabupaten_kota;?></p></a>
                </div>
            </div>


            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <p><h4 class="m-b-0"><i class="mdi mdi-bookmark"></i> BL User</h4></p>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Waktu kirim</p>
                                    <p>Pesanan diterima</p>
                                    <p>Login terakhir</p>
                                    <p>Bergabung</p>
                                </td>
                                <td>
                                    <p style="color: #87cc62;"> ± &nbsp 1-2 hari </p>
                                    <p style="color: #d1476e;">Menerima 1 dari 3 (33%)</p>
                                    <?php
                                    $time_get = strtotime($detail_produk->lasLogin);

                                    $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
                                    $lengths = array("60","60","24","7","4.35","12","10");

                                    $now = time();

                                    $difference     = $now - $time_get;
                                    $tense         = "ago";

                                    for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
                                        $difference /= $lengths[$j];
                                    }

                                    $difference = round($difference);

                                    if($difference != 1) {
                                        $periods[$j].= "s";
                                    }                                    
                                    echo "<p> $difference $periods[$j] ago </p>";
                                    ?>
                                    <p><?php 
                                    $tgl_gabung = $detail_produk->createdDate;
                                    $new_tgl_gabung = date('d/m/Y', strtotime($tgl_gabung));
                                    echo $new_tgl_gabung;  
                                    ?>      
                                </p>
                            </td>

                        </tr>
                        <tr>
                            <td>PENGIRIMAN</td>
                            <td>SAME DAY</td>
                            <td>INSTANT</td>
                        </tr>
                        <tr>
                            <td>
                                <p> PENGIRIMAN </p>
                                <p><img src="<?php echo base_url()?>assets/images/jasa/grab.png" style="width: 50%"/></p><br>
                                <p><img src="<?php echo base_url()?>assets/images/jasa/gosend.png" style="width: 50%"/></p>
                            </td>
                            <td>
                                <p> REGULER</p>
                                <p><i class="ti-check font-20"></i></p><br>
                                <p><i class="ti-check font-20"></i></p>
                            </td>
                            <td>
                                <p> KILAT </p>
                                <p><i class="ti-check font-20"></i></p><br>
                                <p><i class="ti-check font-20"></i></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p> PENGIRIMAN </p>
                                <p><img src="<?php echo base_url()?>assets/images/jasa/jt.png" style="width: 50%"/></p><br>
                                <p><img src="<?php echo base_url()?>assets/images/jasa/jne.png" style="width: 50%"/></p><br>
                                <p><img src="<?php echo base_url()?>assets/images/jasa/pos.png" style="width: 50%"/></p>
                            </td>
                            <td>
                                <p> REGULER</p>
                                <p><i class="ti-check font-20"></i></p><br>
                                <p><i class="ti-check font-20"></i></p><br>
                                <p><i class="ti-check font-20"></i></p>
                            </td>
                            <td>
                                <p> KILAT </p>
                                <p><i class="ti-check font-20"></i></p><br>
                                <p><i class="ti-check font-20"></i></p><br>
                                <p><i class="ti-check font-20"></i></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="dropdown-divider"></div>
           <!--  <div class="text-center">
                <button type="button" class="btn btn-lg waves-effect waves-light btn-outline-info"><i class="ti-home font-20"></i> &nbsp Berlangganan</button>
            </div>

            <div class="dropdown-divider"></div>
            <div class="text-left">
                <a href="#"><p>Semua Barang</p></a>
                <a href="#"><p>Barang Favorit</p></a>
                <a href="#"><p>Lihat Feedback</p></a>
                <a href="#"><p>Laporkan Pelanggaran</p></a>
            </div> -->

         <!--    <div class="dropdown-divider"></div>
            <i class="mdi mdi-forum font-20 text-left"></i><span>&nbsp Dapatkan tips belanja dan informasi terkini seputar koperasi shopping</span>
            <div class="text-center"><br> 
                <button type="button" class="btn btn-lg waves-effect waves-light btn-outline-info">Kunjungi Forum</button>
            </div> -->

        </div>
    </div>
</div>
<!-- Column bagian kanan : selasai -->
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->



<div class="row">
    <!-- Column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">                
                <!-- ============================================================== -->
                <!-- Barang Terkait : MULAI -->
                <!-- ============================================================== -->

                <?php
                if(!isset($produk_terkait)){
                    echo '<h4 class="page-title">Produk Terkait</h4>';
                }else{
                    echo '<h4 class="page-title">Tidak Ada Produk Terkait</h4>';
                }
                ?>
                <div class="row el-element-overlay">
                    <?php
                    foreach ($produk_terkait as $terkait){
                        ?>    
                        <div class="col-lg-2 col-md-6">
                            <div class="card">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1"> <img src="<?php echo base_url()?>assets/images/product/<?php echo $terkait->photo1?>" alt="user" />
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
                                            <h5><?php echo $terkait->productName?></h5>
                                            <span class="text-muted"><?php echo $terkait->nama_kabupaten_kota;?></span>
                                            <?php
                                            $harga = number_format($detail_produk->salePrice,0,',','.');

                                            $disc       = ($detail_produk->discount/100)*$detail_produk->salePrice;
                                            $hargadisc  = number_format(($detail_produk->salePrice-$disc),0,",",".");

                                            $d=$detail_produk->discount;

                                            $hargatetap  = "<span> </span>
                                            <span data-product-price-without-tax class='price price--withoutTax'> Rp. $hargadisc</span>";
                                            $hargadiskon = "<span data-product-rrp-without-tax class='price price--rrp' style='color: red;''> $d% </span><br>
                                            <span data-product-price-without-tax class='price price--withoutTax'><strike><small> Rp. $harga</small></strike></span>
                                            <span data-product-price-without-tax class='price price--withoutTax'> Rp. $hargadisc</span>";
                                            if ($d!='0'){
                                                $divharga=$hargadiskon;
                                                ?>
                                                <h5><?php echo $divharga;?></h5>
                                                <?php
                                            }else{
                                              $divharga=$hargatetap;
                                              ?>
                                              <h5><?php echo $divharga;?></h5>
                                              <?php
                                          } 
                                          ?>
                                      </div>
                                      <div class="ml-auto m-r-15"><br>
                                        <a href="<?php echo site_url('detail_produk/')?><?php echo $terkait->productID;?>"><button type="button" class="btn btn-dark " >Detail</button></a>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div><br>
            <!-- ============================================================== -->
            <!--Barang Terkait : SELESAI -->
            <!-- ============================================================== -->

        </div>
    </div>
</div>
</div>
<script src="<?php echo base_url()?>assets/libs/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#add_cart').click(function(){
            var productID = $(this).data("produkid");
            var memberID = $(this).data("memberID");
            $.ajax({
                // url : "<?php echo site_url('add_to_cart')?>",
                url : "<?php echo base_url();?>Cart/add_to_cart",
                method : "POST",
                data : {productID: productID, memberID: memberID},
                success: function(data){
                    // alert('success');
                    $("#dp-cart").attr("class", "nav-item dropdown show");
                    $("#dp-xp-cart").attr("aria-expanded", "true");
                    $("#dp-list-cart").attr("class", "dropdown-menu mailbox animated bounceInDown show");
                    $("#flash-session").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span></button><h3 class="text-success"><i class="fa fa-check-circle"></i> Sukses!</h3>Produk berhasil dimasukkan ke keranjang</div>');
                    window.setTimeout(function() {
                        $(".alert").fadeTo(100, 0).slideUp(100, function(){
                            $(this).remove(); 
                        });
                    }, 5000);
                    $('.alert .close').on("click", function(e){
                        $(this).parent().fadeTo(100, 0).slideUp(100);
                     });
                    $('#detail_cart').html(data);
                }
            });
        });
 
        // Load shopping cart
        $('#detail_cart').load("<?php echo base_url();?>Cart/show_cart");
    });
</script>