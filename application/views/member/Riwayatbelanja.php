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
                        <div class="dropdown-divider"></div>

                        <li class="el-item">
                            <a href="<?php echo base_url()?>labelbarang"  style="color: #4798e8;" > Akun Saya</a>
                        </li>
                        <div class="dropdown-divider"></div>

                        <li  class="el-item">
                            <a href="<?php echo base_url()?>labelbarang"> Belanjaan Saya </a> 
                        </li>
                        <div class="dropdown-divider"></div>

                        <li  class="el-item">
                            <a href="<?php echo base_url()?>labelbarang"> Group Saya </a> 
                        </li>
                        <div class="dropdown-divider"></div>

                        <li class="el-item">
                            <a href="<?php echo base_url()?>labelbarang"> Notifikasi </a>    
                        </li>
                        <div class="dropdown-divider"></div>

                        <li class="el-item">
                            <a href="<?php echo base_url()?>labelbarang"> Voucer Saya </a>   
                        </li>
                        <div class="dropdown-divider"></div>
                    
                    </ul><br>
                </div>
            </div>
        </div>
    </div>

    <!-- Column bagian kiri : selasai -->

    <!-- Column bagian kanan : mulai -->
    <div class="col-lg-10 col-md-12">
        <h3 class="card-title">Riwayat Belanjaan </h3>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <ul class="nav nav-pills m-t-30 m-b-30">
                <li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Belum Bayar</a> </li>
                <li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Dikemas</a> </li>
                <li class="nav-item"> <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">Dikirim</a> </li>
                <li class=" nav-item"> <a href="#navpills-4" class="nav-link" data-toggle="tab" aria-expanded="false">Selesai</a> </li>
                <li class="nav-item"> <a href="#navpills-5" class="nav-link" data-toggle="tab" aria-expanded="false">Batal</a> </li>
            </ul>


                

            <div class="tab-content br-n pn">
                <div id="navpills-1" class="tab-pane active">
                    <div class="row">
                        <div class="table-responsive">
                            <form action=" " method="post">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><h5>Nama Toko</h5></td>
                                            <td class="text-left">
                                                <button type="button" class="btn waves-effect waves-light btn-info"><span class="btn-label"><i class="mdi mdi-message"></i></span> Chat </button>
                                                <button type="button" class="btn waves-effect waves-light btn-outline-info"> Kunjungi Toko </button>
                                            </td>
                                            <td><h4 style="color: #4798e8;">Belum Bayar</h4></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10%"> <img src="<?php echo base_url()?>assets/images/img3.jpg" style="width: 100%"/></td>
                                            <td style="width: 75%">Nama Produk <p>Jumlah produk</p> </td>
                                            <td >Harga Produk</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><h4 class="text-right">Total Pesanan</h4></td>
                                            <td><h4>Rp 200.000.000 </h4></td>
                                        </tr>
                                    </tbody>
                                </table><br>
                                <div class="text-right" style="margin-right: 20px;">
                                    <button type="button" class="btn waves-effect waves-light btn-info"> Transfer Sekarang </button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-info"> Tampilkan Rincian Barang </button>
                                    <button class="btn waves-effect waves-light btn-outline-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainnya</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0)">Batalkan Pesanan</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Ubah Metode Pembayaran</a>
                                    </div>
                                </div>
                            </form><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- Column bagian kanan : selesai -->


</div>