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
<div class="col-lg-9 col-md-12">
    <h3 class="card-title">Pengaturan </h3><br>
    
    <div class="col-lg-12 col-md-12 col-sm-12">
    <ul class="nav nav-pills m-t-30 m-b-30">
        <li class=" nav-item"> <a href="<?php echo base_url()?>pengaturan_profile" class="nav-link " data-toggle="link" aria-expanded="false">Akun</a> </li>
        <li class="nav-item"> <a href="<?php echo base_url()?>pengaturan_alamat " class="nav-link active" data-toggle="link" aria-expanded="false">Alamat</a> </li>
        <li class="nav-item"> <a href="<?php echo base_url()?>pengaturan_toko" class="nav-link" data-toggle="link" aria-expanded="true">Toko</a> </li>
        <li class=" nav-item"> <a href="<?php echo base_url()?>pengaturan_pengiriman" class="nav-link" data-toggle="link" aria-expanded="false">Pengiriman</a> </li>
        <li class="nav-item"> <a href="<?php echo base_url()?>pengaturan_rekening" class="nav-link" data-toggle="link" aria-expanded="false">Rekening Bank</a> </li>
        <li class="nav-item"> <a href="<?php echo base_url()?>pengaturan_pembayaran" class="nav-link" data-toggle="link" aria-expanded="true">Pengaturan Pembayaran</a> </li>
        <li class=" nav-item"> <a href="<?php echo base_url()?>pengaturan_notifikasi" class="nav-link" data-toggle="link" aria-expanded="false">Notifikasi</a> </li>
        <li class="nav-item"> <a href="<?php echo base_url()?>pengaturan_forum" class="nav-link" data-toggle="link" aria-expanded="false">Forum</a> </li>
        <li class="nav-item"> <a href="<?php echo base_url()?>pengaturan_sosmed" class="nav-link" data-toggle="link" aria-expanded="true">Lainnya</a> </li>
    </ul>

    
    

    <div class="tab-content br-n pn">
        <div id="navpills-1" class="tab-pane active">
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td width="390"><h4>Alamat</h4></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><i class="ti-bookmark-alt font-16"></i>&nbsp Kondisi</td>
                                <td> BARU </td>
                            </tr>
                            <tr>
                                <td><i class="ti-shopping-cart"></i>&nbsp Terjual</td>
                                <td> 0 </td>
                            </tr>
                            <tr>
                                <td><i class="ti-eye"></i>&nbsp Dilihat</td>
                                <td> 4 </td>
                            </tr>
                            <tr>
                                <td><i class="ti-heart"></i>&nbsp Difavoritkan</td>
                                <td> 1 </td>
                            </tr>
                            <tr>
                                <td><i class="ti-time"></i>&nbsp Diperbaharui </td>
                                <td> 2 hari lalu, pukul 06:21 </td>
                            </tr>
                            <tr>
                                <td width="390"><h5>Spesifikasi</h5></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td> Kaos </td>
                            </tr>
                            <tr>
                                <td>Berat</td>
                                <td> 25 gram </td>
                            </tr>
                            <tr>
                                <td>Merek</td>
                                <td> Lainnya </td>
                            </tr>
                            <tr>
                                <td>Size</td>
                                <td> XS, S, M, L, XL, XXL, Other Size </td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td> <p>Kaos Custom Kata Kata
                                        bahan Combed 20s
                                        sablon Poliflex
                                        S-XL : 75K
                                        2XL : 85K
                                        3XL : 95K
                                        4XL : 105K

                                        Tersedia Ukuran Anak :
                                        Size 0 -1: 60K
                                        Size 2-4 : 70K

                                        Perhatikan Sizechart yang tertera di flyer kami. kesalahan pemilihan ukuran diluar tanggung jawab kami.

                                        Warna Tersedia :
                                        Putih, Merah, Biru, Biru Navy, Marun, Pink, Kuning, Kuning Gading, Tosca, Abu2, Abu2 Misty, Ungu Dll
                                    </p> </td>
                            </tr>
                            <tr>
                                <td>Catatan</td>
                                <td> <p>Catatan Pelapak tetap tunduk terhadap Aturan penggunaan Koperasi.

                                        Kaos Custom
                                        Bahan Combed 20s & 30s

                                        Jenis Sablon :

                                        Sablon Rubber & Plastisol

                                        Sablon Flex, Flock & Beludru

                                        Print DTG (Direct To Garment)

                                        Catatan Pelapak terakhir kali diubah pada tanggal 10 Agustus 2018, pukul 12.01 WIB</p>
                                </td>
                            </tr>
                            <tr>
                            <tr>
                                <td></td>
                                <td class="text-right"> Anda Berminat ? &nbsp
                                    <button type="button" class="btn waves-effect waves-light btn-success">Beli Sekarang</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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

