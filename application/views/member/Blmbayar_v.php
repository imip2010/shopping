
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<br>

<div class="col-lg-12">
    <div class="row">

        <!-- ============================================================== -->
        <!-- BAGIAN kIRI -->
        <!-- ============================================================== -->
        <div class="col-lg-2 col-md-2">
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
        <!-- ============================================================== -->
        <!-- BAGIAN kIRI -->
        <!-- ============================================================== -->


        
        <!-- ============================================================== -->
        <!-- BAGIAN KANAN -->
        <!-- ============================================================== -->

        <div class="col=lg-10 col-md-10">
            <!-- ============================================================== -->
            <!-- BAGIAN ATAS -->
            <!-- ============================================================== -->
            <div class="card"><br>
                <h4 class="card-title"> <a href="<?php echo site_url()?>transaksi" style="padding: 20px;">Kembali</a></h4>   
                <div class="container">
                    <div class="row">
                        <div class="process">
                            <div class="process-row nav nav-tabs">
                                <div class="process-step">
                                    <button type="button" class="btn btn-info btn-bulat" ><i class="fa fa-file-text-o fa-3x"></i></button>
                                    <p>Pesanan Dibuat</p>
                                </div>
                                <div class="process-step">
                                    <button type="button" class="btn btn-info btn-bulat" ><i class="fa fa-money fa-3x"></i></button>
                                    <p>Belum Bayar</p>
                                </div>
                                <div class="process-step">
                                    <button type="button" class="btn btn-default btn-bulat" style="background-color: #96989a;" ><i class="fa fa-truck fa-3x"></i></button>
                                    <p>Belum Dikirimkan</p>
                                </div>
                                <div class="process-step">
                                    <button type="button" class="btn btn-default btn-bulat" style="background-color: #96989a;"  ><i class="fa fa-download fa-3x"></i></button>
                                    <p>Belum Diterima</p>
                                </div>
                                <div class="process-step">
                                    <button type="button" class="btn btn-default btn-bulat" style="background-color: #96989a;"  ><i class="fa fa-star-o fa-3x"></i></button>
                                    <p>Belum Dinilai</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br><hr>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-9">
                            <p style="margin-left: 20px;">Mohon melakukan pembayaran sebelum 10-01-2019 melalui Bank BNI<br>
                            (Dicek Manual) Bila tidak, pesanan ini akan dibatalkan secara otomatis.</p>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn waves-effect waves-light btn-info" style="width: 83%"> Transfer Sekarang </button><br>
                            <button type="button" class="btn waves-effect waves-light btn-outline-info" style="margin-top: 10px; width: 83%"> Batalkan Pesanan </button><br>
                            <button type="button" class="btn waves-effect waves-light btn-outline-info" style="margin-top: 10px; margin-bottom: 10px;"> Ubah Metode Pembayaran </button><br>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- BAGIAN ATAS -->
            <!-- ============================================================== -->



            <!-- ============================================================== -->
            <!-- BAGIAN BAWAH -->
            <!-- ============================================================== -->
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
                                <td  class="text-right"><h4 style="color: #4798e8; margin-left: -5px;">Belum Bayar</h4></td>
                            </tr>
                            <tr>
                                <td style="width: 12%"> <img src="<?php echo base_url()?>assets/images/img3.jpg" style="width: 100%"/></td>
                                <td style="width: 70%"><p>Nama Produk</p><p>Jumlah Produk</p> </td>
                                <td class="text-right">Rp 10.000 </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-right">Pengiriman - JNE REG</td>
                                <td class="text-right">Rp 10.000</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-right">Total Pesanan</td>
                                <td class="text-right"><h4>Rp 10.000<h4></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-right">Kode Unik</td>
                                <td class="text-right">- Rp 1.000</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-right">Jumlah Harus Dibayar</td>
                                <td class="text-right"><h4>Rp 9.000<h4></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-right">Metode Pembayaran</td>
                                <td class="text-right">Bank BNI (dicek manual)</td>
                            </tr>
                        </tbody>
                    </table>
                </form><br><br>
            </div>
            <!-- ============================================================== -->
            <!-- BAGIAN BAWAH -->
            <!-- ============================================================== -->

        </div>
        <!-- ============================================================== -->
        <!-- BAGIAN KANAN -->
        <!-- ============================================================== -->

    </div>
</div>
