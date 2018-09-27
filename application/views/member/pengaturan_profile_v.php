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
                <li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Akun</a> </li>
                <li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Alamat</a> </li>
                <li class="nav-item"> <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">Toko</a> </li>
                <li class=" nav-item"> <a href="#navpills-4" class="nav-link" data-toggle="tab" aria-expanded="false">Pengiriman</a> </li>
                <li class="nav-item"> <a href="#navpills-5" class="nav-link" data-toggle="tab" aria-expanded="false">Rekening Bank</a> </li>
                <li class="nav-item"> <a href="#navpills-6" class="nav-link" data-toggle="tab" aria-expanded="true">Pengaturan Pembayaran</a> </li>
                <li class=" nav-item"> <a href="#navpills-7" class="nav-link" data-toggle="tab" aria-expanded="false">Notifikasi</a> </li>
                <li class="nav-item"> <a href="#navpills-8" class="nav-link" data-toggle="tab" aria-expanded="false">Forum</a> </li>
                <li class="nav-item"> <a href="#navpills-9" class="nav-link" data-toggle="tab" aria-expanded="true">Lainnya</a> </li>
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
                                        <td class="text-right">
                                            <button class="btn waves-effect waves-light btn-info" id="edit"> Edit </button>
                                            <span> &nbsp;</span>
                                            <button type="submit" name="cancel" id="cancel" class="btn waves-effect waves-light btn-info" id="save"> Cancel </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Foto Profil</td>
                                        <td> <img src="<?php echo base_url()?>assets/images/img3.jpg" style="width: 20%"/> </td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td> 
                                            <input type="text" name="username" id="username" class="form-control is-valid" value="<?php echo $detail_member->username;?>" style="display: none;" ></input>
                                            <div id="username2"><?php echo $detail_member->username;?></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>
                                            <input type="text" name="memberName" id="memberName" class="form-control is-valid" value="<?php echo $detail_member->memberName;?>" style="display: none;">
                                            <div id="memberName2"><?php echo $detail_member->memberName;?></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir</td>
                                        <td>
                                            <input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control is-valid" value="<?php echo $detail_member->tmp_lahir;?>" style="display: none;">
                                            <div id="tmp_lahir2">
                                                <?php
                                                if($detail_member->tmp_lahir==""){
                                                    echo "-";
                                                }else{
                                                    echo $detail_member->tmp_lahir;
                                                }
                                                ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>
                                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control is-valid" value="<?php echo $detail_member->tgl_lahir;?>" style="display: none;">
                                            <div id="tgl_lahir2">
                                                <?php
                                                if($detail_member->tgl_lahir == "0000-00-00"){
                                                    echo "-";
                                                }else{
                                                    echo $detail_member->tgl_lahir;
                                                } 
                                                ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin </td>
                                        <td>
                                            <select name="gender" id="gender" class="form-control is-valid" style="display: none;">
                                                <?php
                                                if($detail_member->gender == 1){
                                                    echo "<option selected value='1'>Laki-laki</option>
                                                    <option value='2'>Perempuan</option>
                                                    <option value='3'>Lainnya</option>";
                                                }elseif ($detail_member->gender == 2) {
                                                 echo "<option value='1'>Laki-laki</option>
                                                 <option selected value='2'>Perempuan</option>
                                                 <option value='3'>Lainnya</option>";
                                             }elseif ($detail_member->gender == 3){
                                                 echo "<option value='1'>Laki-laki</option>
                                                 <option value='2'>Perempuan</option>
                                                 <option selected value='3'>Lainnya</option>";
                                             }else{
                                                echo "<option>----Pilih Jenis Kelamin----</option>
                                                <option value='1'>Laki-laki</option>
                                                <option value='2'>Perempuan</option>
                                                <option value='3'>Lainnya</option>";
                                            }
                                            ?>

                                        </select>
                                        <div id="gender2">
                                            <?php
                                            if($detail_member->gender == 1){
                                                echo "Laki-laki";
                                            }elseif ($detail_member->gender == 2) {
                                                echo "Perempuan";
                                            }elseif($detail_member->gender == 3){
                                                echo "Lainnya";
                                            }else{
                                                echo "-";
                                            }
                                            
                                            ?>

                                        </div>
                                    </td>
                                </tr>
                                <tr id="kolom_save" style="display: none;">
                                 <td>

                                 </td>
                                 <td>
                                    <button type="submit" name="submit" class="btn waves-effect waves-light btn-info" id="save"> Save </button>
                                </td>
                            </tr>
                            <tr>
                                <td ><h4>E-mail dan Telepon</h4></td>
                                <td class="text-right">
                                    <button class="btn waves-effect waves-light btn-info" id="edit2"> Edit </button>
                                    <span> &nbsp;</span>
                                    <button type="submit" name="cancel" id="cancel2" class="btn waves-effect waves-light btn-info" id="save"> Cancel 
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>E-mail</td>
                                <td>
                                    <input type="text" name="email" id="email" class="form-control is-valid" value="<?php echo $detail_member->email;?>" style="display: none;" ></input>
                                    <div id="email2"><?php echo $detail_member->email;?> <i class="mdi mdi-check font-20" style="color: #4798e8;"> <small>terverifikasi</small></i></div>
                                </td>
                            </tr>
                            <tr>
                                <td>Telepon</td>
                                <td>
                                    <input type="text" name="phone" id="phone" class="form-control is-valid" value="<?php echo $detail_member->phone;?>" style="display: none;" ></input>
                                    <div id="phone2"><?php echo $detail_member->phone;?></div>
                                </td>
                            </tr>
                            <tr id="kolom_save2" style="display: none;">
                             <td>

                             </td>
                             <td>
                                <button type="submit" name="submit" class="btn waves-effect waves-light btn-info" id="save2"> Save </button>
                            </td>
                            <tr>
                                <td><h4>Password</h4></td>
                                <td class="text-right"><button type="button" class="btn btn-info"> Edit </button></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td> Perubahan terakhir 04 Desember 2017 </td>
                            </tr>
                            <!-- <tr>
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
                            </tr> -->
                        </tbody>
                    </table><br><br>
                </div>
            </div>
        </div>
        <div id="navpills-2" class="tab-pane">
            alamat
        </div>
        <div id="navpills-3" class="tab-pane">
            Toko
        </div>
        <div id="navpills-4" class="tab-pane">
            Pegiriman
        </div>
        <div id="navpills-5" class="tab-pane">
            Rekening Bank
        </div>
        <div id="navpills-6" class="tab-pane">
            Pengaturan Pembayaran
        </div>
        <div id="navpills-7" class="tab-pane">
            Notifikasi
        </div>
        <div id="navpills-8" class="tab-pane">
            Forum
        </div>
        <div id="navpills-9" class="tab-pane">
            Lainnya
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
<script src="<?php echo base_url()?>assets/libs/jquery/dist/jquery.min.js"></script>

<script language="JavaScript">
    $("#edit").click(function(){
        $("#username2").hide();
        $("#memberName2").hide();
        $("#tmp_lahir2").hide();
        $("#tgl_lahir2").hide();
        $("#gender2").hide();

        $("#username").show();
        $("#memberName").show();
        $("#tmp_lahir").show();
        $("#tgl_lahir").show();
        $("#gender").show();
        $("#kolom_save").show();

        $("#username").focus();
    });

    $("#edit2").click(function(){
        $("#email2").hide();
        $("#phone2").hide();

        $("#email").show();
        $("#phone").show();
        $("#kolom_save2").show();

        $("#email").focus();
    });

    $("#cancel").click(function(){
        $("#username2").show();
        $("#memberName2").show();
        $("#tmp_lahir2").show();
        $("#tgl_lahir2").show();
        $("#gender2").show();

        $("#username").hide();
        $("#memberName").hide();
        $("#tmp_lahir").hide();
        $("#tgl_lahir").hide();
        $("#gender").hide();
        $("#kolom_save").hide();
    });

    $("#cancel2").click(function(){
        $("#email2").show();
        $("#phone2").show();

        $("#email").hide();
        $("#phone").hide();
        $("#kolom_save2").hide();

    });
</script>
