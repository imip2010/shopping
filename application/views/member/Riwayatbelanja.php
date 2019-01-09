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
        <h3 class="card-title">Riwayat Belanjaan </h3><br>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <ul class="nav nav-pills m-t-30 m-b-30">
                <li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Belum Bayar</a> </li>
                <li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Belum Dikirimkan</a> </li>
                <li class="nav-item"> <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">Belum Diterima</a> </li>
                <li class=" nav-item"> <a href="#navpills-4" class="nav-link" data-toggle="tab" aria-expanded="false">Pembelian Selesai</a> </li>
                <li class="nav-item"> <a href="#navpills-5" class="nav-link" data-toggle="tab" aria-expanded="false">Batal</a> </li>
            </ul>


                

            <div class="tab-content br-n pn">
                <div id="navpills-1" class="tab-pane active">
                    <div class="row">
                        <div class="table-responsive">
                            <h5 class="card-title">Profil Akun </h5>
                            <p> Data Anda selalu rahasia dan tidak akan kami beritahukan kepada pihak ketiga.</p>
                            <form action=" " method="post">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td ><h4>Informasi Umum</h4></td>
                                            <td class="text-right">
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 30%"> <img src="<?php echo base_url()?>assets/images/img3.jpg" style="width: 50%"/></td>
                                            <td style="width: 50%">Nama Produk <p>Jumlah produk</p> </td>
                                            <td >Harga Produk</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><h4 class="text-right">Total Pesanan</h4></td>
                                            <td><h4>Rp 200.000.000 </h4></td>
                                        </tr>
                                    </tbody>
                                </table>
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