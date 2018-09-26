<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
               <?php $data=$this->session->flashdata('sukses');
               if($data!=""){ ?>
                <div class="alert alert-success"><strong>Sukses! </strong> <?=$data;?></div>
            <?php } ?>
            <?php 
            $data2=$this->session->flashdata('error');
            if($data2!=""){ ?>
              <div class="alert alert-danger"><strong> Error! </strong> <?=$data2;?></div>
          <?php } ?>
          <div class="table-responsive">
            <table id="mytable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                       <th>No</th>
                       <th>Kategori</th>
                       <th>Nama Barang</th>
                       <th>Harga</th>
                       <th>Stok</th>
                       <th>Tanggal Upload</th>
                       <th>Status</th>
                       <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                // print_r($daftar_barang);
                $i=0;
                foreach ($daftar_barang as $barang) {
                    $i++;
                    ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $barang->categoryName;?></td>
                        <td><?php echo $barang->productName;?></td>
                        <td>Rp<?php echo number_format($barang->salePrice, 0,',','.');?>,00</td>
                        <td><?php echo $barang->qty;?></td>
                        <?php
                        $tgl = $barang->createDate;;
                        $new_tgl = date('d-m-Y', strtotime($tgl));
                        ?>
                        <td><?php echo $new_tgl;?></td>
                        <td><?php 
                        if($barang->status == "Y"){
                            echo "Tampil";
                        }else{
                            echo "Tidak tampil";
                        }
                        ?>

                    </td>
                    <td>
                        <a id="custId" data-toggle="modal" data-target="#myModal1-<?php echo $barang->productID?>" title="edit" class="btn btn-success btn-sm"><span class="ti-pencil"></span></a>
                        <a id="custId" data-toggle="modal" data-target="#myModal2-<?php echo $barang->productID?>" title="detail" class="btn btn-info btn-sm"><span class="ti-eye"></span></a>
                        <a href="<?php echo base_url('MemberC/hapus_barang/').$barang->productID ?>" data-id="<?php echo $barang->productID;?>" title="delete" class="btn btn-danger btn-sm" onClick="return confirm('Anda yakin akan menghapus Produk <?php echo $barang->productName?>?')"><span class="ti-trash"></span></a>

                    </td>
                    </tr>


                    <!-- modal edit barang -->
                    <div class="modal" id="myModal1-<?php echo $barang->productID?>">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Ubah Data Barang</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <?php echo form_open_multipart('');?>
                                    <form action="<?php echo site_url('MemberC/post_jual_barang')?>" method="post">
                                        <div class="form-group">
                                            <label for="nama_barang">Nama Barang</label>
                                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $barang->productName?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="kondisi">Kondisi:</label>
                                            <div class="form-group">
                                                <select class="form-control" id="kondisi" name="kondisi">
                                                    <?php
                                                    if($barang->conditions == 1){
                                                        ?>
                                                        <option value="1" selected>Baru</option>
                                                        <option value="2">Bekas</option>
                                                        <?php
                                                    }else{
                                                        ?>
                                                        <option value="1" >Baru</option>
                                                        <option value="2" selected>Bekas</option>
                                                        <?php
                                                    }
                                                    ?>
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
                                            <input type="text" class="form-control" onkeypress="return hanyaAngka(event)" id="harga" name="harga" value="<?php echo $barang->salePrice?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="stok">Stok</label>
                                            <input type="text" class="form-control" onkeypress="return hanyaAngka(event)" id="stok" name="stok" value="<?php echo $barang->qty?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="berat">Berat(Kg)</label>
                                            <input type="text" class="form-control" onkeypress="return hanyaAngkatitik(event)" id="berat" name="berat" value="<?php echo $barang->weight?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="diskon">Diskon(%)</label>
                                            <input type="text" value="0" class="form-control" onkeypress="return hanyaAngkatitik(event)" id="diskon" name="diskon" value="<?php echo $barang->discount?>">
                                        </div>
                                        <div class='form-field'>
                                            <label class='form-label'>Deskripsi
                                            </label>
                                            <textarea name="deskripsi" id="deskripsi" style='width: 450px; height: 150px;' class='ckeditor' value="<?php echo $barang->description?>"></textarea>
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
                                  </form>
                              </div>

                              <!-- Modal footer -->
                              <div class="modal-footer">
                                <input type="submit" class="btn btn-primary col-lg-2"  value="Simpan">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        </div>
                    </div>




                    <!-- The Modal detail barang-->
                    <div class="modal" id="myModal2-<?php echo $barang->productID?>">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Detail Produk</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <h3 class="card-title"><?php echo $barang->productName;?></h3>
                                <h6 class="card-subtitle"><?php echo $barang->memberName;?></h6>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-4">
                                        <div class="white-box text-center"> <img src="<?php echo base_url()?>assets/images/product/<?php echo $barang->photo1?>" class="img-responsive" style="max-width: 100%;"> </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-6">
                                        <h4 class="box-title">Deskripsi Produk</h4>
                                        <?php echo $barang->description;?>
                                        <h4 class="box-title">Stok : <?php echo $barang->qty;?></h4>
                                        <h4 class="box-title">Berat : <?php echo $barang->weight;?></h4>
                                        <h2 class="m-t-40">
                                            <span data-product-price-without-tax="" class="price price--withoutTax"> Rp<?php echo number_format($barang->salePrice, 0,',','.');?>,00
                                            </span>
                                        </h2>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-6">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
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

<!-- The Modal -->

