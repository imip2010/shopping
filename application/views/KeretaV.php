
<!--==================================================== BANNER =============================================================-->

<div class="col-md-12">
    <div class="card text-white">
        <img class="card-img" src="<?php echo base_url()?>assets/images/kereta.jpg" alt="Card image">
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
            <div class="col-md-3">
              <label class="m-t-20">Stasiun Awal</label><br>
              <select class="select2 form-control custom-select" >
                <option>Stasiun Awal</option>
                <optgroup label="Kota Bekasi (Semua Stasiun)">
                  <option value="AK">Bekasi - Bekasi (BKS)</option>
                </optgroup>
                <optgroup label="Kota Binjai (Semua Stasiun)">
                  <option value="AK">Binjai - Binjai (BIJ)</option>
                </optgroup>
                <optgroup label="Kota Blora (Semua Stasiun)">
                  <option value="CA">Blora Cepu (CU)</option>
                  <option value="NV">Blora Doplang (DPL)</option>
                  <option value="OR">Blora Randublatung (RBG)</option>
                </optgroup>
              </select>
            </div>

            <div class="col-md-3">
              <label class="m-t-20">Stasiun Tujuan</label><br>
              <select class="select2 form-control custom-select" >
                <option>Stasiun Tujuan</option>
                <optgroup label="Kota Banjar (Semua Stasiun)">
                  <option value="AK">Banjar - Banjar (BJR)</option>
                  <option value="HI">Banjar - Langen (LN)</option>
                </optgroup>
                <optgroup label="Kota Cianjur (Semua Stasiun)">
                  <option value="CA">Cianjur - Cianjur (CJ)</option>
                  <option value="NV">Cianjur - Cibeber (CBB)</option>
                  <option value="OR">Cianjur - Cilaku (CLK)</option>
                  <option value="WA">Cianjur - Lampengan  (LP)</option>
                </optgroup>
              </select>
            </div>

            <div class="col-md-2">
              <label class="m-t-20">Berangkat</label>
              <input type="text" class="form-control" placeholder="2017-06-04" id="mdate" data-dtp="dtp_eNhfO">
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