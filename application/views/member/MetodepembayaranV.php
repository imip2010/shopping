<div class="card">
	<div class='card-body'>
		<div class='container_page'>
			<div class='page'>
                <h3>Metode Pembayaran</h3>
                <div class="row">
                    <div class="col-md-6">
                        <label class="m-t-20">Pilih Kurir :</label><br>
                        <select class="select2 form-control custom-select" >
                            <option>Pilih Kurir </option>
                            <option value="AK">JNE Reg (2-3 hari kerja)</option>
                            <option value="AK">JNT Reg (2-3 hari kerja)</option>
                            <option value="AK">JNE ekspress</option>
                            <option value="AK">Pos</option>
                        </select><br>

                        <label class="m-t-20">Catatan Tambahan :</label><br>
                        <textarea class="form-control" maxlength="200" style="height: 150px;"></textarea>
                        <p class="text-right">200 karakter</p>
                        
                        <div class="card border-info">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Alamat Pengiriman</h4>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Alamat Kantor</h5>
                                <p class="card-text">Graha KAS (Lantai 3 PT.Arnawa),Kota Jakarta Selatan</p>
                                <p class="card-text">Kecamatan Kebayoran Baru, Kota Jakarta Selatan</p>
                                <p class="card-text">DKI Jakarta</p>
                                <p class="card-text">081269305494</p>
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
                                    <select class="select2 form-control custom-select">
                                        <option>Pilih Bank</option>
                                            <option value="AK">BNI (112345678)</option>
                                            <option value="HI">BRI (098765432)</option>
                                            <option value="HI">Mandiri (345672342)</option>
                                            <option value="CA">BCA (234568809)</option>
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
                                        <h5 class="card-title">3.500.000</h5>
                                        <h5 class="card-title">18.000</h5>
                                        <h5 class="card-title">3.518.000</h5>
                                    </div>
                                    <div>
                                        <a href="<?php echo site_url('CobaC/pembayaran')?>" class="btn btn-info" style="width: 250px;">Lanjut Pembayaran</a> 
                                        <a href="<?php echo site_url('CobaC/pembayaran')?>"><span class="text-right"> Gunakan Kode Voucher ? </span></a>
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