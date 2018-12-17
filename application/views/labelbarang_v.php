

<br>

<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">

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
                        <a href="#"> Ringkasan Akun </a>
                    </li>
                    <li class="el-item">
                        <a href="<?php echo base_url()?>labelbarang"  style="color: #4798e8;" > Label Barang </a>
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
                      <a href="<?php echo base_url()?>labelbarang"> Transaksi </a>   
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
                  <li  class="el-item"">
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

<!-- Column bagian kanan : mulai -->
<div class="col-lg-9 col-md-12">
  <h3 class="card-title">Pengaturan Label Barang</h3><br>
  <p >Label digunakan untuk mengelompokkan barang agar barang lebih mudah ditemukan oleh pembeli. Atur label di halaman ini dan <a href="" style="color: #4798e8;"> Pasang/Lepas label pada barang </a> di toko saya.</p>
  <div class="row">
      <div class="col-lg-11 col-md-12">
          <div class="card border-info">
              <div class="card-header bg-info">
                  <h4 class="m-b-0 text-white">Buat Label Baru</h4>
              </div>
              <div class="card-body">
              <form class="form">
                  <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label">Nama Label</label>
                      <div class="col-10">
                          <input class="form-control" type="text" maxlength="30">
                          <p>Maksimum 30 karakter</p>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="example-search-input" class="col-2 col-form-label">Deskripsi</label>
                      <div class="col-10">
                          <textarea class="form-control" maxlength="200"></textarea>
                          <p class="text-right">200 karakter</p>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="example-text-input" class="col-2 col-form-label"></label>
                      <div class="col-10">
                      <button type="submit" class="btn btn-lg btn-info ">Simpan</button>
                      </div>
                  </div>
                  
              </form>
              </div>
          </div>
      </div>
  </div>
      </div>
  </div>
</div>
<!-- Column bagian kanan : selesai -->


</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->

