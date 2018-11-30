
<div class="card-body text-center">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-10">
                <div class="row">
                    <div class="card-group ">
                        <!-- Card -->
                        <div class="col-md-2">
                            <div class="d-flex align-items-center">
                                <div class=" text-center">
                                    <a href="<?php echo site_url()?>CobaC/pulsa"><img src="<?php echo base_url()?>assets/images/icon_white/pulsa.png" class="btn btn-circle btn-lg bg-danger"/></a>
                                    <h6> Pulsa </h6>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <!-- Card -->
                        <div class="col-md-2">
                            <div class="d-flex align-items-center">
                                <div class=" text-center">
                                    <a href="<?php echo site_url()?>CobaC/paket"><img src="<?php echo base_url()?>assets/images/icon_white/paketdata.png" class="btn btn-circle btn-lg bg-info"/></a>
                                    <h6> Paket Data </h6>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <!-- Card -->
                        <div class="col-md-2">
                            <div class="d-flex align-items-center">
                                <div class=" text-center">
                                    <a href="#"><img src="<?php echo base_url()?>assets/images/icon_white/pln.png" class="btn btn-circle btn-lg bg-success"/></a> 
                                    <h6> Listrik </h6>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <!-- Card -->
                        <div class="col-md-2">
                            <div class="d-flex align-items-center">
                                <div class=" text-center">
                                    <a href="#"><img src="<?php echo base_url()?>assets/images/icon_white/pdam.png" class="btn btn-circle btn-lg bg-warning"/></a>
                                    <h6> PDAM </h6>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="col-md-2">
                            <div class="d-flex align-items-center">
                                <div class=" text-center">
                                    <a href="<?php echo site_url()?>CobaC/kereta"><img src="<?php echo base_url()?>assets/images/icon_white/kereta.png" class="btn btn-circle btn-lg bg-danger"/></a>
                                    <h6> Tiket Kereta Api </h6>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <!-- Card -->
                        <div class="col-md-2">
                            <div class="d-flex align-items-center">
                                <div class=" text-center">
                                    <a href="#"><img src="<?php echo base_url()?>assets/images/icon_white/pesawat.png" class="btn btn-circle btn-lg bg-info"/></a>
                                    <h6> Tiket Pesawat </h6>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <!-- Card -->
                        <div class="col-md-2">
                            <div class="d-flex align-items-center">
                                <div class=" text-center">
                                    <a href="#"><img src="<?php echo base_url()?>assets/images/icon_white/hotel.png" class="btn btn-circle btn-lg bg-success"/></a>
                                    <h6> Hotel </h6>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <!-- Card -->
                        <div class="col-md-2">
                            <div class="d-flex align-items-center">
                                <div class=" text-center">
                                    <a href="#"><img src="<?php echo base_url()?>assets/images/icon_white/bpjs.png" class="btn btn-circle btn-lg bg-warning"/></a>
                                    <h6> BPJS </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-1"></div>
        </div>
    </div>
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
                            <span id="isipulsa" class="heading-color"> Ayo isi pulsamu di sini</span>
                            <span id="isitagihan" class="heading-color"> Bayar tagihan telepon kamu di sini</span>
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

                            <label class="control-label" for="nomor">Nomor Telepon</label>
                            <div class="controls">
                                <div class="input-prepend">
                                    <input class="span4 nomor-input form-control" id="nomor" nama="nomor" type="text">
                                    <span class="add-on" ><span id="logoop" class="logo-operator" style="margin-top:-56px;"></span></span>
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
                                        <span class="pulsa-1"  ><h4> 25.000</h4></span><br>
                                        <span class="pulsa-1"  ><h4> 40.000</h4></span>
                                    </div>

                                    <div class="col-md-3 col-xs-3 col-sm-3">
                                        <span class="pulsa-1"  ><h4> 50.000</h4></span><br>
                                        <span class="pulsa-1"  ><h4> 100.000</h4></span>
                                    </div>

                                    <div class="col-md-3 col-xs-3 col-sm-3">
                                        <span class="pulsa-1"  ><h4> 150.000</h4></span><br>
                                        <span class="pulsa-1"  ><h4> 200.000</h4></span>
                                    </div>

                                    <div class="col-md-3 col-xs-3 col-sm-3">
                                        <span class="pulsa-1 text-center"  ><h4> 300.000</h4></span>
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
                                    <label id="bayar" class="control-label" for="inputIcon">Harga Rp<span id="duit"> 1000 &nbsp &nbsp</span></label>
                                    <button id="beli" type="submit" class="btn btn-info ">Beli Pulsa</button>
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
        }
        else {
            $("#nominal").hide();
            $("#bayar").hide();
            $("#tagihan").show();
            $("#beli").hide();
            $("#isitagihan").show();
            $("#isipulsa").hide();
        }
    });
});


</script>