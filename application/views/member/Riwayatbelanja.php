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
                    <div class="d-flex no-block align-items-center ">
                        <div class="">
                            <img src="<?php echo base_url()?>assets/images/users/1.jpg" alt="user" class="rounded-circle" width="50">
                        </div>
                        <div class="m-l-10">
                            <h4 class="m-b-0"><?php echo $dataDiri['nama'];?></h4>
                            <p class=" m-b-0"><?php echo $dataDiri['email'];?></p>
                        </div>
                    </div><br>

                    <ul class="list-style-none el-info" >
                        <li class="el-item">
                            <a href="<?php echo base_url()?>labelbarang" > Akun Saya</a>
                        </li>
                        <div class="dropdown-divider"></div>

                        <li  class="el-item">
                            <a href="<?php echo base_url()?>labelbarang" style="color: #4798e8;" > Belanjaan Saya </a> 
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
                                            <td><h4 style="color: #4798e8;" class="text-right">Belum Bayar</h4></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10%"> <img src="<?php echo base_url()?>assets/images/img3.jpg" style="width: 100%"/></td>
                                            <td style="width: 75%">Nama Produk <p>Jumlah produk</p> </td>
                                            <td class="text-right">Harga Produk</td>
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
                                    <button type="button" class="btn waves-effect waves-light btn-outline-info" ><a href="<?php echo base_url()?>CobaC/detailrincian" > Tampilkan Rincian Barang </a></button>
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
                <div id="navpills-2" class="tab-pane">
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
                                            <td><h4 style="color: #4798e8;" class="text-right">Belum Dikirimkan</h4></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10%"> <img src="<?php echo base_url()?>assets/images/img3.jpg" style="width: 100%"/></td>
                                            <td style="width: 73%">Nama Produk <p>Jumlah produk</p> </td>
                                            <td class="text-right">Harga Produk</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><h4 class="text-right">Total Pesanan</h4></td>
                                            <td><h4 class="text-right">Rp 200.000.000 </h4></td>
                                        </tr>
                                    </tbody>
                                </table><br>
                                <div class="text-right" style="margin-right: 20px;">
                                    <button type="button" class="btn waves-effect waves-light btn-info"> Hubungi Penjual </button>
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
                <div id="navpills-3" class="tab-pane">
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
                                            <td><h4 style="color: #4798e8;" class="text-right">Belum Diterima</h4></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10%"> <img src="<?php echo base_url()?>assets/images/img3.jpg" style="width: 100%"/></td>
                                            <td style="width: 73%">Nama Produk <p>Jumlah produk</p> </td>
                                            <td class="text-right">Harga Produk</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><h4 class="text-right">Total Pesanan</h4></td>
                                            <td><h4 class="text-right">Rp 200.000.000 </h4></td>
                                        </tr>
                                    </tbody>
                                </table><br>
                                <div class="text-right" style="margin-right: 20px;">
                                    <button type="button" class="btn waves-effect waves-light btn-info"> Pesanan Diterima </button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-info"> Tampilkan Rincian Barang </button>
                                    <button class="btn waves-effect waves-light btn-outline-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainnya</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0)">Perpanjang Masa Garansi Toko</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Ajukan Pengembalian</a>
                                    </div>
                                </div>
                            </form><br><br>
                        </div>
                    </div>
                </div>
                <div id="navpills-4" class="tab-pane">
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
                                            <td><h4 style="color: #4798e8;" class="text-right">Dinilai</h4></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10%"> <img src="<?php echo base_url()?>assets/images/img3.jpg" style="width: 100%"/></td>
                                            <td style="width: 73%">Nama Produk <p>Jumlah produk</p> </td>
                                            <td class="text-right">Harga Produk</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><h4 class="text-right">Total Pesanan</h4></td>
                                            <td><h4 class="text-right">Rp 200.000.000 </h4></td>
                                        </tr>
                                    </tbody>
                                </table><br>
                                <div class="text-right" style="margin-right: 20px;">
                                    <button type="button" class="btn waves-effect waves-light btn-info"> Tampilkan Penilaian Toko </button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-info"> Tampilkan Rincian Barang </button>
                                </div>
                            </form><br><br>
                        </div>
                    </div>
                </div>
                <div id="navpills-5" class="tab-pane">
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
                                            <td><h4 style="color: #4798e8;" class="text-right">Batal</h4></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10%"> <img src="<?php echo base_url()?>assets/images/img3.jpg" style="width: 100%"/></td>
                                            <td style="width: 73%">Nama Produk <p>Jumlah produk</p> </td>
                                            <td class="text-right">Harga Produk</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><h4 class="text-right">Total Pesanan</h4></td>
                                            <td><h4 class="text-right">Rp 200.000.000 </h4></td>
                                        </tr>
                                    </tbody>
                                </table><br>
                                <div class="text-right" style="margin-right: 20px;">
                                    <button type="button" class="btn waves-effect waves-light btn-info"> Periksa Rincian </button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-info"> Beli Lagi </button>
                                </div>
                            </form><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column bagian kanan : selesai -->


</div>