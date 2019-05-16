<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 10px 10px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 15px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 10px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
}
</style>

<!-- row -->
<?php foreach($seller_detail as $toko){?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <a class="carousel-control-next btn btn-info" href="<?php echo site_url('pengaturan_profile')?>" type="button" style="height: 10%;"><span>Ubah Foto Header</span> </a>
                        <img class="img-slide" src="<?php echo base_url()?>assets/images/store/<?php echo $toko->shop_header;?>" alt="First slide"/>
                    </div><br><br>
                    <div class="d-flex no-block">
                        <div class="">
                            <img src="<?php echo base_url()?>assets/images/users/<?php echo $toko->photo;?>" alt="user" class="rounded-circle" width="90">
                        </div>
                        <div class="m-l-10">
                            <h4 class="m-b-0"><?php echo $toko->memberName;?></h4>
                            <p class=" m-b-0"><i class="ti-location-pin font-20"></i><?php echo $toko->shop_address;?></p>
                            <p class=" m-b-0"><?php echo $kabupaten.", ".$provinsi;?></p>
                        </div>
                    </div>
                    <div class="m-l-10 text-right">
                        <a class="btn btn-info" href="<?php echo site_url('pengaturan_profile')?>" style="margin-top: -14%;" ><i class="ti-settings m-r-5 m-l-5"></i><span> Edit Toko</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>
<!-- End row -->

<div class="row">

<div class="col-lg-3 col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="myadmin-dd dd" id="nestable">
                <div class="d-flex no-block align-items-center ">
                    <h3>Etalase</h3>
                </div><br>

                <ul class="list-style-none el-info" >
                    <li class="el-item">
                        <a href="#" > Semua Barang</a>
                    </li>
                    <div class="dropdown-divider"></div>
                </ul><br>
            </div>
        </div>
    </div>

    <button class="btn btn-facebook waves-effect waves-light" type="button"> <i class="fab fa-facebook"></i> </button>
    <button class="btn btn-twitter waves-effect waves-light" type="button"> <i class="fab fa-twitter"></i> </button>
    <button class="btn btn-googleplus waves-effect waves-light" type="button"> <i class="fab fa-google-plus"></i> </button>
    <button class="btn btn-instagram waves-effect waves-light" type="button"> <i class="fab fa-instagram"></i> </button>
    <button class="btn btn-pinterest waves-effect waves-light" type="button"> <i class="fab fa-pinterest"></i> </button>
    <button class="btn btn-line waves-effect waves-light" type="button"> <i class="fab fa-line"></i> </button>
    <br><br>

    <a href="#">Laporkan Pelanggaran</a>
</div>
<?php
$sortBy = "";
if(isset($_GET["sortBy"]))
{ $sortBy = $_GET["sortBy"]; }
?>
  <div class="col-lg-9 col-md-12">
      <div class="card border-info">
          <div class="card-header bg-info">
            <!-- <form action=""> -->
                <div class="dropdown">
                    <input type="text" class="form-control" placeholder="Search.." name="search" style="width: 40%; display: inline;">
                    <button type="submit" class="btn btn-light-info"><i class="ti-search font-16"></i></button>
                    <div style="display: inline-block;">
                      <form name='sortForm' id='sortForm'>
                        <ul>
                            <li style="display: inline-block;padding-top: 2px;padding-bottom: 1px;" class="btn  <?php if ($sortBy == 'ctime') {?> bg-warning text-white <?php }else{?> bg-white <?php }?>">
                                <input type='radio' value='ctime' name='sortBy' id='ctime' style="opacity: 0;width: 0;" <?php if ($sortBy == 'ctime') { ?> checked='checked' <?php } ?> onChange="autoSubmit();"><label for='ctime' style="cursor: pointer;">Terbaru</label>
                            </li>
                            <li style="display: inline-block;padding-top: 2px;padding-bottom: 1px;" class="btn  <?php if ($sortBy == 'sales') {?> bg-warning text-white <?php }else{?> bg-white <?php }?>">
                                <input type='radio' value='sales' name='sortBy'  id='sales' style="opacity: 0;width: 0;" <?php if ($sortBy == 'sales') { ?> checked='checked' <?php } ?> onChange="autoSubmit();"><label for='sales' style="cursor: pointer;">Terlaris</label>
                            </li>
                        </ul>
                      </form>
                    </div>
                    <!-- <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                        <i class="ti-filter font-20"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right user-dd animated ">
                        <li class="dropdown-item"><a href="#">Terbaru</a></li>
                        <li class="dropdown-item"><a href="#">Termurah</a></li>
                        <li class="dropdown-item"><a href="#">Termahal</a></li>
                        <li class="dropdown-item"><a href="#">Terlaris</a></li>
                    </ul> -->
                    <!-- <button class="btn btn-default dropdown-toggle" type="button" data-toggle="modal" data-target="#myModal" disabled=""> 
                        <i class="ti-filter font-20"></i>filter
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right user-dd animated ">
                        <li class="dropdown-item"><a href="#">Terbaru</a></li>
                        <li class="dropdown-item"><a href="#">Termurah</a></li>
                        <li class="dropdown-item"><a href="#">Termahal</a></li>
                        <li class="dropdown-item"><a href="#">Terlaris</a></li>
                    </ul> -->
                </div>
            <!-- </form> -->
          </div>
          <div class="card-body">
              <h4 class="m-b-0 ">Semua Barang</h4><br>
              <?php if (!empty($products)) { ?>
                <div>
                    <div class="row el-element-overlay">
                    <?php
                    foreach ($products as $produk) { 
                      // diskon  
                      $harga      = number_format($produk->salePrice,0,',','.');
                      $disc       = ($produk->discount/100)*$produk->salePrice;
                      $hargadisc  = number_format(($produk->salePrice-$disc),0,",",".");

                      $d=$produk->discount;

                      $hargatetap  = "<span> </span>
                      <span data-product-price-without-tax class='price price--withoutTax'> Rp. $hargadisc</span>";
                      $hargadiskon = "<span data-product-rrp-without-tax class='price price--rrp' style='color: red;''> $d% </span><br>
                      <span data-product-price-without-tax class='price price--withoutTax'><strike><small> Rp. $harga</small></strike></span><br>
                      <span data-product-price-without-tax class='price price--withoutTax'> Rp. $hargadisc</span>";
                      if ($d!='0'){
                        $divharga=$hargadiskon;
                      }else{
                        $divharga=$hargatetap;
                      } 
                      ?>    
                        <div class="col-md-3">
                            <div class="card">
                                <div class="el-card-item">
                                    <div class="el-card-avatar el-overlay-1"> <img src="<?php echo base_url()?>assets/images/product/<?php echo $produk->photo1?>" alt="user"  style="height: 200px;" />
                                        <div class="el-overlay">
                                            <ul class="list-style-none el-info">
                                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?php echo base_url()?>assets/images/gallery/chair.jpg"><i class="sl-icon-magnifier"></i></a></li>
                                                <li class="el-item"><a class="btn default btn-outline el-link" href="<?php echo base_url()?>detail"><i class="sl-icon-link"></i></a></li>
                                                <li class="el-item"><a class="btn default btn-outline el-link" href="<?php echo base_url()?>detail"><i class="sl-icon-basket"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex no-block ">
                                        <div class="m-l-15">
                                            <h5><?php echo $produk->productName;?></h5>
                                            <span class="text-muted"><?php echo $kabupaten?></span>
                                            <h5><?php  echo $divharga;?></h5>
                                        </div>
                                        <div class="ml-auto m-r-15"><br>
                                            <a href="<?php echo site_url('detail_produk/').$produk->productID?>"><button type="button" class="btn btn-dark " >Detail</button></a>                                  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
              <?php }else{?>
                <div class="text-center">
                    <img src="<?php echo base_url()?>assets/images/no_barang.png" >
                    <p>Tidak Ada Barang</p>
                </div>
              <?php }?>
          </div>
      </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Filter Barang</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="tab">
                  <button class="tablinks" onclick="openCity(event, 'rentangharga')" id="defaultOpen">Rentang Harga</button>
                  <button class="tablinks" onclick="openCity(event, 'kondisibarang')">Kondisi Barang</button>
                  <button class="tablinks" onclick="openCity(event, 'gratisongkir')">Gratis Ongkir</button>
                  <button class="tablinks" onclick="openCity(event, 'lainnya')">Lainnya</button>
                </div>

                <div id="rentangharga" class="tabcontent">
                    <p>Harga Minimal</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <p>Harga Maksimal</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>

                <div id="kondisibarang" class="tabcontent">
                    <form>
                    <div class="radio">
                      <label><input type="radio" name="optradio" checked>Semua Kondisi</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="optradio">Barang Baru</label>
                    </div>
                    <div class="radio ">
                      <label><input type="radio" name="optradio" >Barang Bekas</label>
                    </div>
                    </form>
                </div>

                <div id="gratisongkir" class="tabcontent">
                    <p class="m-b-0">Daerah Populer</p>
                    <form>
                    <div class="radio">
                      <label><input type="radio" name="optradio" checked>Seluruh Indonesia</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="optradio">Jabodetabekkar</label>
                    </div>
                    <div class="radio ">
                      <label><input type="radio" name="optradio" >Pulau Jawa</label>
                    </div>
                    </form><br>

                    <p>Jawa & Bali</p>
                    <form>
                    <div class="radio">
                      <label><input type="radio" name="optradio" checked>Bali</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="optradio">Banten</label>
                    </div>
                    <div class="radio ">
                      <label><input type="radio" name="optradio" >Daerah Istimewa Yogyakarta</label>
                    </div>
                    </form>
                </div>

                <div id="lainnya" class="tabcontent">
                    <form>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="diskon" name="diskon" >
                        <label class="custom-control-label" for="diskon" >Diskon</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="cicilan" name="cicilan" >
                        <label class="custom-control-label" for="cicilan" >Cicilan</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="grosir" name="grosir">
                        <label class="custom-control-label" for="grosir" >Grosir</label>
                    </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-light-info" data-dismiss="modal">Reset</button>
                <button type="submit" class="btn btn-default" data-dismiss="modal">Terapkan</button>
            </div>
        </div>
    </div>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function autoSubmit()
{
    var formObject = document.forms['sortForm'];
    formObject.submit();
}
</script>
