<!--============================================= BANNER ===========================================================-->


<div class="col-md-12">
    <div class="card text-white">
        <img class="card-img" src="<?php echo base_url()?>assets/images/pdam.jpg" alt="Card image">
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
        <form action="<?php echo site_url() ?>pembayaran" method="GET">
            <div class="col-xs-12 col-md-12 col-sm-12 " >
                <h4>Bayar tagihan Air PDAM kamu di sini.</h4>
                <div class="row">
                    <div class="col-md-6">
                        <label class="m-t-20">Area</label><br>
                        <select class="select2 form-control custom-select">
                            <option>Area</option>
                            <optgroup label="DKI Jakarta">
                                <option value="AK">PDAM AETRA</option>
                                <option value="HI">PDAM Aetra Jakarta</option>
                                <option value="HI">PDAM PALYJA</option>
                            </optgroup>
                            <optgroup label="Bali">
                                <option value="CA">PDAM Kab Badung</option>
                                <option value="NV">PDAM Kab Buleleng</option>
                                <option value="OR">PDAM Kab Klungkung</option>
                                <option value="WA">PDAM Kota Denpasar</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="col-md-6"><br>
                        <label class="control-label" for="nomor">Nomor Pelanggan</label>
                        <div class="controls">
                            <div class="input-prepend">
                                <input class="span4 nomor-input form-control" id="nomor" nama="nomor" type="text"><br>
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
                            <button visibility type="submit" class="btn btn-info ">Bayar Air PDAM</button>
                        </div>
                    </div>
                </div>
            </div>  
            <!-- tombol beli end -->
        </form>
    </div>
</div>

