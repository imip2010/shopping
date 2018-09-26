<?php
// print_r($detail_member);
	// foreach ($post as $key=>$value) {
	// 	print_r($value);
	// }
?>
<div class="col-sm-12 col-md-12 align-self-center" style="margin-top: 2%;">
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
	<h4 class="card-title">Detail Transaksi</h4>
	<ul class="nav nav-pills m-t-30 m-b-30">
		<li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Data Penerima</a> </li>
		<li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Kurir Pengiriman</a> </li>
		<li class="nav-item"> <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">Konfirmasi</a> </li>
	</ul>
	<div class="tab-content br-n pn">
		<div id="navpills-1" class="tab-pane active">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Alamat Penerima</h4>
					<h6 class="card-subtitle">Perhatikan baik-baik agar tidak terjadi kesalahan pengiriman</h6>
					<form class="m-t-20 form-horizontal" method="post" action="<?php echo base_url('MemberC/update_members')?>">
						<div class="form-group row col-md-6">
							<label for="inputHorizontalSuccess" class="col-sm-3 col-form-label">Nama Lengkap</label>
							<div class="col-sm-8">
								<input type="text" class="form-control is-valid" id="nama" name="nama" value="<?php echo $detail_member->memberName;?>">
								<input type="hidden" class="form-control is-valid" id="memberID" name="memberID" value="<?php echo $detail_member->memberID;?>">
								<br>
								<div class="valid-feedback"></div>
							</div>
							<label for="inputHorizontalSuccess" class="col-sm-3 col-form-label">Email</label>
							<div class="col-sm-8">
								<input type="email" class="form-control is-valid" id="email" name="email" value="<?php echo $detail_member->email;?>">
								<br>
								<div class="valid-feedback"></div>
							</div>
							<label for="inputHorizontalSuccess" class="col-sm-3 col-form-label">Nomor Telpon</label>
							<div class="col-sm-8">
								<input type="text" class="form-control is-valid" id="phone"  name="phone" value="<?php echo $detail_member->phone;?>">
								<br>
								<div class="valid-feedback"></div>
							</div>
							<label for="inputHorizontalSuccess" class="col-sm-3 col-form-label">Provinsi</label>
							<div class="col-sm-8">
								<select class="form-control" id="provinsi" name="provinsi">
									<option value="">----pilih provinsi----</option>
									<?php
									foreach ($all_province as $prov) {
										if($prov['provinceID'] == $detail_member->provinceID){
											?>
											<option selected value="<?php echo $prov['provinceID']?>"><?php echo $prov['provinceName']?></option>
											<?php
										}else{
											?>
											<option  value="<?php echo $prov['provinceID']?>"><?php echo $prov['provinceName']?></option>
											<?php
										}
									}
									?>
								</select>
								<br>
								<div class="valid-feedback"></div>
							</div>
							<label for="inputHorizontalSuccess" class="col-sm-3 col-form-label">Kota</label>
							<div class="col-sm-8">
								<select class="form-control" id="kota" name="kota" style="display: none;">
									<option value="">----pilih kota----</option>
								</select>

								<select class="form-control" id="kota2" name="kota2">
									<option value="<?php echo $detail_member->cityID;?>"><?php echo $detail_member->cityName;?></option>
								</select>
								<br>
								<div class="valid-feedback"></div>
							</div>
							<label for="inputHorizontalSuccess" class="col-sm-3 col-form-label">Alamat</label>
							<div class="col-sm-8">
								<textarea class="form-control is-valid ckeditor" id="address" name="address"><?php echo $detail_member->address?>
							</textarea> 
							<br>
							<button class="btn btn-info waves-effect waves-light" type="submit"><span class="btn-label"><i class="fa fa-check"></i></span> Update</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="navpills-2" class="tab-pane">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Jasa Ekspedisi</h4>
				<h6 class="card-subtitle">Silahkan pilih jasa ekspedisi / kurir yang disediakan, pemilihan ekspedisi dan kurir ditentukan oleh sistem sesuai dengan alamat pengiriman, tidak semua kota dijangkau oleh jasa kurir / ekspedisi tertentu, oleh karena itu kami hanya menampilkan daftar kurir / ekspedisi yang tersedia dikota Anda.</h6>
				<form class="m-t-20 form-horizontal">
					<div class="form-group row col-md-6">
						<label for="inputHorizontalSuccess" class="col-sm-3 col-form-label">Jasa Ekspedisi</label>
						<div class="col-sm-8">
							<select class="form-control" id="exampleFormControlSelect1">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
							<br>
							<div class="valid-feedback"></div>
						</div>
						<label for="inputHorizontalSuccess" class="col-sm-3 col-form-label">Kota</label>
						<div class="col-sm-8">
							<select class="form-control" id="exampleFormControlSelect1">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
							<br>
							<div class="valid-feedback"></div>
						</div>
						<label for="inputHorizontalSuccess" class="col-sm-3 col-form-label">Alamat</label>
						<div class="col-sm-8">
							<br>
							<button class="btn btn-primary waves-effect waves-light" type="button"><span class="btn-label"><i class="fa fa-check"></i></span> Proses</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="navpills-3" class="tab-pane">
	</div>
</div>
</div>


<script src="<?php echo base_url()?>assets/libs/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
        // City change
        $('#provinsi').change(function(){
            var provinsi = $(this).val(); //ambil value dr provinsi
            // window.alert(unit);

            // AJAX request
            $.ajax({
            	url:'<?=base_url()?>MemberC/get_city',
            	method: 'post',
                data: {provinceID: provinsi}, // data post ke controller 
                dataType: 'json',
                success: function(response){
                    // Remove options
                    $('#kota').find('option').not(':first').remove();

                    // Add options
                    $.each(response,function(daftar,data){
                    	$('#kota').append('<option value="'+data['cityID']+'">'+data['cityName']+'</option>');
                    });
                }
            });
        });
    });

	$('#provinsi').on('change', function() {
	  //  alert( this.value ); // or $(this).val()
	  $('#kota2').hide();
	  $('#kota').show();
	});
</script>
