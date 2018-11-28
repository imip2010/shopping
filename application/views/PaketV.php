
<!--==================================================== BANNER =============================================================-->
<!--================================================ BANNER : END =========================================================-->
<div class="card">
    <div class="card-body">
        <div class="container">
            <!-- Main Container -->
            <form action="http://localhost/kuperasi/pembayaran.php" method="GET">
                <div class="col-xs-12 col-md-12 col-sm-12 " >
                    <h4><span class="heading-color"> Ayo isi paket datamu di sini</span></h4>
                    <div class="control-group">
                        <label class="control-label" for="inputIcon">Nomor Telepon</label>
                        <div class="controls">
                            <div class="input-prepend">
                                <input class="span4 nomor-input form-control" id="nomor" nama="nomor" type="text">
                                <span class="add-on"><span id="logoop" class="logo-operator" style="margin-top:-56px;"></span></span>
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
                                        <span class="pulsa-1"  ><h4> 300.000</h4></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

                <input id="tipe" name="tipe" type="hidden" value="paket">
                <input id="nomortelpon" name="nomortelpon" type="hidden">
                <!-- tombol beli -->
                <div class="col-xs-12 col-md-12 col-sm-12"> 
                    <div class="control-group pull-right">
                        <div class="controls">
                            <div class="input-prepend text-right">
                                <label class="control-label" for="inputIcon">Harga Rp<span id="duit"> 1000 &nbsp &nbsp</span></label>
                                <button type="submit" class="btn btn-info ">Beli Paket</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>