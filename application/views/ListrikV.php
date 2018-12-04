<!--============================================= BANNER ===========================================================-->


<div class="col-md-12">
    <div class="card text-white">
        <img class="card-img" src="<?php echo base_url()?>assets/images/listrik.jpg" alt="Card image">
    </div>
</div>


<div class="card-body ">
    <div class="col-md-12">
        <div class="">
            <div class=" ">
                <div class="card-group ">
                <div class="col-md-2"></div>
                    <!-- Card -->
                    <div class="col-md-1">
                        <div class="text-center">
                            <div class=" ">
                                <a href="<?php echo site_url()?>CobaC/pulsa"><img src="<?php echo base_url()?>assets/images/icon_white/pulsa.png" class="btn btn-circle btn-lg bg-danger"/></a>
                                <h6 style="margin-top: 10px;"> Pulsa </h6>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <!-- Card -->
                    <div class="col-md-1">
                        <div class="text-center">
                            <div class=" text-center">
                                <a href="<?php echo site_url()?>CobaC/paket"><img src="<?php echo base_url()?>assets/images/icon_white/paketdata.png" class="btn btn-circle btn-lg bg-info"/></a>
                                <h6 style="margin-top: 10px;"> Paket Data </h6>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <!-- Card -->
                    <div class="col-md-1">
                        <div class="text-center">
                            <div class=" text-center">
                                <a href="<?php echo site_url()?>CobaC/listrik"><img src="<?php echo base_url()?>assets/images/icon_white/pln.png" class="btn btn-circle btn-lg bg-success"/></a> 
                                <h6 style="margin-top: 10px;"> Listrik </h6>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <!-- Card -->
                    <div class="col-md-1">
                        <div class="text-center">
                            <div class=" text-center">
                                <a href="<?php echo site_url()?>CobaC/pdam"><img src="<?php echo base_url()?>assets/images/icon_white/pdam.png" class="btn btn-circle btn-lg bg-warning"/></a>
                                <h6 style="margin-top: 10px;"> PDAM </h6>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="col-md-1">
                        <div class="text-center">
                            <div class=" text-center">
                                <a href="<?php echo site_url()?>CobaC/kereta"><img src="<?php echo base_url()?>assets/images/icon_white/kereta.png" class="btn btn-circle btn-lg bg-danger"/></a>
                                <h6 style="margin-top: 10px;"> Tiket Kereta Api </h6>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <!-- Card -->
                    <div class="col-md-1">
                        <div class="text-center">
                            <div class=" text-center">
                                <a href="<?php echo site_url()?>CobaC/pesawat"><img src="<?php echo base_url()?>assets/images/icon_white/pesawat.png" class="btn btn-circle btn-lg bg-info"/></a>
                                <h6 style="margin-top: 10px;"> Tiket Pesawat </h6>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <!-- Card -->
                    <div class="col-md-1">
                        <div class="text-center">
                            <div class=" text-center">
                                <a href="<?php echo site_url()?>CobaC/hotel"><img src="<?php echo base_url()?>assets/images/icon_white/hotel.png" class="btn btn-circle btn-lg bg-success"/></a>
                                <h6 style="margin-top: 10px;"> Hotel </h6>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <!-- Card -->
                    <div class="col-md-1">
                        <div class="text-center">
                            <div class=" text-center">
                                <a href="<?php echo site_url()?>CobaC/bpjs"><img src="<?php echo base_url()?>assets/images/icon_white/bpjs.png" class="btn btn-circle btn-lg bg-warning"/></a>
                                <h6 style="margin-top: 10px;"> BPJS </h6>
                            </div>
                        </div>
                    </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</div>



<!--================================================ BANNER : END =========================================================-->


<div class="card">
  <div class="cardd-body"></div>
</div>

<div class="card">
    <div class="card-body">
        <!-- Home Banner 1 End -->
        <!-- Main Content Area -->
        <div class="container">
            <!-- Main Container -->
                <form action="<?php echo site_url() ?>pembayaran" method="GET">
                    <div class="col-xs-12 col-md-12 col-sm-12 " >
                        <h5>
                            <span class="heading-color"> Penuhi kebutuhan listrik kamu di sini.</span>
                        </h5><br>
                        <div class="control-group">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="show" name="customRadio" class="custom-control-input" value="pra" checked="">
                                    <label class="custom-control-label" for="show">Prabayar</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="hide" name="customRadio" class="custom-control-input" value="pasca">
                                    <label class="custom-control-label" for="hide">Pascabayar</label>
                                </div>
                            </div>
                        </div><br>

                            <label class="control-label" for="nomor">Nomor Meter/ID Pelanggan</label>
                            <div class="controls">
                                <div class="input-prepend">
                                    <input class="span4 nomor-input form-control" id="nomor" nama="nomor" type="text"><br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-12 col-sm-12">
                        <!-- pulsa-->
                        <div id="nominal">
                            <div class="container">
                                <div class="row clients-space">
                                    <div class="col-md-3 col-xs-3 col-sm-3">
                                        <span class="nominal-1"  ><h4> 25.000</h4></span><br>
                                        <span class="nominal-1"  ><h4> 40.000</h4></span>
                                    </div>

                                    <div class="col-md-3 col-xs-3 col-sm-3">
                                        <span class="nominal-1"  ><h4> 50.000</h4></span><br>
                                        <span class="nominal-1"  ><h4> 100.000</h4></span>
                                    </div>

                                    <div class="col-md-3 col-xs-3 col-sm-3">
                                        <span class="nominal-1"  ><h4> 150.000</h4></span><br>
                                        <span class="nominal-1"  ><h4> 200.000</h4></span>
                                    </div>

                                    <div class="col-md-3 col-xs-3 col-sm-3">
                                        <span class="nominal-1 text-center"  ><h4> 300.000</h4></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                    <input id="tipe" name="tipe" type="hidden" value="pulsa">
                    <input id="nomortelpon" name="nomortelpon" type="hidden">
                    
                    <!-- tombol beli -->
                    <div class="col-xs-12 col-md-12 col-sm-12"> 
                        <div class="control-group pull-right">
                            <div class="controls">
                                <div class="input-prepend text-right"><br>
                                    <button id="beli" type="submit" class="btn btn-info ">Beli Token</button>
                                    <button  id="tagihan" visibility type="submit" class="btn btn-info ">Bayar Tagihan</button>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <!-- tombol beli end -->
                </form>
        </div>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $("#tagihan").hide();
    $("#isitagihan").hide();
    $('input:radio[name="customRadio"]').change(
    function(){
        if ($(this).val() == 'pra') {
            $("#nominal").show();
            $("#tagihan").hide();
            $("#isitagihan").hide();
            $("#isipulsa").show();
            $("#beli").show();
        }
        else {
            $("#nominal").hide();
            $("#tagihan").show();
            $("#beli").hide();
            $("#isitagihan").show();
            $("#isipulsa").hide();
        }
    });
});


</script>