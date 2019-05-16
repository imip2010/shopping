<?php $total[]=0;error_reporting(0);?>
<br>
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->

<div class="row">
    <?php
        echo $sidebar_transaksi;
    ?>

    <!-- Column bagian kanan : mulai -->
    <div class="col-lg-9 col-md-12">
        <h3 class="card-title">Riwayat Belanja </h3>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <ul class="nav nav-pills m-t-30 m-b-30">
                <li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Belum Bayar</a> </li>
                <li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Dikemas</a> </li>
                <li class="nav-item"> <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">Dikirim</a> </li>
                <li class=" nav-item"> <a href="#navpills-4" class="nav-link" data-toggle="tab" aria-expanded="false">Selesai</a> </li>
                <li class="nav-item"> <a href="#navpills-5" class="nav-link" data-toggle="tab" aria-expanded="false">Batal</a> </li>
            </ul>
            
            <div class="tab-content br-n pn">
                <div id="navpills-1" class="tab-pane active">
                    <?php if(!empty($invoices)){
                        foreach($invoices as $key => $order){ ?>
                    <div class="row" style="background: #effff0;padding-bottom: 10px;border-bottom: 1px solid #dee2e6;">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="text-left" colspan="2" style="padding-bottom: 0rem;">
                                            <h3><?php echo $order->invoice;?></h3>
                                        </td>
                                        <td style="padding-bottom: 0rem;"><h4 style="color: #4798e8;font-size: 0.97rem;" class="text-right">Belum Bayar</h4></td>
                                    </tr>
                                <?php foreach($transactions as $no => $transaction){ 
                                    if ($transaction->orderID == $order->orderID) {
                                    ?>
                                    <tr>
                                        <td style="width: 10%"> <img src="<?php echo base_url()?>assets/images/product/thumbnail/<?php echo $transaction->photo1;?>" style="width: 100%"/></td>
                                        <td style="width: 75%"><?php echo $transaction->productName;?>
                                            <p>
                                                <small>
                                                <?php echo $transaction->quantity." x Rp ".number_format($transaction->price/$transaction->quantity, 0,',','.')."<br>".$transaction->description;?>
                                                </small>
                                            </p>                                        </td>
                                        <td class="text-right">Rp <?php echo number_format($transaction->price, 0,',','.');?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="padding-bottom: 0rem;">
                                            <div class="text-left" style="font-size: 0.9em;">
                                                <p>
                                                    <?php echo $transaction->memberName;?>&emsp;
                                                    <button type="button" class="btn btn-sm waves-effect waves-light btn-info"><span class="btn-label"><i class="mdi mdi-message"></i></span> Chat </button>
                                                    <a href="<?php echo site_url('toko/'.$transaction->sellerID); ?>" target="_blank" class="btn btn-sm waves-effect waves-light btn-outline-info"> Kunjungi Toko </a>
                                                </p>
                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>
                                <?php $total[$key]=$total[$key]+$transaction->price;}}?>
                                </tbody>
                            </table>
                            <hr style="margin-top: -1%;">
                            <div class="text-right" style="margin-right: 20px;">
                                <h4 class="text-right" style="margin-top: -1%;margin-bottom: -1%;">Total Pesanan&emsp;Rp <?php echo number_format($total[$key], 0,',','.');?> </h4><br>
                                <button type="button" class="btn waves-effect waves-light btn-info"> Transfer Sekarang </button>
                                <a href="<?php echo site_url('detail_transaksi/').$order->orderID;?>" class="btn waves-effect waves-light btn-outline-info"> Tampilkan Rincian Pesanan </a>
                                <button class="btn waves-effect waves-light btn-outline-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainnya</button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" onclick="deleteConfrimation(<?php echo $order->orderID;?>);" style="cursor:pointer;">Batalkan Pesanan</button>
                                    <a class="dropdown-item" href="<?php echo site_url('ubah_pembayaran/'.$transaction->orderID)?>">Ubah Metode Pembayaran</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <?php }}else{echo "Tidak ada transaksi!";}?>
                </div>
                <div id="navpills-2" class="tab-pane">
                    <?php if(!empty($invoices_packing)){
                        foreach($invoices_packing as $key => $order_packing){ ?>
                    <div class="row" style="background: #effff0;padding-bottom: 10px;border-bottom: 1px solid #dee2e6;">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="text-left" colspan="2" style="padding-bottom: 0rem;">
                                            <h3><?php echo $order_packing->invoice;?></h3>
                                        </td>
                                        <td style="padding-bottom: 0rem;"><h4 style="color: #4798e8;font-size: 0.97rem;" class="text-right">Belum Dikirimkan</h4></td>
                                    </tr>
                                <?php foreach($transactions as $no => $transaction){ 
                                    if ($transaction->orderID == $order_packing->orderID) {
                                    ?>
                                    <tr>
                                        <td style="width: 10%"> <img src="<?php echo base_url()?>assets/images/product/thumbnail/<?php echo $transaction->photo1;?>" style="width: 100%"/></td>
                                        <td style="width: 75%"><?php echo $transaction->productName;?>
                                            <p>
                                                <small>
                                                <?php echo $transaction->quantity." x Rp ".number_format($transaction->price/$transaction->quantity, 0,',','.')."<br>".$transaction->description;?>
                                                </small>
                                            </p>                                        </td>
                                        <td class="text-right">Rp <?php echo number_format($transaction->price, 0,',','.');?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="padding-bottom: 0rem;">
                                            <div class="text-left" style="font-size: 0.9em;">
                                                <p>
                                                    <?php echo $transaction->memberName;?>&emsp;
                                                    <button type="button" class="btn btn-sm waves-effect waves-light btn-info"><span class="btn-label"><i class="mdi mdi-message"></i></span> Chat </button>
                                                    <a href="<?php echo site_url('toko/'.$transaction->sellerID); ?>" target="_blank" class="btn btn-sm waves-effect waves-light btn-outline-info"> Kunjungi Toko </a>
                                                </p>
                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>
                                <?php $total[$key]=$total[$key]+$transaction->price;}}?>
                                </tbody>
                            </table>
                            <hr style="margin-top: -1%;">
                            <div class="text-right" style="margin-right: 20px;">
                                <h4 class="text-right" style="margin-top: -1%;margin-bottom: -1%;">Total Pesanan&emsp;Rp <?php echo number_format($total[$key], 0,',','.');?> </h4><br>
                                <a href="<?php echo site_url('detail_transaksi/').$order_packing->orderID;?>" class="btn waves-effect waves-light btn-outline-info"> Tampilkan Rincian Pesanan </a>
                                <button class="btn waves-effect waves-light btn-outline-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainnya</button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" onclick="deleteConfrimation(<?php echo $order->orderID;?>);" style="cursor:pointer;">Batalkan Pesanan</button>
                                    <!-- <a class="dropdown-item" href="javascript:void(0)">Ubah Metode Pembayaran</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <?php }}else{echo "Tidak ada transaksi!";}?>
                </div>
                <div id="navpills-3" class="tab-pane">
                    <?php if(!empty($invoices_send)){
                        foreach($invoices_send as $key => $order_send){ ?>
                    <div class="row" style="background: #effff0;padding-bottom: 10px;border-bottom: 1px solid #dee2e6;">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="text-left" colspan="2" style="padding-bottom: 0rem;">
                                            <h3><?php echo $order_send->invoice;?></h3>
                                        </td>
                                        <td style="padding-bottom: 0rem;"><h4 style="color: #4798e8;font-size: 0.97rem;" class="text-right">Belum Diterima</h4></td>
                                    </tr>
                                <?php foreach($transactions as $no => $transaction){ 
                                    if ($transaction->orderID == $order_send->orderID) {
                                    ?>
                                    <tr>
                                        <td style="width: 10%"> <img src="<?php echo base_url()?>assets/images/product/thumbnail/<?php echo $transaction->photo1;?>" style="width: 100%"/></td>
                                        <td style="width: 75%"><?php echo $transaction->productName;?>
                                            <p>
                                                <small>
                                                <?php echo $transaction->quantity." x Rp ".number_format($transaction->price/$transaction->quantity, 0,',','.')."<br>".$transaction->description;?>
                                                </small>
                                            </p>                                        </td>
                                        <td class="text-right">Rp <?php echo number_format($transaction->price, 0,',','.');?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="padding-bottom: 0rem;">
                                            <div class="text-left" style="font-size: 0.9em;">
                                                <p>
                                                    <?php echo $transaction->memberName;?>&emsp;
                                                    <button type="button" class="btn btn-sm waves-effect waves-light btn-info"><span class="btn-label"><i class="mdi mdi-message"></i></span> Chat </button>
                                                    <a href="<?php echo site_url('toko/'.$transaction->sellerID); ?>" target="_blank" class="btn btn-sm waves-effect waves-light btn-outline-info"> Kunjungi Toko </a>
                                                </p>
                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>
                                <?php $total[$key]=$total[$key]+$transaction->price;}}?>
                                </tbody>
                            </table>
                            <hr style="margin-top: -1%;">
                            <div class="text-right" style="margin-right: 20px;">
                                <h4 class="text-right" style="margin-top: -1%;margin-bottom: -1%;">Total Pesanan&emsp;Rp <?php echo number_format($total[$key], 0,',','.');?> </h4><br>
                                <a href="<?php echo site_url('detail_transaksi/').$order_send->orderID;?>" class="btn waves-effect waves-light btn-outline-info"> Tampilkan Rincian Pesanan </a>
                                <button class="btn waves-effect waves-light btn-outline-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainnya</button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" onclick="deleteConfrimation(<?php echo $order->orderID;?>);" style="cursor:pointer;">Batalkan Pesanan</button>
                                    <!-- <a class="dropdown-item" href="javascript:void(0)">Ubah Metode Pembayaran</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <?php }}else{echo "Tidak ada transaksi!";}?>
                </div>
                <div id="navpills-4" class="tab-pane">
                    <?php if(!empty($invoices_done)){
                        foreach($invoices_done as $key => $order_done){ ?>
                    <div class="row" style="background: #effff0;padding-bottom: 10px;border-bottom: 1px solid #dee2e6;">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="text-left" colspan="2" style="padding-bottom: 0rem;">
                                            <h3><?php echo $order_done->invoice;?></h3>
                                        </td>
                                        <td style="padding-bottom: 0rem;"><h4 style="color: #4798e8;font-size: 0.97rem;" class="text-right">Belum Dinilai</h4></td>
                                    </tr>
                                <?php foreach($transactions as $no => $transaction){ 
                                    if ($transaction->orderID == $order_done->orderID) {
                                    ?>
                                    <tr>
                                        <td style="width: 10%"> <img src="<?php echo base_url()?>assets/images/product/thumbnail/<?php echo $transaction->photo1;?>" style="width: 100%"/></td>
                                        <td style="width: 75%"><?php echo $transaction->productName;?>
                                            <p>
                                                <small>
                                                <?php echo $transaction->quantity." x Rp ".number_format($transaction->price/$transaction->quantity, 0,',','.')."<br>".$transaction->description;?>
                                                </small>
                                            </p>                                        </td>
                                        <td class="text-right">Rp <?php echo number_format($transaction->price, 0,',','.');?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="padding-bottom: 0rem;">
                                            <div class="text-left" style="font-size: 0.9em;">
                                                <p>
                                                    <?php echo $transaction->memberName;?>&emsp;
                                                    <button type="button" class="btn btn-sm waves-effect waves-light btn-info"><span class="btn-label"><i class="mdi mdi-message"></i></span> Chat </button>
                                                    <a href="<?php echo site_url('toko/'.$transaction->sellerID); ?>" target="_blank" class="btn btn-sm waves-effect waves-light btn-outline-info"> Kunjungi Toko </a>
                                                </p>
                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>
                                <?php $total[$key]=$total[$key]+$transaction->price;}}?>
                                </tbody>
                            </table>
                            <hr style="margin-top: -1%;">
                            <div class="text-right" style="margin-right: 20px;">
                                <h4 class="text-right" style="margin-top: -1%;margin-bottom: -1%;">Total Pesanan&emsp;Rp <?php echo number_format($total[$key], 0,',','.');?> </h4><br>
                                <a href="<?php echo site_url('detail_transaksi/').$order_done->orderID;?>" class="btn waves-effect waves-light btn-outline-info"> Tampilkan Rincian Pesanan </a>
                                <button class="btn waves-effect waves-light btn-outline-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainnya</button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" onclick="deleteConfrimation(<?php echo $order->orderID;?>);" style="cursor:pointer;">Batalkan Pesanan</button>
                                    <!-- <a class="dropdown-item" href="javascript:void(0)">Ubah Metode Pembayaran</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <?php }}else{echo "Tidak ada transaksi!";}?>
                </div>
                <div id="navpills-5" class="tab-pane">
                    <?php if(!empty($invoices_reject)){
                        foreach($invoices_reject as $key => $order_reject){ ?>
                    <div class="row" style="background: #effff0;padding-bottom: 10px;border-bottom: 1px solid #dee2e6;">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="text-left" colspan="2" style="padding-bottom: 0rem;">
                                            <h3><?php echo $order_reject->invoice;?></h3>
                                        </td>
                                        <td style="padding-bottom: 0rem;"><h4 style="color: #4798e8;" class="text-right">Batal</h4></td>
                                    </tr>
                                <?php foreach($transactions as $no => $transaction){ 
                                    if ($transaction->orderID == $order_reject->orderID) {
                                    ?>
                                    <tr>
                                        <td style="width: 10%"> <img src="<?php echo base_url()?>assets/images/product/thumbnail/<?php echo $transaction->photo1;?>" style="width: 100%"/></td>
                                        <td style="width: 75%"><?php echo $transaction->productName;?>
                                            <p>
                                                <small>
                                                <?php echo $transaction->quantity." x Rp ".number_format($transaction->price/$transaction->quantity, 0,',','.')."<br>".$transaction->description;?>
                                                </small>
                                            </p>                                        </td>
                                        <td class="text-right">Rp <?php echo number_format($transaction->price, 0,',','.');?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="padding-bottom: 0rem;">
                                            <div class="text-left" style="font-size: 0.9em;">
                                                <p>
                                                    <?php echo $transaction->memberName;?>&emsp;
                                                    <button type="button" class="btn btn-sm waves-effect waves-light btn-info"><span class="btn-label"><i class="mdi mdi-message"></i></span> Chat </button>
                                                    <a href="<?php echo site_url('toko/'.$transaction->sellerID); ?>" target="_blank" class="btn btn-sm waves-effect waves-light btn-outline-info"> Kunjungi Toko </a>
                                                </p>
                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>
                                <?php $total[$key]=$total[$key]+$transaction->price;}}?>
                                </tbody>
                            </table>
                            <hr style="margin-top: -1%;">
                            <div class="text-right" style="margin-right: 20px;">
                                <h4 class="text-right" style="margin-top: -1%;margin-bottom: -1%;">Total Pesanan&emsp;Rp <?php echo number_format($total[$key], 0,',','.');?> </h4><br>
                                <a href="<?php echo site_url('detail_transaksi/').$order_reject->orderID;?>" class="btn waves-effect waves-light btn-outline-info"> Tampilkan Rincian Pesanan </a>
                                <!-- <button class="btn waves-effect waves-light btn-outline-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainnya</button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" onclick="deleteConfrimation(<?php echo $order->orderID;?>);" style="cursor:pointer;">Batalkan Pesanan</button>
                                    <a class="dropdown-item" href="javascript:void(0)">Ubah Metode Pembayaran</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <hr>
                    <?php }}else{echo "Tidak ada transaksi!";}?>
                </div>
            </div>
        </div>
    </div>
    <!-- Column bagian kanan : selesai -->


</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
function deleteConfrimation(id) {
    swal({
          title: "Apa anda yakin?",
          text: "Setelah anda membatalkan pesanan, pesanan tidak akan dilanjutkan.",
          icon: "warning",
          buttons: true,
          dangerMode: true,
          buttons: ['Tidak', 'Ya'],
        })
        .then((willDelete) => {
          if (willDelete) {
            swal({title: "Berhasil!", text: "Pesanan anda berhasil dibatalkan.", icon: "success", type: 
                "success"}).then(function(){ 
                   window.location.href="<?php echo site_url('batal/')?>"+id;
                   }
                );
          } else {
            swal("Pesanan anda tidak dibatalkan!");
          }
        });
}

</script>