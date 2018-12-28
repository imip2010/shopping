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
                            <form action="<?php echo site_url('MemberC/update_member')?>" method="post">
                                <table class="table">
                                    <tbody>
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
                                    <tr>
                                        <td><h4>Password</h4></td>
                                        <td class="text-right">
                                            <button type="button" class="btn waves-effect waves-light btn-info" id="edit3"> Edit </button>
                                            <span> &nbsp;</span>
                                            <button type="button" name="cancel3" id="cancel3" class="btn waves-effect waves-light btn-info" id="save" style="display: none;"> Cancel 
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td>
                                            <input type="password" name="password" id="password" class="form-control is-valid" value="" style="display: none;" ></input>
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
                        </tbody>
                    </table>
                </form><br><br>
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
                                        <th style="max-width: 10px; text-align: center;">No.</th>
                                        <th>Nama Alamat</th>
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
                                            <td style="max-width: 10px; text-align: center; vertical-align: center;"><?php echo $i;?></td>
                                            <td><?php echo $alamat->locationName;?></td>
                                            <td>
                                                <?php 
                                                echo "<p><b>".$this->session->nama."</b><br>";
                                                echo $alamat->nama_kabupaten_kota."<br>";
                                                echo $alamat->nama_propinsi.", ";
                                                echo $alamat->kode_pos."<br>";

                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($alamat->status_alamat == "default") {
                                                    ?>

                                                    <button title="alamat utama" class="btn btn-info btn-sm"><span class="ti-check"></span> Alamat Utama</button>
                                                    <?php
                                                }else{

                                                    ?>
                                                    <a href="<?php echo site_url('MemberC/hapus_alamat/').$alamat->locationID;?>" title="hapus" class="btn btn-danger btn-sm" onClick="return confirm('Anda yakin akan menghapus alamat ini?')"><span class="ti-trash"></span>
                                                    </a>
                                                    <a href="<?php echo site_url('MemberC/set_utama/').$dataDiri['memberID']."/".$alamat->locationID;?>" title="set utama" class="btn btn-secondary btn-sm" onClick="return confirm('Anda yakin akan menggunakan alamat ini sebagai alamat utama ?')"><span class="ti-save"></span> Set Utama
                                                    </a>
                                                    <?php
                                                }
                                                ?>
                                                <button title="edit" data-toggle="modal" data-target="#responsive-modal-<?php echo $alamat->locationID?>" class="btn btn-success btn-sm"><span class="ti-pencil-alt"></span>
                                                </button>
                                            </td>
                                        </tr>

                                        <div id="responsive-modal-<?php echo $alamat->locationID?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <?php echo validation_errors(); ?>
                                                <form action="<?php echo site_url('MemberC/post_ubah_alamat')?>" method="post">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Ubah Alamat</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="hidden" name="memberID" value="<?php echo $dataDiri['memberID'];?>">
                                                            <input type="hidden" name="locationID" value="<?php echo $alamat->locationID;?>">
                                                            <input type="hidden" name="locationID" value="<?php echo $alamat->locationID;?>">
                                                            <input type="hidden" name="status_alamat" value="<?php echo $alamat->status_alamat;?>">
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="control-label">Nama Alamat:</label>
                                                                <input type="text" class="form-control" id="shipping_address_name" name="shipping_address_name" placeholder="contoh : aalmat rumah, alamat kantor" required value="<?php echo $alamat->locationName;?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="control-label">Nama Penerima</label>
                                                                <input type="text" class="form-control" id="nama_penerima-<?php echo $alamat->locationID?>" name="nama_penerima" required value="<?php echo $this->session->nama;?>">
                                                            </div>
                                                            <!-- <div class="form-group">
                                                                <label for="message-text" class="control-label">No Handphone</label>
                                                                <input type="text" class="form-control" id="no_hp-<?php echo $alamat->locationID?>" name="no_hp" required value="<?php echo $alamat->no_hp;?>">
                                                            </div> -->
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
                                                                <input type="number" name="kode_pos" class="form-control" value="<?php echo $alamat->kode_pos?>" required>
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
                                        <tr>
                                            <td width=><h4>Informasi Toko</h4></td>
                                            <td class="text-right">
                                                <input type="button" name="edit" class="btn btn-info" data-toggle="modal" data-target="#"  title="edit toko" value="Edit">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: middle;">Foto Header Toko</td>
                                            <td > <img src="<?php echo base_url()?>assets/images/hotel.jpg" style="width: 600px;"/> </td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi Toko</td>
                                            <td> 
                                                <input type="text" name=""  class="form-control is-valid" value=" " style="display: none;" >
                                                <div id=" ">Deskripsi toko belum diatur</div>
                                                <span class="text-danger" style="color: red;"><?php echo form_error('username'); ?></span> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Batas Jam Pengiriman Barang</td>
                                            <td>
                                                <input type="text" name="" class="form-control is-valid" value=" " style="display: none;">
                                                <div id=" ">Sewaktu terakhir pemesanan belum diatur</div>
                                                <span class="text-danger" style="color: red;"><?php echo form_error('memberName'); ?></span> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width=><h4>Lokasi Toko</h4><p>Kamu dapat menambahkan lokasi fisik toko kamu di sini</p></td>
                                            <td class="text-right">
                                                <input type="button" name="edit" class="btn btn-info" data-toggle="modal" data-target="#"  title="edit toko" value="Edit">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Kontak Toko</td>
                                            <td> 
                                                <input type="text" name="" class="form-control is-valid" value=" " style="display: none;" >
                                                <div id=" ">nomor kontak toko belum diatur</div>
                                                <span class="text-danger" style="color: red;"><?php echo form_error('username'); ?></span> 
                                            </td>
                                        </tr>
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
                    <input type="hidden" name="memberID" value="<?php echo $dataDiri['memberID'];?>">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Nama Alamat:</label>
                        <input type="text" class="form-control" id="shipping_address_name" name="shipping_address_name" placeholder="contoh : alamat rumah, alamat kantor, dll" required>
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
                        <input type="number" name="kode_pos" class="form-control" required>
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
                url:'<?=base_url()?>MemberC/get_kecamatan',
                method: 'post',
                data: {id_kabupaten_kota: kota}, // data post ke controller 
                dataType: 'json',
                success: function(response){
                    // Remove options
                    $('#kecamatan').find('option').not(':first').remove();

                    // Add options
                    $.each(response,function(daftar,data){
                        $('#kecamatan').append('<option value="'+data['id_kecamatan']+'">'+data['nama_kecamatan']+'</option>');
                    });
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
