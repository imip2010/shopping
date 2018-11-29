
    <!--================================================= HEADER ===================================================-->

<?php

  include "header.php"

?>


    <!--================================================= HEADER : END ===================================================-->


    <!--============================================= BANNER ===========================================================-->



        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <div class="item" style="background-image: url(<?php echo base_url() ?>assets/images/listrik.jpg);">
              <div class="container-fluid">
                <!-- /.caption -->
              </div>
              <!-- /.container-fluid -->
            </div>
            <!-- /.item -->
          </div>
          <!-- /.owl-carousel -->
        </div>




<!--================================================ BANNER : END =========================================================-->



  <section class="">
   
  <!-- Home Banner 1 End -->
  <!-- Main Content Area -->
  <div class="main-content-area clearfix">
    <!-- =-=-=-=-=-=-= Popular Categories =-=-=-=-=-=-= -->
    <section class="custom-padding gray">
      <div class="heading-panel">
            <div class="col-xs-12 col-md-12 col-sm-12 text-center">
              <!-- Main Title -->
              <h1><span class="heading-color"> Listrik </span></h1>
              <!-- Short Description -->
            </div>
          </div>

          <div class="container">
            <!-- Main Container -->
                <form action="http://localhost/kuperasi/pembayaran.php" method="GET">
                <div class="col-xs-12 col-md-12 col-sm-12 " >
                    
                    <h4><span class="heading-color">Penuhi kebutuhan listrik kamu di sini.</span></h4>
                    <div class="control-group">

                        <label class="radio">
                        <input type="radio" name="jenis_bayar" id="jenis_bayar" value="prabayar" checked>
                        Prabayar
                        </label>
                        <label class="radio">
                        <input type="radio" name="jenis_bayar" id="jenis_bayar" value="pascabayar">Pascabayar
                        </label>

                      <label class="control-label" for="inputIcon">Nomor Meter/ID Pelanggan</label>
                      <div class="controls">
                        <div class="input-prepend">
                          <input class="span4 nomor-input" id="nomor" nama="nomor" type="text">
                          <span class="add-on"><span id="logoop" class="logo-operator"></span></span>
                        </div>
                      </div>
                    </div>
                      </div>

                    <input id="tipe" name="tipe" type="hidden" value="listrik">
                    <input id="nomoridpelanggan" name="nomoridpelanggan" type="hidden">
                    <!-- tombol beli -->
                     <div class="col-xs-12 col-md-12 col-sm-12"> 
                    <div class="control-group pull-right">
                    
                    <div class="controls">
                      <div class="input-prepend">
                        <button type="submit" class="btn btn-primary ">Bayar Listrik</button>
                      </div>
                    </div>
                  </div>
                  </div>

                    <!-- tombol beli end --> 
                </div>


              </form>
      </div>
      <!-- Main Container End -->
    </section>


    <!--================================================= FOOTER ===================================================-->

<?php

  include "footer.php"

?>


    <!--================================================= FOOTER : END ===================================================-->