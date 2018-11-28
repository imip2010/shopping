<div class="card">
    <div class="card-body">
        <!-- Home Banner 1 End -->
        <!-- Main Content Area -->
        <div class="container">
            <!-- Main Container -->
                <form action="<?php echo site_url() ?>pembayaran" method="GET">
                    <div class="col-xs-12 col-md-12 col-sm-12 " >
                        <h4><span class="heading-color"> Ayo isi pulsamu di sini</span></h4>
                        <div class="control-group">
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
                        <label>Pilih Nominal</label><br>
                        <!-- pulsa-->
                        <div>
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
                                    <label class="control-label" for="inputIcon">Harga Rp<span id="duit"> 1000 &nbsp &nbsp</span></label>
                                    <button type="submit" class="btn btn-info ">Beli Pulsa</button>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <!-- tombol beli end -->
                </form>
        </div>
    </div>
</div>