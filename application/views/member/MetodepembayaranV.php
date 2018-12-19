<?php
$sub_total = 0;
$total_diskon = 0;
$total_ongkir = 0;
foreach ($keranjang as $ker) {
    if($ker->discount != 0){
        $diskon_harga = ($ker->discount/100*$ker->salePrice)*$ker->quantity;
        $harga = $ker->price;
    }else{
        $harga = $ker->price;
        $diskon_harga = 0;
    }
    $total = $ker->quantity*$ker->salePrice;
    $sub_total = $sub_total+$total;
    $total_diskon = $total_diskon+$diskon_harga;
    $total_ongkir = $total_ongkir+$ker->cost;
}
// print_r($keranjang); 
?>
<form method="POST" action="<?php echo site_url('/bayar')?>">
    <div class="card">
       <div class='card-body'>
          <div class='container_page'>
             <div class='page'>
                                    <div class='page-cart'>
                        <div data-cart-status></div>
                        <div class='loadingOverlay'></div>
                        <div data-cart-content class='hl-cart-content'>
                            <?php
                                $data=$this->session->flashdata('sukses');
                                if($data!=""){ 
                            ?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span>
                                </button>
                                <h3 class="text-success"><i class="fa fa-check-circle"></i> Sukses!</h3>
                                <?=$data;?>
                            </div>
                            <?php 
                                } 
                            ?>
                            <?php 
                                $data2=$this->session->flashdata('error');
                                if($data2!=""){ 
                            ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span>
                                </button>
                                <h3 class="text-danger"><i class="fa fa-check-circle"></i> Gagal!</h3>
                                <?=$data2;?>
                            </div>
                            <?php 
                                } 
                            ?>
                            <form method='post' action='<?php echo site_url(' MemberC/checkout')?>'> <table class='table table-striped table-bordered'
                                data-cart-quantity=''>
                                <thead class='cart-header'>
                                    <tr>
                                        <th class='cart-header-item'>No</th>
                                        <th class='cart-header-item'>Image</th>
                                        <th class='cart-header-item' style="min-width: 200px;">Produk</th>
                                        <th class='cart-header-item' style="min-width: 200px;">Harga</th>
                                        <th class='cart-header-item'>Quantity</th>
                                        <th class='cart-header-item' style="min-width: 200px;">Total</th>
                                    </tr>
                                </thead>
                                <tbody class='cart-list' id="memberDetailCard">
                                    <?php
                                    // print_r($keranjang);
                                    $j=0;
                                    // $sub_total = 0;
                                    // $total_diskon = 0;
                                    foreach ($keranjang as $ker) {
                                        $j++;
                                        ?>
                                    <!-- inputan tabel orders -->
                                    <input type="hidden" name="memberID[]" value="<?php echo $dataDiri['memberID']?>">
                                    <input type="hidden" name="memberTo[]" value="<?php echo $MemberM->whose_product($ker->productID)->result()[0]->memberID;?>">
                                    <input type="hidden" name="customerName[]" value="<?php echo $ker->memberName;?>">
                                    <input type="hidden" name="qty[]" value="<?php echo $ker->quantity;?>">


                                    <tr class='cart-item' data-item-row>
                                        <td class='cart-item-block cart-item-figure'>
                                            <?php echo $j;?>
                                        </td>
                                        <td>
                                            <img style="max-width: 200px;" src='<?php echo base_url()?>assets/images/product/<?php echo $ker->photo1?>'>
                                        </td>
                                        <td class='cart-item-block cart-item-title'>
                                            <h6 class='cart-item-name'><a href='#'>
                                                    <?php echo $ker->productName;?> </a></h6>
                                        </td>
                                        <td class='cart-item-block cart-item-info cart-item-total'>
                                            <?php
                                                if($ker->discount != 0){
                                                    ?>
                                            <strike><strong class='cart-item-value'>
                                                    <?php echo "Rp".number_format(($ker->salePrice),0,",",".");?></strong></strike>
                                            <span class='cart-item-label'>
                                                <?php 
                                                        $diskon = $ker->salePrice-($ker->discount/100*$ker->salePrice);
                                                        echo "Rp".number_format(($diskon),0,",",".");
                                                        ?>
                                            </span>
                                            <?php
                                                    // $harga = $diskon;
                                                    $diskon_harga = ($ker->discount/100*$ker->salePrice)*$ker->quantity;
                                                    $harga = $ker->price;
                                                }else{
                                            ?>
                                            <strong class='cart-item-value'>
                                                <?php echo "Rp".number_format(($ker->price),0,",",".");?></strong>
                                                <?php
                                                        $harga = $ker->price;
                                                        $diskon_harga = 0;
                                                    }
                                                ?>
                                        </td>
                                        <td class='cart-item-block cart-item-info cart-item-quantity'>
                                            <b><?php echo $ker->quantity ?></b>
                                            <input type="hidden" id="weight<?php echo $ker->cartID?>" value="<?php echo $ker->quantity*$ker->weight ?>">
                                        </td>
                                        <td class='cart-item-block'>
                                            <strong class='cart-item-value'>
                                                <span class='cart-item-label' id="card-total<?php echo $ker->cartID ?>">
                                                    <?php 
                                                        if($ker->discount != 0){
                                                            $total = $ker->quantity*($ker->salePrice-($ker->discount/100*$ker->salePrice));
                                                            echo "Rp".number_format(($total),0,",",".");
                                                        }else{
                                                            echo "Rp".number_format(($ker->price),0,",",".");
                                                        }
                                                    ?>

                                                </span>
                                            </strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Pilih jasa pengiriman
                                        </td>
                                        <td>
                                            <button id="btn<?php echo $ker->cartID?>" type="button" class="btn btn-primary cek_kurir" data-produkid="<?php echo $ker->productID;?>" data-toggle="modal" data-target="#kurirModal<?php echo $ker->cartID?>">
                                                Pilih kurir
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="kurirModal<?php echo $ker->cartID?>" tabindex="-1" role="dialog" aria-labelledby="modal_label" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modal_label">Pilih jasa pengiriman</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <center>
                                                                <table id="tabel_ongkir<?php echo $ker->cartID?>"></table>
                                                            </center>
                                                        </div>
                                                        <!-- <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <select class="form-control" name="kurir<?php echo $ker->cartID?>">
                                                <option>Pilih Kurir </option>
                                                <?php
                                                foreach ($kurirs as $kurir) {
                                                    ?>
                                                    <option value="<?php echo $kurir->courierID;?>"><?php echo $kurir->courierName;?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select> -->
                                        </td>
                                        <td>
                                            <input type="hidden" id="origin<?php echo $ker->cartID?>" value="<?php echo $ker->id_kabupaten_kota ?>">
                                            <?php echo (empty($ker->service))?'':"<b>Servis : </b>".$ker->service ?>
                                            <input type="hidden" name="service<?php echo $ker->productID?>" value="<?php echo $ker->service?>">
                                        </td>
                                        <td>
                                            <?php echo (empty($ker->estimate))?'':"<b>Pengiriman : </b>".$ker->estimate ?>
                                            <input type="hidden" name="estimate<?php echo $ker->productID?>" value="<?php echo $ker->estimate?>">
                                        </td>
                                        <td>
                                            <?php echo ($ker->cost==0)?'': '<b>Biaya : </b>Rp'.number_format(($ker->cost),0,",","."); ?>
                                            <input type="hidden" name="cost<?php echo $ker->productID?>" value="<?php echo $ker->cost?>">
                                        </td>
                                    </tr>
                                    <?php

                                    }
                                    ?>
                                </tbody>
                                </table>
                                <!-- </form> -->
                        </div><br>
                    </div>
                <!-- <h3>Metode Pembayaran</h3> -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- <label class="m-t-20">Pilih Kurir :</label><br>
                        <select class="select2 form-control custom-select" name="kurir">
                            <option>Pilih Kurir </option>
                            <?php
                            foreach ($kurirs as $kurir) {
                                ?>
                                <option value="<?php echo $kurir->courierID;?>"><?php echo $kurir->courierName;?></option>
                                <?php
                            }
                            ?>
                        </select><br> -->

                        <label class="m-t-20">Catatan Tambahan :</label><br>
                        <textarea class="form-control" maxlength="200" style="height: 150px;" name="catatan" id="catatan"></textarea>
                        <p class="text-right">200 karakter</p>
                        
                        <div class="card border-info">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Alamat Pengiriman</h4>
                            </div>
                            <div class="card-body">
                                <!-- <h5 class="card-title">Alamat Kantor</h5>
                                <p class="card-text">Graha KAS (Lantai 3 PT.Arnawa),Kota Jakarta Selatan</p>
                                <p class="card-text">Kecamatan Kebayoran Baru, Kota Jakarta Selatan</p>
                                <p class="card-text">DKI Jakarta</p>
                                <p class="card-text">081269305494</p> -->
                                <?php 
                                    foreach ($get_default_address as $address) {
                                        echo "
                                            <p class='card-text'>".$address->id_kabupaten_kota."</p>
                                            <p class='card-text'>".$address->locationName."</p>
                                            <p class='card-text'>".$address->nama_kabupaten_kota."</p>
                                            <p class='card-text'>".$address->kode_pos."</p>
                                            <p class='card-text'>".$address->nama_propinsi."</p>
                                        ";
                                    }
                                ?>
                                <input type="hidden" id="destination" value="<?php echo $address->id_kabupaten_kota?>">
                                <a href="<?php echo site_url('pengaturan_profile#navpills-2')?>" class="btn btn-info">Pilih ALamat Lain</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card border-info" style="margin-top: 50px;">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Pilih Metode Pembayaran</h4>
                            </div>
                            <div class="card-body">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="saldo" name="customRadio" class="custom-control-input" checked="" value="saldo">
                                    <label class="custom-control-label" for="saldo">Saldo Koperasi</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="transfer" name="customRadio" class="custom-control-input" value="transfer" >
                                    <label class="custom-control-label" for="transfer">Bank Transfer</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="virtual" name="customRadio" class="custom-control-input" value="virtual">
                                    <label class="custom-control-label" for="virtual">Virtual Account</label>
                                </div>
                                <div id="bank">
                                    <label class="m-t-20">Pilih Bank</label><br>
                                    <select class="select2 form-control custom-select" name="bankID">
                                        <option>Pilih Bank</option>
                                        <?php
                                        foreach ($banks as $bank) {
                                            ?>
                                            <option value="<?php echo $bank->bankID;?>"><?php echo $bank->bankName." (".$bank->noRek.") - ".$bank->atasNama;?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card border-info" style="margin-top: 25px;">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Ringkasan Pemesanan</h4></div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <h5 class="card-title">Total Harga</h5>
                                            <h5 class="card-title">Biaya Kirim</h5>
                                            <h5 class="card-title">Total Belanja</h5>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <h5 class="card-title"><?php echo "&nbsp;".number_format(($sub_total-$total_diskon),0,",","."); ?></h5>
                                            <h5 class="card-title"><?php echo "&nbsp".number_format(($total_ongkir),0,",","."); ?></h5>
                                            <h5 class="card-title"><?php $grand_total = $sub_total-$total_diskon+$total_ongkir; echo "&nbsp".number_format(($grand_total),0,",","."); ?></h5>
                                        </div>
                                        <div>
                                            <!-- <a href="<?php echo site_url('CobaC/metodepembayaran')?>" class="btn btn-info" style="width: 250px;">Lanjut Pembayaran</a>  -->
                                            <!-- <a href="<?php echo site_url('/bayar')?>" class="btn btn-info" style="width: 250px;">Lanjut Pembayaran</a>  -->
                                            <button type="submit" class="btn btn-info" style="width: 250px;">Lanjut Pembayaran</button>
                                            <a href="<?php echo site_url('CobaC/metodepembayaran')?>"><span class="text-right"> Gunakan Kode Voucher ? </span></a>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="<?php echo base_url()?>assets/libs/jquery/dist/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $("#bank").hide();
        $('input:radio[name="customRadio"]').change(
            function(){
                if ($(this).val() == 'saldo') {
                    $("#bank").hide();
                }
                else {
                    $("#bank").show();
                }
            });

        $('.cek_kurir').click(function(e){
            var id = $(this).attr('id').replace('btn','');
            var originID = $('#origin'+id).val();
            var destinationID = $('#destination').val();
            var weight = $('#weight'+id).val();
            var productID = $(this).data("produkid");
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>CheckoutC/cek_ongkir/"+originID+"/"+destinationID+"/"+weight+"/"+id+"/"+0,
                success: function(data){
                        $('#tabel_ongkir'+id).html(data);
                },
                error: function() { alert("Error posting feed."); }
            });
        });
    });


</script>