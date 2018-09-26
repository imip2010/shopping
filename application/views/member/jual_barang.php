<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/libs/ckeditor/samples/css/samples.css"><br>
<div class="row">
    <div class="col-lg-12">
        <div class="col-lg-4" style="margin-left: 30%;">
            <?php 
            $data=$this->session->flashdata('sukses');
            if($data!=""){ ?>
                <div class="alert alert-success"><strong>Sukses! </strong> <?=$data;?></div>
            <?php } ?>
            <?php 
            $data2=$this->session->flashdata('error');
            if($data2!=""){ ?>
              <div class="alert alert-danger"><strong> Error! </strong> <?=$data2;?></div>
          <?php } ?>
          <?php echo form_open_multipart('MemberC/post_jual_barang');?>
          <form action="<?php echo site_url('MemberC/post_jual_barang')?>" method="post">
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
            </div>
            <div class="form-group">
                <label for="kondisi">Kondisi:</label>
                <div class="form-group">
                    <select class="form-control" id="kondisi" name="kondisi">
                        <option value="1">Baru</option>
                        <option value="2">Bekas</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori Barang:</label>
                <div class="form-group">
                    <select class="form-control" id="kategori" name="kategori">
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
            <div class="form-group">
                <label for="kategori">Sub Kategori Barang:</label>
                <div class="form-group">
                    <select class="form-control" id="sub_kategori" name="sub_kategori">
                        <option>----pilih sub kategori----</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" onkeypress="return hanyaAngka(event)" id="harga" name="harga" required>
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" class="form-control" onkeypress="return hanyaAngka(event)" id="stok" name="stok" required>
            </div>
            <div class="form-group">
                <label for="berat">Berat(Kg)</label>
                <input type="text" class="form-control" onkeypress="return hanyaAngkatitik(event)" id="berat" name="berat" required>
            </div>
            <div class="form-group">
                <label for="diskon">Diskon(%)</label>
                <input type="text" value="0" class="form-control" onkeypress="return hanyaAngkatitik(event)" id="diskon" name="diskon" required>
            </div>
            <div class='form-field'>
                <label class='form-label'>Deskripsi <small>Masukan deskripsi barang anda</small>
                </label>
                <textarea name="deskripsi" style='width: 450px; height: 150px;' class='ckeditor'></textarea>
            </div>  
            <div class="form-group">
              <label>Unggah Foto</label>
              <br>
              <input type="file" name="userfile[]" multiple="multiple">
              <input type="file" name="userfile[]" multiple="multiple">
              <input type="file" name="userfile[]" multiple="multiple">
              <input type="file" name="userfile[]" multiple="multiple">
              <input type="file" name="userfile[]" multiple="multiple">
              <input type="file" name="userfile[]" multiple="multiple">
              <br><small><p>Hanya berkas bertipe <b>.gif-.jpg-.png-.jpeg-.bmp</b></p></small>
          </div>  
          <button type="submit" class="btn btn-lg btn-success">Jual</button>
            </form>
        </div>  
    </div>
</div>
<br>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<script src="<?php echo base_url()?>assets/libs/jquery/dist/jquery.min.js"></script>

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