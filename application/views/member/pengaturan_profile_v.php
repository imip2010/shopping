<br>
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">

    <?php
        echo $sidebar;
    ?>

    <!-- Column bagian kanan : mulai -->
    <div class="col-lg-10 col-md-12">
        <h3 class="card-title">Pengaturan </h3><br>
        <?php
        // print_r($locationID);
        $data=$this->session->flashdata('sukses');
        if($data!=""){ 
            ?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                <h3 class="text-success"><i class="fa fa-check-circle"></i> Sukses!</h3> <?=$data;?>
            </div>
            <?php 
        } 
        ?>
        <?php 
        $data2=$this->session->flashdata('error');
        if($data2!=""){ 
            ?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                <h3 class="text-danger"><i class="fa fa-check-circle"></i> Gagal!</h3> <?=$data2;?>
            </div>
            <?php 
        } 
        ?>
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


            

            <div class="tab-content br-n pn">
                <div id="navpills-1" class="tab-pane active">
                    <div class="row">
                        <div class="table-responsive">
                            <h5 class="card-title">Profil Akun </h5>
                            <p> Data Anda selalu rahasia dan tidak akan kami beritahukan kepada pihak ketiga.</p>
                            <?php echo validation_errors(); ?>
                                <table class="table">
                                    <tbody>
                            <form action="<?php echo site_url('MemberC/update_member')?>" method="POST">
                                        <tr>
                                            <td width="230"><h4>Informasi Umum</h4></td>
                                            <td class="text-right">
                                                <button type="button" class="btn waves-effect waves-light btn-info" id="edit"> Edit </button>
                                                <span> &nbsp;</span>
                                                <button type="button" name="cancel" id="cancel" class="btn waves-effect waves-light btn-info" id="save" style="display: none;"> Cancel </button>
                                            </td>
                                            <input type="hidden" name="memberID" value="<?php echo $dataDiri['memberID']?>">
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
                                                <span class="text-danger" style="color: red;"><?php echo form_error('username'); ?></span> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td>
                                                <input type="text" name="memberName" id="memberName" class="form-control is-valid" value="<?php echo $detail_member->memberName;?>" style="display: none;">
                                                <div id="memberName2"><?php echo $detail_member->memberName;?></div>
                                                <span class="text-danger" style="color: red;"><?php echo form_error('memberName'); ?></span> 
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
                                                <span class="text-danger" style="color: red;"><?php echo form_error('tmp_lahir'); ?></span> 
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
                                                <span class="text-danger" style="color: red;"><?php echo form_error('tgl_lahir'); ?></span> 
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
                                        <span class="text-danger" style="color: red;"><?php echo form_error('gender'); ?></span> 
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
                                        <button type="button" class="btn waves-effect waves-light btn-info" id="edit2"> Edit </button>
                                        <span> &nbsp;</span>
                                        <button type="button" name="cancel" id="cancel2" class="btn waves-effect waves-light btn-info" id="save" style="display: none;"> Cancel 
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
                            </form>
                                    <tr>
                                        <td><h4>Password</h4></td>
                                        <td class="text-right">
                                            <button type="button" class="btn waves-effect waves-light btn-info" id="edit3"> Edit </button>
                                            <span> &nbsp;</span>
                                            <button type="button" name="cancel3" id="cancel3" class="btn waves-effect waves-light btn-info" id="save" style="display: none;"> Cancel 
                                            </button>
                                        </td>
                                    </tr>
                            <form action="<?php echo site_url('MemberC/update_member_password')?>" method="POST">
                              <input type="hidden" name="memberID" value="<?php echo $dataDiri['memberID']?>">
                                    <tr>
                                        <td>Password</td>
                                        <td>
                                            <input type="password" name="password" id="password" class="form-control is-valid" style="display: none;" ></input>
                                            <div id="password2">Diperbaharui beberapa waktu yang lalu</div>
                                        </td>
                                    </tr>
                                    <tr id="kolom_confirm"  style="display: none;" >
                                        <td>Konfirmasi password</td>
                                        <td >
                                            <input type="password" name="confirm_password" id="confirm_password" class="form-control is-valid"></input>
                                        </td>
                                    </tr>
                                    <tr id="kolom_save3" style="display: none;">
                                        <td>

                                        </td>
                                        <td>
                                            <button type="submit" name="submit" class="btn waves-effect waves-light btn-info" id="save3"> Save 
                                            </button>
                                        </td>
                                        <tr>
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
                </form>
                        </tbody>
                    </table><br><br>
            </div>
            
        </div>
    </div>
    <div id="navpills-2" class="tab-pane">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12"> 
                            <div class="col-md-12">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td width=><h4>Alamat</h4> <h6 class="card-subtitle">Alamat utama digunakan untuk menghitung estimasi biaya pengiriman saat pembeli berbelanja di toko kamu.</h6></td>
                                            <td class="text-right">
                                                <input type="button" name="tambah" class="btn btn-info" data-toggle="modal" data-target="#responsive-modal"  title="tambah alamat" value="Tambah">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--  -->
                        </div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th style="max-width: 20px; text-align: center;">No.</th>
                                        <th>Nama Penerima</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    // print_r($shipping_address);
                                    $i=0;
                                    foreach ($shipping_address as $alamat) {
                                        $i++;
                                        ?>
                                        <tr>
                                            <td style="max-width: 20px; text-align: center; vertical-align: center;"><?php echo $i;?></td>
                                            <td><?php echo "<p><b>".$alamat->memberName."</b><br>";?></td>
                                            <td>
                                                <?php 
                                                echo $alamat->locationName.", ";
                                                echo $alamat->nama_kabupaten_kota."<br>";
                                                echo $alamat->nama_propinsi.", ";
                                                echo $alamat->kode_pos."<br>";

                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($alamat->status_alamat == "1") {
                                                    ?>
                                                    <button title="alamat utama" class="btn btn-info btn-sm"><span class="ti-check"></span> Alamat Utama</button>
                                                    <?php
                                                }else{

                                                    ?>
                                                    <button title="delete" data-toggle="modal" data-target="#delete-modal-<?php echo $alamat->locationID?>" class="btn btn-danger btn-sm"><span class="ti-trash"></span>
                                                    </button>
                                                    <button title="sd_address" data-toggle="modal" data-target="#sd-modal-<?php echo $alamat->locationID?>" class="btn btn-secondary btn-sm"><span class="ti-save"></span> Set Utama
                                                    </button>
                                                    <?php
                                                }
                                                ?>
                                                <button title="edit" data-toggle="modal" data-target="#responsive-modal-<?php echo $alamat->locationID?>" class="btn btn-success btn-sm"><span class="ti-pencil-alt"></span>
                                                </button>
                                            </td>
                                        </tr>
                                        
                                        <div id="sd-modal-<?php echo $alamat->locationID?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <?php echo validation_errors(); ?>
                                                <form action="<?php echo site_url('set_default_address/').$alamat->locationID;?>" method="post">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title"><span class="ti-save" style="color: #1b9a85;"></span> Set Alamat Utama</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="hidden" name="locationID" value="<?php echo $alamat->locationID;?>">
                                                            <div class="form-group">
                                                                <label for="message-text" class="control-label" style="font-weight: normal;">Anda yakin akan menjadikan alamat <b><?php echo $alamat->locationName?></b> sebagai alamat utama ?</label>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">Batal</button>
                                                            <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div id="delete-modal-<?php echo $alamat->locationID?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <?php echo validation_errors(); ?>
                                                <form action="<?php echo site_url('hapus_alamat/').$alamat->locationID;?>" method="post">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title"><span class="ti-trash" style="color: #ef6e6e;"></span> Hapus Alamat</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="hidden" name="locationID" value="<?php echo $alamat->locationID;?>">
                                                            <div class="form-group">
                                                                <label for="message-text" class="control-label" style="font-weight: normal;">Anda yakin akan menghapus alamat <b><?php echo $alamat->locationName?></b> ?</label>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">Batal</button>
                                                            <input type="submit" name="submit" class="btn btn-danger" value="Hapus">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div id="responsive-modal-<?php echo $alamat->locationID?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <?php echo validation_errors(); ?>
                                                <form action="<?php echo site_url('ubah_alamat')?>" method="post">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Ubah Alamat</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="hidden" name="locationID" value="<?php echo $alamat->locationID;?>">
                                                            <div class="form-group">
                                                                <label for="message-text" class="control-label">Nama Penerima</label>
                                                                <input type="text" class="form-control" id="nama_penerima-<?php echo $alamat->locationID?>" name="nama_penerima" required value="<?php echo $alamat->memberName;?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="control-label">No Handphone</label>
                                                                <input type="text" class="form-control" id="no_hp-<?php echo $alamat->locationID?>" name="no_hp" required value="<?php echo $alamat->phone;?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="control-label">Alamat</label>
                                                                <textarea type="text" class="form-control" id="locationName-<?php echo $alamat->locationID?>" name="locationName" required><?php echo $alamat->locationName;?></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="control-label">Propinsi</label>
                                                                <select class="form-control" id="propinsi-<?php echo $alamat->locationID?>" name="propinsi" required>
                                                                    <option>-----pilih provinsi-----</option>
                                                                    <?php 
                                                                    foreach ($provinsi as $prov) {
                                                                        if($alamat->id_propinsi == $prov['id_propinsi']){
                                                                            ?>
                                                                            <option selected value="<?php echo $prov['id_propinsi']?>"><?php echo $prov['nama_propinsi'];?></option>
                                                                            <?php
                                                                        }else{
                                                                            ?>
                                                                            <option value="<?php echo $prov['id_propinsi']?>"><?php echo $prov['nama_propinsi'];?></option>
                                                                            <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="control-label">Kota</label>
                                                                <select class="form-control" id="kota-<?php echo $alamat->locationID?>" name="kota" required>
                                                                    <option>-----pilih kota-----</option>
                                                                    <option selected value="<?php echo $alamat->id_kabupaten_kota?>"><?php echo $alamat->nama_kabupaten_kota?></option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="control-label">Kode Pos</label>
                                                                <input type="number" id="kodepos-<?php echo $alamat->locationID?>" name="kodepos" class="form-control" value="<?php echo $alamat->kode_pos?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-warning waves-effect" data-dismiss="modal">Batal</button>
                                                            <input type="submit" name="submit" class="btn btn-info" value="Simpan">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <script src="<?php echo base_url()?>assets/libs/jquery/dist/jquery.min.js"></script>
                                        <script type="text/javascript">
                                            $(document).ready(function(){
                                                // City change
                                                $('#propinsi-<?php echo $alamat->locationID?>').change(function(){
                                                    var propinsi = $(this).val(); //ambil value dr kode_unit
                                                    // window.alert(unit);

                                                    // AJAX request
                                                    $.ajax({
                                                        url:'<?=base_url()?>MemberC/get_kabupaten_kota',
                                                        method: 'post',
                                                        data: {id_propinsi: propinsi}, // data post ke controller 
                                                        dataType: 'json',
                                                        success: function(response){
                                                            // Remove options
                                                            $('#kota-<?php echo $alamat->locationID?>').find('option').not(':first').remove();

                                                            // Add options
                                                            $.each(response,function(daftar,data){
                                                                $('#kota-<?php echo $alamat->locationID?>').append('<option value="'+data['id_kabupaten_kota']+'">'+data['nama_kabupaten_kota']+'</option>');
                                                            });
                                                        }
                                                    });
                                                });

                                                $('#kota-<?php echo $alamat->locationID?>').change(function(){
                                                    var kota = $(this).val(); //ambil value dr kode_unit
                                                    // window.alert(unit);

                                                    // AJAX request
                                                    $.ajax({
                                                        url:'<?=base_url()?>MemberC/get_kecamatan',
                                                        method: 'post',
                                                        data: {id_kabupaten_kota: kota}, // data post ke controller 
                                                        dataType: 'json',
                                                        success: function(response){
                                                            // Remove options
                                                            $('#kecamatan-<?php echo $alamat->locationID?>').find('option').not(':first').remove();

                                                            // Add options
                                                            $.each(response,function(daftar,data){
                                                                $('#kecamatan-<?php echo $alamat->locationID?>').append('<option value="'+data['id_kecamatan']+'">'+data['nama_kecamatan']+'</option>');
                                                            });
                                                        }
                                                    });
                                                });

                                                $('#kecamatan-<?php echo $alamat->locationID?>').change(function(){
                                                    var kecamatan = $(this).val(); //ambil value dr kode_unit
                                                    // window.alert(unit);

                                                    // AJAX request
                                                    $.ajax({
                                                        url:'<?=base_url()?>MemberC/get_kelurahan',
                                                        method: 'post',
                                                        data: {id_kecamatan : kecamatan}, // data post ke controller 
                                                        dataType: 'json',
                                                        success: function(response){
                                                            // Remove options
                                                            $('#kelurahan-<?php echo $alamat->locationID?>').find('option').not(':first').remove();

                                                            // Add options
                                                            $.each(response,function(daftar,data){
                                                                $('#kelurahan-<?php echo $alamat->locationID?>').append('<option value="'+data['id_kelurahan']+'">'+data['nama_kelurahan']+'</option>');
                                                            });
                                                        }
                                                    });
                                                });
                                            });
                                        </script>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="navpills-3" class="tab-pane">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12"> 
                            <div class="col-md-12">
                                <table class="table">
                                    <tbody>
                                        <form action="<?php echo site_url('MemberC/update_shop')?>" method="POST">
                                            <tr>
                                                <td width=><h4>Informasi Toko</h4></td>
                                                <td class="text-right">
                                                    <!-- <input type="button" name="edit" class="btn btn-info" data-toggle="modal" data-target="#"  title="edit toko" value="Edit"> -->
                                                    <button type="button" class="btn waves-effect waves-light btn-info" id="edit4"> Edit </button>
                                                    <span> &nbsp;</span>
                                                    <button type="button" name="cancel4" id="cancel4" class="btn waves-effect waves-light btn-secondary" style="display: none;"> Cancel </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align: middle;">Foto Header Toko</td>
                                                <td > <img src="<?php echo base_url()?>assets/images/hotel.jpg" style="width: 600px;"/> </td>
                                            </tr>
                                            <tr>
                                                <td>Deskripsi Toko</td>
                                                <td> 
                                                    <textarea name="description" id="description"  class="form-control is-valid" style="display: none;" rows="4"><?php echo $detail_shop->shop_description;?></textarea>
                                                    <div id="description2"><?php echo (!empty($detail_shop->shop_description))?$detail_shop->shop_description:'Deskripsi toko belum diatur'; $detail_shop->shop_description;?></div>
                                                    <span class="text-danger" style="color: red;"><?php echo form_error('description'); ?></span> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Batas Jam Pengiriman Barang</td>
                                                <td>
                                                    <input type="text" name="service_time" id="service_time"  class="form-control is-valid" value="<?php echo $detail_shop->shop_service_time;?>" style="display: none;">
                                                    <div id="service_time2"><?php echo (!empty($detail_shop->shop_service_time))?$detail_shop->shop_service_time:'Sewaktu terakhir pemesanan belum diatur'; $detail_shop->shop_service_time;?></div>
                                                    <span class="text-danger" style="color: red;"><?php echo form_error('service_time'); ?></span> 
                                                </td>
                                            </tr>
                                            <tr id="kolom_save4" style="display: none;">
                                                <td></td>
                                                <td>
                                                    <button type="submit" name="submit" class="btn waves-effect waves-light btn-success" id="save4"> Save </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h4>Lokasi Toko</h4>
                                                    <textarea name="shop_address" id="shop_address" class="form-control is-valid" style="display: none;" rows="4"><?php echo $detail_shop->shop_address;?></textarea>
                                                    <p id="shop_address2"><?php echo (!empty($detail_shop->shop_address))?$detail_shop->shop_address."<br>".$detail_shop->nama_kabupaten_kota."<br>".$detail_shop->nama_propinsi."<br>".$detail_shop->kode_pos:'Kamu dapat menambahkan lokasi fisik toko kamu di sini'; $detail_shop->shop_address;?></p>
                                                    <span class="text-danger" style="color: red;"><?php echo form_error('shop_address'); ?></span> 
                                                </td>
                                                <td class="text-right">
                                                    <input type="button" name="edit5" id="edit5" class="btn btn-info" value="Edit">
                                                    <span> &nbsp;</span>
                                                    <button type="button" name="cancel5" id="cancel5" class="btn waves-effect waves-light btn-secondary" style="display: none;"> Cancel </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nomor Kontak Toko</td>
                                                <td> 
                                                    <input type="text" name="shop_phone" id="shop_phone" class="form-control is-valid" value="<?php echo $detail_shop->shop_phone;?>" style="display: none;" >
                                                    <div id="shop_phone2"><?php echo (!empty($detail_shop->shop_phone))?$detail_shop->shop_phone:'nomor kontak toko belum diatur'; $detail_shop->shop_phone;?></div>
                                                    <span class="text-danger" style="color: red;"><?php echo form_error('shop_phone'); ?></span> 
                                                </td>
                                            </tr>
                                            <tr id="kolom_save5" style="display: none;">
                                                <td></td>
                                                <td>
                                                    <button type="submit" name="submit" class="btn waves-effect waves-light btn-success" id="save5"> Save </button>
                                                </td>
                                            </tr>
                                        </form>
                                        <tr>
                                            <td width=><h4>Catatan Toko</h4><p>(REFERENSI BUKALAPAK) Diperuntukkan bagi pemilik toko yang ingin memberikan catatan tambahan.</p></td>
                                            <td class="text-right">
                                                <input type="button" name="edit" class="btn btn-info" data-toggle="modal" data-target="#"  title="edit toko" value="Edit">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Catatan Toko</td>
                                            <td> 
                                                <input type="text" name="" class="form-control is-valid" value=" " style="display: none;" >
                                                <div id=" ">Pemilik toko belum memberikan catatan</div>
                                                <span class="text-danger" style="color: red;"><?php echo form_error('username'); ?></span> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width=><h4>Tutup Toko</h4><p>(REFERENSI BUKALAPAK) Anda dapat menggunakan fitur tutup lapak untuk menonaktifkan lapak Anda selama waktu yang dapat Anda tentukan sendiri.</p></td>
                                            <td class="text-right">
                                                <input type="button" name="edit" class="btn btn-info" data-toggle="modal" data-target="#"  title="edit toko" value="Edit">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="navpills-4" class="tab-pane">                        
        <div class="card border-info">
            <div class="card-body">
                <ul>
                    <li class="card-text">Pilih paket jasa pengiriman untuk semua barang Anda di bawah ini.</li>
                    <li class="card-text">Pelapak dianggap menolak pesanan jika tidak mengirimkan barang sejak transaksi berhasil dibayar dalam batas waktu berikut ini:</li>
                    <ul class="list-style-none el-info" >
                        <li class="el-item">1.  &nbsp;   2 hari kerja untuk pengiriman reguler</li>
                        <li class="el-item">2.&nbsp;   2x24 jam (tidak termasuk hari besar) untuk pengiriman kilat </li>
                        <li class="el-item">3.&nbsp;   1x24 jam untuk pengiriman sameday service </li>
                        <li class="el-item">4.&nbsp;   1x2 jam untuk pengiriman Rush Delivery service</li>
                    </ul>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12"> 
                            <div class="col-md-12">
                            <h4>Layanan Jasa Pengiriman</h4><hr>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

<!-- modal -->
<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <?php echo validation_errors(); ?>
        <form action="<?php echo site_url('tambah_alamat')?>" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Alamat</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Nama Alamat:</label>
                        <input type="text" class="form-control" id="address_name" name="address_name" placeholder="contoh : alamat rumah, alamat kantor, dll" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Nama Penerima</label>
                        <input type="text" class="form-control" id="nama_penerima" name="nama_penerima" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">No Handphone</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Alamat</label>
                        <textarea type="text" class="form-control" id="locationName" name="locationName" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Propinsi</label>
                        <select class="form-control" id="propinsi" name="propinsi" required>
                            <option>-----pilih provinsi-----</option>
                            <?php 
                            foreach ($provinsi as $prov) {
                                ?>
                                <option value="<?php echo $prov['id_propinsi']?>"><?php echo $prov['nama_propinsi'];?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Kota</label>
                        <select class="form-control" id="kota" name="kota" required>
                            <option>-----pilih kota-----</option>
                        </select>
                    </div>
                   <!--  <div class="form-group">
                        <label for="message-text" class="control-label">Kecamatan</label>
                        <select class="form-control" id="kecamatan" name="kecamatan" required>
                            <option>-----pilih kecamatan-----</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Kelurahan</label>
                        <select class="form-control" id="kelurahan" name="id_kelurahan" required>
                            <option>-----pilih kelurahan-----</option>
                        </select>
                    </div> -->
                    <div class="form-group">
                        <label for="message-text" class="control-label">Kode Pos</label>
                        <input type="text" name="kodepos" class="form-control" id="kodepos" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Batal</button>
                    <input type="submit" name="submit" class="btn btn-info" value="Simpan">
                </div>
            </div>
        </form>
    </div>
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
        $("#edit").hide();
        $("#cancel").show();
    });

    $("#edit2").click(function(){
        $("#email2").hide();
        $("#phone2").hide();

        $("#email").show();
        $("#phone").show();
        $("#kolom_save2").show();

        $("#email").focus();
        $("#edit2").hide();
        $("#cancel2").show();
    });

    $("#edit3").click(function(){
        $("#password2").hide();
        $("#confirm_password2").show();


        $("#password").show();
        $("#confirm_password").show();
        $("#kolom_save3").show();
        $("#kolom_confirm").show();

        $("#password").focus();
        $("#edit3").hide();
        $("#cancel3").show();
    });

    $("#edit4").click(function(){
        $("#description2").hide();
        $("#service_time2").hide();

        $("#description").show();
        $("#service_time").show();
        $("#kolom_save4").show();

        $("#description").focus();
        $("#edit4").hide();
        $("#cancel4").show();
    });

    $("#edit5").click(function(){
        $("#shop_address2").hide();
        $("#shop_phone2").hide();

        $("#shop_address").show();
        $("#shop_phone").show();
        $("#kolom_save5").show();

        $("#shop_address").focus();
        $("#edit5").hide();
        $("#cancel5").show();
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

        $("#edit").show();
        $("#cancel").hide();
    });

    $("#cancel2").click(function(){
        $("#email2").show();
        $("#phone2").show();

        $("#email").hide();
        $("#phone").hide();
        $("#kolom_save2").hide();

        $("#edit2").show();
        $("#cancel2").hide();
    });

    $("#cancel3").click(function(){
        $("#password2").show();
        $("#confirm_password2").show();


        $("#password").hide();
        $("#confirm_password").hide();
        $("#kolom_save3").hide();
        $("#kolom_confirm").hide();


        $("#edit3").show();
        $("#cancel3").hide();
    });

    $("#cancel4").click(function(){
        $("#description2").show();
        $("#service_time2").show();

        $("#description").hide();
        $("#service_time").hide();
        $("#kolom_save4").hide();

        $("#edit4").show();
        $("#cancel4").hide();
    });

    $("#cancel5").click(function(){
        $("#shop_address2").show();
        $("#shop_phone2").show();

        $("#shop_address").hide();
        $("#shop_phone").hide();
        $("#kolom_save5").hide();

        $("#edit5").show();
        $("#cancel5").hide();
    });

    $(function () {
        $("#save3").click(function () {
            var password = $("#password").val();
            var confirmPassword = $("#confirm_password").val();
            var pass_length = password.length;
            if (password != confirmPassword) {
                alert("Kata sandi tidak sama.");
                    // document.getElementById("demo").innerHTML = "Kata sandi tidak sama.";
                    return false;
                }else{
                    if(pass_length < 6){
                        alert("Panjang Kata sandi minimal 6 karakter");
                        return false;
                    }else{
                        if(pass_length > 50){
                            alert("Panjang Kata sandi maksimal 50 karakter");
                            return false;
                        }else{
                            return true;
                        }
                    }
                }
            });
    });

    $(document).ready(function(){
        // City change
        $('#propinsi').change(function(){
            var propinsi = $(this).val(); //ambil value dr kode_unit
            // window.alert(unit);

            // AJAX request
            $.ajax({
                url:'<?=base_url()?>MemberC/get_kabupaten_kota',
                method: 'post',
                data: {id_propinsi: propinsi}, // data post ke controller 
                dataType: 'json',
                success: function(response){
                    // Remove options
                    $('#kota').find('option').not(':first').remove();

                    // Add options
                    $.each(response,function(daftar,data){
                        $('#kota').append('<option value="'+data['id_kabupaten_kota']+'">'+data['nama_kabupaten_kota']+'</option>');
                    });
                }
            });
        });

        $('#kota').change(function(){
            var kota = $(this).val(); //ambil value dr kode_unit
            // window.alert(unit);

            // AJAX request
            $.ajax({
                url:'<?=base_url()?>MemberC/get_postcode',
                method: 'post',
                data: {id_kabupaten_kota: kota}, // data post ke controller 
                dataType: 'json',
                success: function(response){
                  $('#kodepos').val(response[0].kode_pos);
                }
            });
        });

        // $('#kecamatan').change(function(){
        //     var kecamatan = $(this).val(); //ambil value dr kode_unit
        //     // window.alert(unit);

        //     // AJAX request
        //     $.ajax({
        //         url:'<?=base_url()?>MemberC/get_kelurahan',
        //         method: 'post',
        //         data: {id_kecamatan : kecamatan}, // data post ke controller 
        //         dataType: 'json',
        //         success: function(response){
        //             // Remove options
        //             $('#kelurahan').find('option').not(':first').remove();

        //             // Add options
        //             $.each(response,function(daftar,data){
        //                 $('#kelurahan').append('<option value="'+data['id_kelurahan']+'">'+data['nama_kelurahan']+'</option>');
        //             });
        //         }
        //     });
        // });

        //buat reoad ke current tab pane 
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
          // save the latest tab; use cookies if you like 'em better:
          localStorage.setItem('lastTab', $(this).attr('href'));
      });

      // go to the latest tab, if it exists:
      var lastTab = localStorage.getItem('lastTab');
      if (lastTab) {
        $('[href="' + lastTab + '"]').tab('show');
    }
});
</script>
