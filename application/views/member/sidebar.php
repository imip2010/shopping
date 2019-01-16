

    <!-- Column bagian kiri : mulai -->

    <div class="col-lg-2 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="myadmin-dd dd" id="nestable">
                    <div class="text-center">
                        <button type="button" class="btn waves-effect waves-light btn-outline-info"> Jual Barang </button>
                    </div><br>
                    <ul class="list-style-none el-info" >
                        <li class="el-item"> 
                            <a href="<?php echo base_url();?>pengaturan_profile" <?php echo ($this->uri->segment(1)=='pengaturan_profile')?'style="color: #4798e8;font-weight:bold;"':'';?>> Ringkasan Akun </a>
                        </li>
                        <li class="el-item">
                            <a href="<?php echo base_url()?>labelbarang"> Label Barang </a>
                        </li>
                        <li class="el-item">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne"> Daftar Barang <i class="ti-angle-down" style="padding: 55px;"></i></a>
                            <ul id="collapseOne" class="collapse show" data-parent="#accordion" style="margin-left: -20px;">
                                <li>Barang Dijual</li>
                                <li>Barang Tidak Dijual</li>
                                <li>Barang Draf</li>
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>

                        <li  class="el-item">
                            <a href="<?php echo base_url()?>labelbarang"> Teman </a> 
                        </li>
                      <li  class="el-item">
                          <a href="<?php echo base_url()?>labelbarang"> Barang Favorit </a> 
                      </li>
                      <li class="el-item">
                          <a href="<?php echo base_url()?>labelbarang"> Langganan </a>    
                      </li>
                      <li class="el-item">
                          <a href="<?php echo base_url()?>labelbarang"> Pembelian Rutin </a>   
                      </li>
                      
                      <div class="dropdown-divider"></div>

                      <li class="el-item">
                          <a href="<?php echo base_url()?>labelbarang"> Saldo </a>   
                      </li>
                      <li class="el-item">
                          <a href="<?php echo base_url()?>transaksi" <?php echo ($this->uri->segment(1)=='transaksi')?'style="color: #4798e8;font-weight:bold;"':'';?>> Transaksi </a>   
                      </li>
                      <li class="el-item">
                          <a href="<?php echo base_url()?>labelbarang"> Feedback </a>   
                      </li>
                      
                      <div class="dropdown-divider"></div>
                      
                      <li class="el-item">
                          <a href="<?php echo base_url()?>labelbarang"> Pesan </a>  
                      </li>
                      <li class="el-item">
                          <a href="<?php echo base_url()?>labelbarang"> Diskusi Barang </a>  
                      </li>
                      
                      <div class="dropdown-divider"></div>
                      
                      <li  class="el-item">
                          <a href="<?php echo base_url()?>labelbarang"> Kode Promo </a> 
                      </li>
                      <li  class="el-item">
                          <a href="<?php echo base_url()?>labelbarang"> Koperasi Widget </a> 
                      </li>
                      <li  class="el-item">
                          <a href="<?php echo base_url()?>pengaturan_profile"> Pengaturan </a>
                      </li>
                    </ul><br>
                  <div class="text-center">
                      <button type="button" class="btn waves-effect waves-light btn-outline-info"> Preview Lapak </button>
                  </div>
              </div>
          </div>
      </div>
    </div>

    <!-- Column bagian kiri : selasai -->