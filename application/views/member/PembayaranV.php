<div class="card">
	<div class='card-body'>
		<div class='container_page'>
			<div class='page'>
                <h3 class="text-center">Info Pembayaran</h3><br>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card border-info">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">ID Transaksi : 0000001</h4>
                            </div>
                            <div class="card-body">
                                <h5>Bank BNI &nbsp; <span>(Dicek Otomatis)</span></h5>
                                <div class="dropdown-divider"></div>

                                <p>No Rekening :</p>
                                <div class="text-left">
                                    <h3 >1234567890</h3>
                                    <a href="#"><h6 class="text-right" style="margin-top: -25px; color: #4798e8;">SALIN</h6></a>
                                </div>
                                <div class="dropdown-divider"></div>

                                <p style="color: #4798e8;">Dicek dalam 10 menit setelah pembayaran berhasil</p>
                                <p>Menerima trensfer dari semua bank termasuk Syariah <br>*Dapat dikenakan biaya transfer antar-bank dan limitasi transfer jika anda  transfer dari bank selain BNI</p>
                                
                                <br><p style="color: #4798e8;">Ikuti langkah berikut untuk trensfer dari bank BNI</p><br>

                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="font-size: 14px;">Petunjuk Transfer ATM</a>
                                            </h4>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse in ">
                                            <div class="panel-body">
                                            <p>1. Pilih Menu Lain > Transfer</p>
                                            <p>2. Pilih rekening asal dan pilih rekening tujuan ke rekening BNI</p>
                                            <p>3. Masukan nomor rekening 1234567890 dan pilih Benar</p>
                                            <p>4. Masukan jumlah pembayaran Rp 443893 dan pilih Benar</p>
                                            <p>5. Periksa data di layar. Pastikan nama adalah nama penerima di koperasi dan jumlah sudah benar. Jika benar, pilih ya</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="font-size: 14px;">Petunjuk Transfer iBanking</a>
                                            </h4>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                            <p>1. Pilih Transaksi > info & administrasi transfer > Atur rekening tujuan > Tambah rekening tujuan dan klik OK</p>
                                            <p>2. Pilih kode network & bank : Transfer antar rek BNI. Masukan nomor rekening <br>1234567890 dan klik lanjut. Isi data lainnya dan klik lanjutkan</p>
                                            <p>3. Cek detail konfirmasi. Pastikan nama adalah nama penerima anda - Koperasi Indonesia.<br> Masukan PIN BNI e-Secure anda lalu klik Proses</p>
                                            <p>4. Pilih Transaksi > Transfer > Transfer Antar Rek BNI</p>
                                            <p>5. Pilih rekening tujuan Sebagai rekening yang barusan disimpan. Masukan jumlah 443893. Lalu, klik Lanjutkan</p>
                                            <p>6. Cek detail konfirmasi. Pastikan nama rekening tujuan adalah nama penerima anda - Koperasi Indonesia dan jumlah transfer sudah benar. Masukan PIN BNI e-Secure anda dan klik proses</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="font-size: 14px;">Petunjuk Transfer mBanking</a>
                                            </h4>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                            <p>1. Pilih Transfer > Antar rekening BNI</p>
                                            <p>2. Pilih rekening Tujuan >Input rekening baru. Masukan 1234567890 sebagai nomor rekening. Klik lanjut, kemudian klik lanjut lagi</p>
                                            <p>3. Masukan Nominal 443893. Klik lanjut</p>
                                            <p>4. Periksa detail konfirmasi. Pastikan nama penerima adalah nama penerima anda - Koperasi Indonesia <br>dan nominal sudah benar. Jika benar, masukan password transaksi dan klik lanjutan.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <br><br>
                                <a href="#" class="btn btn-light" style="width: 100%;">Ubah Metode Pembayaran</a> <br><br>
                                <a href="#" class="btn btn-info" style="width: 100%;">OK</a> 
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
});


</script>