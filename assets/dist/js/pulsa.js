$( document ).ready(function() {


	$('.nominal-1').on("click", function(){
	  var duit_dipilih=$(this)[0].textContent;

	  $('#duit').text(duit_dipilih);

	  $('#pulsa').val(duit_dipilih);

	  $('.nominal-1').removeClass( "pulsa-dipilih" );
	  $(this).addClass( "pulsa-dipilih" );
	});

	// ganti gambar operator

	// xl:background-position: 25px -182px;

	$('#nomor').on('keyup', function(){
		var nomor = $(this).val();
		$('#nomortelpon').val(nomor);
		if(nomor.startsWith("0877")){
			$('#logoop').css("background-position", "25px -182px");
		}
		else if(nomor.startsWith("0811") || nomor.startsWith("0812")){
			$('#logoop').css("background-position", "10px -151px");
		}
		else if(nomor.startsWith("0899")){
			$('#logoop').css("background-position", "10px -1px");
		}
		else {
			$('#logoop').css("background-position", "");
		}
	});

});