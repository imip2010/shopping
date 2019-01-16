<?php $total=0;?>
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
                    <?php foreach($invoices as $key => $order){ ?>
                    <div class="row" style="background: #effff0;">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="text-left" colspan="2" style="padding-bottom: 0rem;">
                                            <h3><?php echo $order->invoice;?></h3>
                                        </td>
                                        <td style="padding-bottom: 0rem;"><h4 style="color: #4798e8;" class="text-right">Belum Bayar</h4></td>
                                    </tr>
                                <?php foreach($transactions as $no => $transaction){ ?>
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
                                                    <button type="button" class="btn btn-sm waves-effect waves-light btn-outline-info"> Kunjungi Toko </button>
                                                </p>
                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>
                                <?php $total=$total+$transaction->price;}?>
                                </tbody>
                            </table>
                            <hr style="margin-top: -1%;">
                            <div class="text-right" style="margin-right: 20px;">
                                <h4 class="text-right" style="margin-top: -1%;margin-bottom: -1%;">Total Pesanan&emsp;Rp <?php echo number_format($total, 0,',','.');?> </h4><br>
                                <button type="button" class="btn waves-effect waves-light btn-info"> Transfer Sekarang </button>
                                <button type="button" class="btn waves-effect waves-light btn-outline-info"> Tampilkan Rincian Barang </button>
                                <button class="btn waves-effect waves-light btn-outline-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainnya</button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0)">Batalkan Pesanan</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Ubah Metode Pembayaran</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <br>
                </div>
            </div>

<!--             <div class="tab-content br-n pn">
                <div id="navpills-1" class="tab-pane active">
                    <?php 
                    if(!empty($pending_t)){
                    foreach($pending_t as $order){?>
                    <div class="row">
                        <div class="table-responsive">
                            <form action=" " method="post">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><h5>Nama Toko</h5></td>
                                            <td class="text-left">
                                                <button type="button" class="btn waves-effect waves-light btn-info"><span class="btn-label"><i class="mdi mdi-message"></i></span> Chat </button>
                                                <button type="button" class="btn waves-effect waves-light btn-outline-info"> Kunjungi Toko </button>
                                            </td>
                                            <td><h4 style="color: #4798e8;" class="text-right">Belum Bayar</h4></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10%"> <img src="<?php echo base_url()?>assets/images/img3.jpg" style="width: 100%"/></td>
                                            <td style="width: 75%"><?php echo $order->productID;?> <p><?php echo $order->quantity;?></p> </td>
                                            <td class="text-right">Rp <?php echo number_format($order->price, 0,',','.');?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-right" style="margin-right: 20px;">
                                    <button type="button" class="btn waves-effect waves-light btn-info"> Transfer Sekarang </button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-info" ><a href="<?php echo base_url()?>CobaC/detailrincian" > Tampilkan Rincian Barang </a></button>
                                    <button class="btn waves-effect waves-light btn-outline-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainnya</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0)">Batalkan Pesanan</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Ubah Metode Pembayaran</a>
                                    </div>
                                </div>
                            </form><br><br>
                        </div>
                    </div>
                    <?php }}else{echo "Transaksi Kosong!";}?>
                </div>
                <div id="navpills-2" class="tab-pane">
                    <?php 
                    if(!empty($packing_t)){
                    foreach($packing_t as $order){?>
                    <div class="row">
                        <div class="table-responsive">
                            <form action=" " method="post">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><h5>Nama Toko</h5></td>
                                            <td class="text-left">
                                                <button type="button" class="btn waves-effect waves-light btn-info"><span class="btn-label"><i class="mdi mdi-message"></i></span> Chat </button>
                                                <button type="button" class="btn waves-effect waves-light btn-outline-info"> Kunjungi Toko </button>
                                            </td>
                                            <td><h4 style="color: #4798e8;" class="text-right">Belum Dikirimkan</h4></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10%"> <img src="<?php echo base_url()?>assets/images/img3.jpg" style="width: 100%"/></td>
                                            <td style="width: 75%"><?php echo $order->productID;?> <p><?php echo $order->quantity;?></p> </td>
                                            <td class="text-right">Rp <?php echo number_format($order->price, 0,',','.');?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-right" style="margin-right: 20px;">
                                    <button type="button" class="btn waves-effect waves-light btn-info"> Transfer Sekarang </button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-info"> Tampilkan Rincian Barang </button>
                                    <button class="btn waves-effect waves-light btn-outline-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainnya</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0)">Batalkan Pesanan</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Ubah Metode Pembayaran</a>
                                    </div>
                                </div>
                            </form><br><br>
                        </div>
                    </div>
                    <?php }}else{echo "Transaksi Kosong!";}?>
                </div>
                <div id="navpills-3" class="tab-pane">
                    <?php
                    if(!empty($deliver_t)){
                    foreach($deliver_t as $order){?>
                    <div class="row">
                        <div class="table-responsive">
                            <form action=" " method="post">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><h5>Nama Toko</h5></td>
                                            <td class="text-left">
                                                <button type="button" class="btn waves-effect waves-light btn-info"><span class="btn-label"><i class="mdi mdi-message"></i></span> Chat </button>
                                                <button type="button" class="btn waves-effect waves-light btn-outline-info"> Kunjungi Toko </button>
                                            </td>
                                            <td><h4 style="color: #4798e8;" class="text-right">Belum Diterima</h4></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10%"> <img src="<?php echo base_url()?>assets/images/img3.jpg" style="width: 100%"/></td>
                                            <td style="width: 75%"><?php echo $order->productID;?> <p><?php echo $order->quantity;?></p> </td>
                                            <td class="text-right">Rp <?php echo number_format($order->price, 0,',','.');?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-right" style="margin-right: 20px;">
                                    <button type="button" class="btn waves-effect waves-light btn-info"> Transfer Sekarang </button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-info"> Tampilkan Rincian Barang </button>
                                    <button class="btn waves-effect waves-light btn-outline-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainnya</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0)">Batalkan Pesanan</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Ubah Metode Pembayaran</a>
                                    </div>
                                </div>
                            </form><br><br>
                        </div>
                    </div>
                    <?php }}else{echo "Transaksi Kosong!";}?>
                </div>
                <div id="navpills-4" class="tab-pane">
                    <?php 
                    if(!empty($done_t)){
                    foreach($done_t as $order){?>
                    <div class="row">
                        <div class="table-responsive">
                            <form action=" " method="post">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><h5>Nama Toko</h5></td>
                                            <td class="text-left">
                                                <button type="button" class="btn waves-effect waves-light btn-info"><span class="btn-label"><i class="mdi mdi-message"></i></span> Chat </button>
                                                <button type="button" class="btn waves-effect waves-light btn-outline-info"> Kunjungi Toko </button>
                                            </td>
                                            <td><h4 style="color: #4798e8;" class="text-right">Belum Dinilai</h4></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10%"> <img src="<?php echo base_url()?>assets/images/img3.jpg" style="width: 100%"/></td>
                                            <td style="width: 75%"><?php echo $order->productID;?> <p><?php echo $order->quantity;?></p> </td>
                                            <td class="text-right">Rp <?php echo number_format($order->price, 0,',','.');?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-right" style="margin-right: 20px;">
                                    <button type="button" class="btn waves-effect waves-light btn-info"> Transfer Sekarang </button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-info"> Tampilkan Rincian Barang </button>
                                    <button class="btn waves-effect waves-light btn-outline-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainnya</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0)">Batalkan Pesanan</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Ubah Metode Pembayaran</a>
                                    </div>
                                </div>
                            </form><br><br>
                        </div>
                    </div>
                    <?php }}else{echo "Transaksi Kosong!";}?>
                </div
                <div id="navpills-5" class="tab-pane">
                    <?php 
                    if(!empty($reject_t)){
                    foreach($reject_t as $order){?>
                    <div class="row">
                        <div class="table-responsive">
                            <form action=" " method="post">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><h5>Nama Toko</h5></td>
                                            <td class="text-left">
                                                <button type="button" class="btn waves-effect waves-light btn-info"><span class="btn-label"><i class="mdi mdi-message"></i></span> Chat </button>
                                                <button type="button" class="btn waves-effect waves-light btn-outline-info"> Kunjungi Toko </button>
                                            </td>
                                            <td><h4 style="color: #4798e8;" class="text-right">Batal</h4></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 10%"> <img src="<?php echo base_url()?>assets/images/img3.jpg" style="width: 100%"/></td>
                                            <td style="width: 75%"><?php echo $order->productID;?> <p><?php echo $order->quantity;?></p> </td>
                                            <td class="text-right">Rp <?php echo number_format($order->price, 0,',','.');?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-right" style="margin-right: 20px;">
                                    <button type="button" class="btn waves-effect waves-light btn-info"> Transfer Sekarang </button>
                                    <button type="button" class="btn waves-effect waves-light btn-outline-info"> Tampilkan Rincian Barang </button>
                                    <button class="btn waves-effect waves-light btn-outline-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lainnya</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0)">Batalkan Pesanan</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Ubah Metode Pembayaran</a>
                                    </div>
                                </div>
                            </form><br><br>
                        </div>
                    </div>
                    <?php }}else{echo "Transaksi Kosong!";}?>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Column bagian kanan : selesai -->


</div>