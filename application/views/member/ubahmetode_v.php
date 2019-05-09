
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


<div class="col-lg-12">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Metode Pembayaran</h4>
                </div>
                <div class="card-body">
                    <table class="table-bordered" style="background: rgba(184, 184, 184, 0.03);">
                        <tbody>
                            <div class="col-md-12">
                                <div class="panel-group"  id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                              <div class="radio">
                                                <label>
                                                  <input  type="radio" name="metode" id="kredit" >
                                                  <a onclick="check1()" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Kartu Kredit/Debit Online </a> &nbsp;
                                                  <img src="<?php echo base_url()?>assets/images/payments.png" style="width: 20%;">
                                                </label>
                                              </div>
                                            </h4>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                              <p>Credits kamu Rp0 <br><br>Credits kamu tidak mencukupi untuk membayar transaksi ini. Silakan pilih metode pembayaran lainnya.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                              <div class="radio">
                                                <label>
                                                  <input  type="radio" name="metode" id="atm" >
                                                  <a onclick="check2()" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Transfer Bank </a> &nbsp;
                                                  <img src="<?php echo base_url()?>assets/images/atm.png" style="width: 40%;">
                                                </label>
                                              </div>
                                            </h4>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                              <p>Ketentuan pembayaran : <br>
                                                <ul>
                                                  <li>Pembayaran dapat dilakukan melalui transfer ke rekening Bank BCA, Bank Mandiri, Bank Syariah Mandiri, Bank BNI, atau Bank BRI.</li>
                                                  <li>Total belanja kamu belum termasuk kode pembayaran untuk keperluan proses verifikasi otomatis</li>
                                                  <li>Mohon transfer tepat sampai 3 digit terakhir</li>
                                                </ul>
                                              </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                              <div class="radio">
                                                <label>
                                                  <input  type="radio" name="metode" id="va" >
                                                  <a onclick="check3()" data-toggle="collapse" data-parent="#accordion" href="#collapse3">Transfer Virtual Account </a> &nbsp;
                                                  <img src="<?php echo base_url()?>assets/images/atm.png" style="width: 40%;">
                                                </label>
                                              </div>
                                            </h4>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                              <label >Pilih bank penyedia virtual account :</label>
                                              <select class="form-control" >
                                                <option> Virtual Account BNI <img src="<?php echo base_url()?>assets/images/bni.png"></option>
                                                <option>Virtual Account BCA</option>
                                                <option>Virtual Account Mandiri</option>
                                                <option>Virtual Account CIMB Niaga</option>
                                              </select>
                                              <p>Ketentuan pembayaran : <br>
                                                <ul>
                                                  <li>Satu nomor virtual account hanya berlaku untuk satu akun (tidak berubah-ubah).</li>
                                                  <li>Pembayaran dengan virtual account hanya berlaku untuk satu tagihan terbaru.</li>
                                                  <li>Tagihan dapat terbayar jika kamu melakukan pembayaran dengan nominal tepat atau lebih (sisa kelebihan uang pembayaran akan masuk ke BukaDompet milikmu).</li>
                                                  <li>Jika nominal yang kamu bayar kurang, uang pembayaran akan dikembalikan sepenuhnya ke BukaDompet kamu, dan status tagihan belum terbayar (menunggu pembayaran).</li>
                                                  <li>Kamu dapat melakukan pembayaran ulang sampai dengan batas waktu pembayaran yang ditentukan.</li>
                                                </ul>
                                              </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                              <div class="radio">
                                                <label>
                                                  <input  type="radio" name="metode" id="indomaret" >
                                                  <a onclick="check4()" data-toggle="collapse" data-parent="#accordion" href="#collapse4">Indomaret </a> &nbsp;
                                                  <img src="<?php echo base_url()?>assets/images/indomaret.png" style="width: 10%;">
                                                </label>
                                              </div>
                                            </h4>
                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse">
                                            <div class="panel-body">
                                              <p>Ketentuan pembayaran : <br>
                                                <ul>
                                                  <li>Pembayaran dapat dilakukan di gerai Indomaret terdekat pilihan kamu.</li>
                                                  <li>Tunjukkan Nomor Tagihan kepada kasir Indomaret.</li>
                                                  <li>Pihak Indomaret akan mengenakan biaya tambahan sebesar Rp2.500 di luar total tagihan.</li>
                                                  <li>Maksimum total belanja untuk satu transaksi adalah Rp5.000.000</li>
                                                </ul>
                                              </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                              <div class="radio">
                                                <label>
                                                  <input  type="radio" name="metode" id="alfa" >
                                                  <a onclick="check5()" data-toggle="collapse" data-parent="#accordion" href="#collapse5">Alfamart </a> &nbsp;
                                                  <img src="<?php echo base_url()?>assets/images/alfa.png" style="width: 10%;">
                                                </label>
                                              </div>
                                            </h4>
                                        </div>
                                        <div id="collapse5" class="panel-collapse collapse">
                                            <div class="panel-body">
                                              <p>Ketentuan pembayaran : <br>
                                                <ul>
                                                  <li>Pembayaran dapat dilakukan di salah satu gerai Alfamart, Alfamidi, Lawson, & Dan+Dan terdekat pilihan kamu.</li>
                                                  <li>Tunjukkan Nomor Tagihan kepada kasir.</li>
                                                  <li>Pihak Alfamart akan mengenakan biaya tambahan sebesar Rp2.500 di luar total tagihan.</li>
                                                  <li>Maksimum total belanja untuk satu transaksi adalah Rp3.500.000.</li>
                                                </ul>
                                              </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>

                            <a href="#" class="btn btn-primary waves-effect waves-light btn-outline-info" style="width:100%;"> Kirimkan </a>

                        </tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
function check1() {
  document.getElementById("kredit").checked = true;
}
function check2() {
  document.getElementById("atm").checked = true;
}
function check3() {
  document.getElementById("va").checked = true;
}
function check4() {
  document.getElementById("indomaret").checked = true;
}
function check5() {
  document.getElementById("alfa").checked = true;
}
</script>