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
                <ol class="dd-list">
                    <li class="dd-item" >
                        <a href="#"> Ringkasan Akun </a>
                    </li><br>
                    <li class="dd-item">
                        <a href="<?php echo base_url()?>labelbarang" > Label Barang </a>   
                    </li><br>
                    <li class="dd-item" >
                        <a href="#"> Daftar Barang </a>
                        <ol class="dd-list"><br>
                            <li class="dd-item" >
                                <a href="#"> Barang Dijual </a>
                            </li><br>
                            <li class="dd-item" >
                                <a href="#"> Barang Tidak Dijual </a> 
                            </li><br>
                            <li class="dd-item" >
                                <a href="#"> Barang Draf  </a>    
                            </li><br>
                        </ol>
                    </li>
                    
                    <div class="dropdown-divider"></div>

                    <li class="dd-item" data-id="1">
                        <a href="<?php echo base_url()?>labelbarang"> Teman </a> 
                    </li><br>
                    <li class="dd-item" data-id="1">
                        <a href="<?php echo base_url()?>labelbarang"> Barang Favorit </a> 
                    </li><br>
                    <li class="dd-item" data-id="1">
                        <a href="<?php echo base_url()?>labelbarang"> Langganan </a>    
                    </li><br>
                    <li class="dd-item" data-id="1">
                        <a href="<?php echo base_url()?>labelbarang"> Pembelian Rutin </a>   
                    </li>
                    
                    <div class="dropdown-divider"></div>

                    <li class="dd-item" data-id="1">
                        <a href="<?php echo base_url()?>labelbarang"> Saldo </a>   
                    </li><br>
                    <li class="dd-item" data-id="1">
                        <a href="<?php echo base_url()?>labelbarang"> Transaksi </a>   
                    </li><br>
                    <li class="dd-item" data-id="1">
                        <a href="<?php echo base_url()?>labelbarang"> Feedback </a>   
                    </li>
                    
                    <div class="dropdown-divider"></div>
                    
                    <li class="dd-item" data-id="1">
                        <a href="<?php echo base_url()?>labelbarang"> Pesan </a>  
                    </li><br>
                    <li class="dd-item" data-id="1">
                        <a href="<?php echo base_url()?>labelbarang"> Diskusi Barang </a>  
                    </li>
                    
                    <div class="dropdown-divider"></div>
                    
                    <li class="dd-item" data-id="1">
                        <a href="<?php echo base_url()?>labelbarang"> Kode Promo </a> 
                    </li><br>
                    <li class="dd-item" data-id="1">
                        <a href="<?php echo base_url()?>labelbarang"> Koperasi Widget </a> 
                    </li><br>
                    <li class="dd-item" data-id="1">
                        <a href="<?php echo base_url()?>pengaturan_profile" style="color: #4798e8;"> Pengaturan </a>
                    </li>
                </ol><br>
                <div class="text-center">
                    <button type="button" class="btn waves-effect waves-light btn-outline-info"> Preview Lapak </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Column bagian kiri : selasai -->

<!-- Column bagian kanan : mulai -->
<div class="col-lg-10 col-md-12">
    <h3 class="card-title">Pengaturan </h3><br>
    
    <div class="col-lg-12 col-md-12 col-sm-12">
    <ul class="nav nav-pills m-t-30 m-b-30">
        <li class=" nav-item"> <a href="<?php echo base_url()?>pengaturan_profile" class="nav-link active" data-toggle="link" aria-expanded="false">Akun</a> </li>
        <li class="nav-item"> <a href="<?php echo base_url()?>pengaturan_alamat" class="nav-link" data-toggle="link" aria-expanded="false">Alamat</a> </li>
        <li class="nav-item"> <a href="<?php echo base_url()?>pengaturan_toko" class="nav-link" data-toggle="link" aria-expanded="true">Toko</a> </li>
        <li class=" nav-item"> <a href="<?php echo base_url()?>pengaturan_pengiriman" class="nav-link" data-toggle="link" aria-expanded="false">Pengiriman</a> </li>
        <li class="nav-item"> <a href="<?php echo base_url()?>pengaturan_rekening" class="nav-link" data-toggle="link" aria-expanded="false">Rekening Bank</a> </li>
        <li class="nav-item"> <a href="<?php echo base_url()?>pengaturan_pembayaran" class="nav-link" data-toggle="link" aria-expanded="true">Pengaturan Pembayaran</a> </li>
        <li class=" nav-item"> <a href="<?php echo base_url()?>pengaturan_notifikasi" class="nav-link" data-toggle="link" aria-expanded="false">Notifikasi</a> </li>
        <li class="nav-item"> <a href="<?php echo base_url()?>pengaturan_forum" class="nav-link" data-toggle="link" aria-expanded="false">Forum</a> </li>
        <li class="nav-item"> <a href="<?php echo base_url()?>pengaturan_sosmed" class="nav-link" data-toggle="link" aria-expanded="true">Lainnya</a> </li>
    </ul>

    
    <h5 class="card-title">Profil Akun </h5>
    <p> Data Anda selalu rahasia dan tidak akan kami beritahukan kepada pihak ketiga.</p>

    <div class="tab-content br-n pn">
        <div id="navpills-1" class="tab-pane active">
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td width="230"><h4>Informasi Umum</h4></td>
                                <td class="text-right"><a class="btn btn-info" href="<?php echo base_url()?>pengaturan_profile/edit" role="button"> Edit </a></td>
                            </tr>
                            <tr>
                                <td>Foto Profil</td>
                                <td> <img src="<?php echo base_url()?>assets/images/img3.jpg" style="width: 20%"/> </td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td> Miftahul2010 </td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td> Miftahul Jannah </td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td> - </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin </td>
                                <td> Perempuan </td>
                            </tr>
                            <tr>
                                <td ><h4>E-mail dan Telepon</h4></td>
                                <td class="text-right"><button type="button" class="btn btn-info"> Edit </button></td>
                            </tr>
                            <tr>
                                <td>E-mail</td>
                                <td> MiftahulJannah483@gmail.com <i class="mdi mdi-check font-20" style="color: #4798e8;"></i></td>
                            </tr>
                            <tr>
                                <td>Telepon</td>
                                <td> 6281269305494 <i class="mdi mdi-check font-20" style="color: #4798e8;"></i></td>
                            </tr>
                            <tr>
                                <td><h4>Password</h4></td>
                                <td class="text-right"><button type="button" class="btn btn-info"> Edit </button></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td> Perubahan terakhir 04 Desember 2017 </td>
                            </tr>
                            <tr>
                                <td><h4>Otentikasi 2 langkah</h4></td>
                                <td class="text-right"><button type="button" class="btn btn-info"> Non-aktifkan </button></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td style="color: #4798e8;"> Aktif </td>
                            </tr>
                            <tr>
                                <td><h4>Login Alerts</h4></td>
                                <td class="text-right"><button type="button" class="btn btn-info">  Non-aktifkan </button></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td style="color: #4798e8;"> Aktif </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <ul class="list-group list-group-full">
                                        <li class="list-group-item active" style="font-size: 12px"> Bila fitur ini dinyalakan, Anda akan mendapatkan email pemberitahuan setiap kali akun Anda melakukan login dari device yang berbeda.</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table><br><br>
                </div>
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

