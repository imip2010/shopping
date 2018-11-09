<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/libs/ckeditor/samples/css/samples.css"><br>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/dist/css/image-multi.css">
<style type="text/css">
body {
  background: whitesmoke;
  font-family: 'Open Sans', sans-serif;
}
.container {
  max-width: 960px;
  margin: 30px auto;
  padding: 20px;
}
h1 {
  font-size: 20px;
  text-align: center;
  margin: 20px 0 20px;
}
h1 small {
  display: block;
  font-size: 15px;
  padding-top: 8px;
  color: gray;
}
.avatar-upload {
  position: relative;
  max-width: 205px;
  margin: 50px auto;
}
.avatar-upload .avatar-edit {
  position: absolute;
  right: 12px;
  z-index: 1;
  top: 10px;
}
.avatar-upload .avatar-edit input {
  display: none;
}
.avatar-upload .avatar-edit input + label {
  display: inline-block;
  width: 27px;
  height: 27px;
  margin-top: -25px;
  margin-right: -20px;
  margin-bottom: 0;
  border-radius: 0%;
  background-image: url(../assets/images/x.png);
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
  background-size: cover;
}

.avatar-upload .avatar-edit input + label:after {
  content: "";
  font-family: 'FontAwesome';
  color: #757575;
  position: absolute;
  top: 10px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
.avatar-upload .avatar-preview {
  width: 192px;
  height: 192px;
  position: relative;
  border-radius: 0%;
  border: 6px solid #f8f8f8;
  /*background-image: url(../assets/images/plus.png);*/
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 0%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

}




</style>
<br>
<!-- Row -->
<div class="row">
    <div class="card-body" style="margin-bottom: 0;margin-top: -90px;">
        <h2 class="card-title">Jual Barang</h2>
    </div>
    <div class="col-lg-12">

        <?php
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
        <?php echo form_open_multipart('MemberC/post_jual_barang');?>

        <form action="<?php echo site_url('MemberC/post_jual_barang')?>" method="post" enctype="multipart/form-data">
            <div class="form-body" style="margin-top: -40px;">
                <div class="card-body">
                    <div class="row p-t-20">
                        <!--/kiri-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_barang">Nama Barang</label>
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang" style="height: 40px;" value="Tempe" required>
                            </div>
                        </div>
                        <!--/kiri-->
                        <!--/kanan-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kondisi">Kondisi:</label>
                                <div class="form-group">
                                    <select class="form-control" id="kondisi" name="kondisi" style="height: 40px;">
                                        <option value="1">Baru</option>
                                        <option value="2">Bekas</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--/kanan-->
                    </div>

                    <div class="row">
                        <!--/kiri-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kategori">Kategori Barang:</label>
                                <div class="form-group">
                                    <select class="form-control" id="kategori" name="kategori" style="height: 40px;">
                                        <?php 
                                        foreach ($kategori as $kat) {
                                            ?>
                                            <option value="<?php echo $kat['categoryID']?>"><?php echo $kat['categoryName']?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--/kiri-->
                        <!--/kanan-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kategori">Sub Kategori Barang:</label>
                                <div class="form-group">
                                    <select class="form-control" id="sub_kategori" name="sub_kategori">
                                        <option>----pilih sub kategori----</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--/kanan-->
                    </div>

                    <div class="row">
                        <!--/kiri-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control" onkeypress="return hanyaAngka(event)" id="harga" name="harga" style="height: 40px;" value="1000" required>
                            </div>
                        </div>
                        <!--/kiri-->
                        <!--/kanan-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="text" class="form-control" onkeypress="return hanyaAngka(event)" id="stok" name="stok" style="height: 40px;" value="10" required>
                            </div>
                        </div>
                        <!--/kanan-->
                    </div>

                    <div class="row">
                        <!--/kiri-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="berat">Berat(Kg)</label>
                                <input type="text" class="form-control" onkeypress="return hanyaAngkatitik(event)" id="berat" name="berat" style="height: 40px;" value="1" required>
                            </div>
                        </div>
                        <!--/kiri-->
                        <!--/kanan-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="diskon">Diskon(%)</label>
                                <input type="text" value="0" class="form-control" onkeypress="return hanyaAngkatitik(event)" id="diskon" name="diskon" style="height: 40px;" required>
                            </div>
                        </div>
                        <!--/kanan-->
                    </div>

                    <div class="row">
                        <!--/kiri-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4" style="margin-top: 45px;">
                                            <div class="avatar-upload" >
                                                <div class="avatar-edit">
                                                    <input type='file' onchange="readURL1(this);"  id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload" ></label>
                                                </div>
                                                <label for="imageUpload" >
                                                    <div class="avatar-preview">
                                                        <div id="imagePreview" style="background-image: url(<?php echo base_url()?>assets/images/camera.png);">
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="avatar-upload" style="width: 125px; height: 125px;">
                                                        <div class="avatar-edit">
                                                            <input type='file' onchange="readURL2(this);"  id="imageUpload2" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload2"></label>
                                                        </div>
                                                        <label for="imageUpload2">
                                                            <div class="avatar-preview" style="width: 125px; height: 125px;">
                                                                <div id="imagePreview2" style="background-image: url(<?php echo base_url()?>assets/images/camera.png);">
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="avatar-upload" style="width: 125px; height: 125px;">
                                                        <div class="avatar-edit">
                                                            <input type='file' onchange="readURL3(this);"  id="imageUpload3" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload3"></label>
                                                        </div>
                                                        <label for="imageUpload3">
                                                            <div class="avatar-preview" style="width: 125px; height: 125px;">
                                                                <div id="imagePreview3" style="background-image: url(<?php echo base_url()?>assets/images/camera.png);">
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="avatar-upload" style="width: 125px; height: 125px;">
                                                        <div class="avatar-edit">
                                                            <input type='file' onchange="readURL4(this);"  id="imageUpload4" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload4"></label>
                                                        </div>
                                                        <label for="imageUpload4">
                                                            <div class="avatar-preview" style="width: 125px; height: 125px;">
                                                                <div id="imagePreview4" style="background-image: url(<?php echo base_url()?>assets/images/camera.png);">
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4" style="margin-top: -85px;">
                                                    <div class="avatar-upload" style="width: 125px; height: 125px;">
                                                        <div class="avatar-edit">
                                                            <input type='file' onchange="readURL5(this);"  id="imageUpload5" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload5"></label>
                                                        </div>
                                                        <label for="imageUpload5">
                                                            <div class="avatar-preview" style="width: 125px; height: 125px;">
                                                                <div id="imagePreview5" style="background-image: url(<?php echo base_url()?>assets/images/camera.png);">
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4" style="margin-top: -85px;">
                                                    <div class="avatar-upload" style="width: 125px; height: 125px;">
                                                        <div class="avatar-edit">
                                                            <input type='file' onchange="readURL6(this);"  id="imageUpload6" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload6"></label>
                                                        </div>
                                                        <label for="imageUpload6">
                                                            <div class="avatar-preview" style="width: 125px; height: 125px;">
                                                                <div id="imagePreview6" style="background-image: url(<?php echo base_url()?>assets/images/camera.png);">
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4" style="margin-top: -85px;">
                                                    <div class="avatar-upload" style="width: 125px; height: 125px;">
                                                        <div class="avatar-edit">
                                                            <input type='file' onchange="readURL7(this);"  id="imageUpload7" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload7"></label>
                                                        </div>
                                                        <label for="imageUpload7">
                                                            <div class="avatar-preview" style="width: 125px; height: 125px;">
                                                                <div id="imagePreview7" style="background-image: url(<?php echo base_url()?>assets/images/camera.png);">
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/kiri-->
                        <!--/kanan-->
                        <div class="col-md-6">
                            <div class='form-field'>
                                <label for="deskripsi">Deskripsi </label>
                                <p style="margin-top: -10px;">Masukan deskripsi barang anda</p>
                                <textarea name="deskripsi" style='width: 450px; height: 150px;' class='ckeditor'>bagus</textarea>
                            </div>  
                        </div>
                        <!--/kanan-->
                    </div>

                    


                    <!--/row-->
                    <div class="form-actions text-center">
                        <div class="card-body"><button type="submit" class="btn btn-lg btn-success" style="width: 35%;">Jual</button></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Row -->

<br>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<script src="<?php echo base_url()?>assets/libs/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/dist/js/imgage-multi.js"></script>

<script type="text/javascript">
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

    

    function hanyaAngkatitik(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 46 || charCode > 57))
            return false;
        return true;
    }
    $(document).ready(function(){
        // City change
        $('#kategori').change(function(){
            var kategori = $(this).val(); //ambil value dr kode_unit
            // window.alert(unit);

            // AJAX request
            $.ajax({
                url:'<?=base_url()?>MemberC/get_sub_kategori',
                method: 'post',
                data: {categoryID: kategori}, // data post ke controller 
                dataType: 'json',
                success: function(response){
                    // Remove options
                    $('#sub_kategori').find('option').not(':first').remove();

                    // Add options
                    $.each(response,function(daftar,data){
                        $('#sub_kategori').append('<option value="'+data['subCategoryID']+'">'+data['subCategoryName']+'</option>');
                    });
                }
            });
        });
    });
</script>


<script>

    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader1 = new FileReader();
            reader1.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader1.readAsDataURL(input.files[0]);
        }
    }

     function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader2 = new FileReader();
            reader2.onload = function(e) {
                $('#imagePreview2').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview2').hide();
                $('#imagePreview2').fadeIn(650);
            }
            reader2.readAsDataURL(input.files[0]);
        }
    }
     function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader3 = new FileReader();
            reader3.onload = function(e) {
                $('#imagePreview3').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview3').hide();
                $('#imagePreview3').fadeIn(650);
            }
            reader3.readAsDataURL(input.files[0]);
        }
    }
     function readURL4(input) {
        if (input.files && input.files[0]) {
            var reader4 = new FileReader();
            reader4.onload = function(e) {
                $('#imagePreview4').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview4').hide();
                $('#imagePreview4').fadeIn(650);
            }
            reader4.readAsDataURL(input.files[0]);
        }
    }
     function readURL5(input) {
        if (input.files && input.files[0]) {
            var reader5 = new FileReader();
            reader5.onload = function(e) {
                $('#imagePreview5').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview5').hide();
                $('#imagePreview5').fadeIn(650);
            }
            reader5.readAsDataURL(input.files[0]);
        }
    }
     function readURL6(input) {
        if (input.files && input.files[0]) {
            var reader6 = new FileReader();
            reader6.onload = function(e) {
                $('#imagePreview6').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview6').hide();
                $('#imagePreview6').fadeIn(650);
            }
            reader6.readAsDataURL(input.files[0]);
        }
    }
     function readURL7(input) {
        if (input.files && input.files[0]) {
            var reader7 = new FileReader();
            reader7.onload = function(e) {
                $('#imagePreview7').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview7').hide();
                $('#imagePreview7').fadeIn(650);
            }
            reader7.readAsDataURL(input.files[0]);
        }
    }        
</script>