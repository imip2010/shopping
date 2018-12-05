
<!--==================================================== BANNER =============================================================-->

<div class="col-md-12">
    <div class="card text-white">
        <img class="card-img" src="<?php echo base_url()?>assets/images/pesawat.jpg" alt="Card image">
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
    <div class="card-body">
        <!-- Main Container -->
        <form action="http://localhost/koperasi/pembayaran.php" method="GET">
        <div class="col-xs-12 col-md-12 col-sm-12  " >
            <h4><span class="heading-color">Ayo cari tiket kamu di sini</span></h4><br>
            <div class="row">   
                <div class="col-md-2">
                    <label class="m-t-20">Dari :</label><br>
                    <select class="select2 form-control custom-select" >
                        <option>Kota / Bandara</option>
                        <option value="AK">Soekarno Hatta (CGK)</option>
                        <option value="AK">Halim Perdanakusuma (HLP)</option>
                        <option value="CA">Jakarta All Airport (JKT)</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label class="m-t-20">Ke :</label><br>
                    <select class="select2 form-control custom-select" >
                        <option>Kota / Bandara</option>
                        <option value="AK">Ngurah Rai Airport (DPS)</option>
                        <option value="HI">Minangkabau Airport (PDG)</option>
                        <option value="CA">Kualanamu Airport (KNI)</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label class="m-t-20">Berangkat</label>
                    <input type="text" class="form-control" placeholder="2017-06-04" id="pergi" data-dtp="dtp_eNhfO">
                </div>

                <div class="col-md-2"><br>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="pilih">
                        <label class="custom-control-label" for="pilih">Pulang Pergi</label>
                    </div>
                    <input type="text" class="form-control inputDisabled" placeholder="2017-06-04" id="pulang" data-dtp="dtp_eNhfO" disabled="disabled"  style="margin-top: 4px;">
                </div>

                <div class="col-md-2"><br>
                    <label class="card-title">Dewasa</label>
                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected" style="margin-top: -5px;">
                        <input id="demo3" type="text" value="-1" name="demo3" class="form-control">
                    </div>
                </div>

                <div class="col-md-2"><br>
                    <label class="card-title">Balita</label>
                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected" style="margin-top: -5px;">
                        <input id="demo3" type="text" value="-1" name="demo3" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <!-- tombol beli -->
          <div class="text-right"><br>
            <button type="submit" class="btn btn-info ">Cari Tiket</button>
          </div>
        <!-- tombol beli end --> 
      </form>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

$("#pilih").change(function() {
if(this.checked) {
   $('#pulang').removeAttr('disabled',true); // Element(s) are now enabled.
}else{
   $('#pulang').attr('disabled',true); // Element(s) are now enabled.
}
});

</script>