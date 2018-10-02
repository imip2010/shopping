<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/libs/ckeditor/samples/css/samples.css"><br>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/dist/css/image-multi.css">
<br>
<!-- Row -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            
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
                <div class="card-body" style="margin-bottom: -30px;">
                    <h2 class="card-title">Jual Barang</h2>
                </div>
                <div class="form-body" style="margin-top: -40px;">
                    <div class="card-body">
                        <div class="row p-t-20">
                            <!--/kiri-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_barang">Nama Barang</label>
                                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" style="height: 40px;" required>
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
                                        <input type="text" class="form-control" onkeypress="return hanyaAngka(event)" id="harga" name="harga" style="height: 40px;" required>
                                    </div>
                                </div>
                            <!--/kiri-->
                            <!--/kanan-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stok">Stok</label>
                                        <input type="text" class="form-control" onkeypress="return hanyaAngka(event)" id="stok" name="stok" style="height: 40px;" required>
                                    </div>
                                </div>
                            <!--/kanan-->
                        </div>

                        <div class="row">
                            <!--/kiri-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="berat">Berat(Kg)</label>
                                    <input type="text" class="form-control" onkeypress="return hanyaAngkatitik(event)" id="berat" name="berat" style="height: 40px;" required>
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
                                    <label>Unggah Foto</label>
                                    <br>
                                    <input type="file" class="form-control" id="images" name="userfile[]" onchange="preview_images();" multiple/>
                                    <p style="margin-top: 0px;">Hanya berkas bertipe <b>.gif-.jpg-.png-.jpeg-.bmp</b></p>
                                    <div id="image_preview"></div>

                                </div>
                            </div>
                            <!--/kiri-->
                            <!--/kanan-->
                            <div class="col-md-6">
                                <div class='form-field'>
                                    <label for="deskripsi">Deskripsi </label>
                                    <p style="margin-top: -10px;">Masukan deskripsi barang anda</p>
                                    <textarea name="deskripsi" style='width: 450px; height: 150px;' class='ckeditor'></textarea>
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
function preview_images() 
{
 var total_file=document.getElementById("images").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<img class='img-block' src='"+URL.createObjectURL(event.target.files[i])+"' style='width: 125px; height: 125px; border-style:ridge; margin: 5px;'></div>");
 }
}
</script>