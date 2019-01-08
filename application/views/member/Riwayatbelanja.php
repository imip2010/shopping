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
                                            <td width="230"><h4>Informasi Umum</h4></td>
                                            <td class="text-right">
                                                <button type="button" class="btn waves-effect waves-light btn-info" id="edit"> Edit </button>
                                                <span> &nbsp;</span>
                                                <button type="button" name="cancel" id="cancel" class="btn waves-effect waves-light btn-info" id="save" style="display: none;"> Cancel </button>
                                            </td>
                                            <input type="hidden" name="memberID" value=" ">
                                        </tr>
                                        <tr>
                                            <td>Foto Profil</td>
                                            <td> <img src="<?php echo base_url()?>assets/images/img3.jpg" style="width: 20%"/> </td>
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
