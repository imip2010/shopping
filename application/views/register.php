<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/images/Arnawa_Apps icon.png">
    <title>Daftarkan Koperasi Anda -- Koperasi</title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?php echo base_url()?>assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box">
                <div>
                    <div class="logo">
                        <span class="db"><img src="<?php echo base_url()?>assets/images/Arnawa_Apps Logo.png" alt="logo" style="width: 50%;" /></span><br><br><br>
                        <h2 class="font-medium m-b-20" style="color: #4798e8;">FORM REGISTRASI KOPERASI</h2>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-md-12">
                                <form class="form p-t-20" action="<?php echo base_url('Register/register')?>" method="post" onSubmit="return validate()">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Koperasi</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control form-control-lg" required=" " placeholder="Nama Koperasi" name="nama_koperasi" id="nama_koperasi" >
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="ti-home"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Koperasi</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control form-control-lg" required=" " placeholder="Alamat Koperasi" name="alamat_koperasi" id="alamat_koperasi" >
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Kode Pos</label>
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control form-control-lg" required=" " placeholder="Kode Pos" name="kode_pos" id="kode_pos" >
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="ti-location-pin"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Anggota</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control form-control-lg" required=" " placeholder="Jumlah Anggota" name="jumlah_anggota" id="jumlah_anggota" >
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="mdi-account-multiple"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label>Nama Pengurus</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control form-control-lg" required=" " placeholder="Nama Pengurus" name="nama_pengurus" id="nama_pengurus" >
                                                    <div class="input-group-append">
                                                        <span class="input-group-text"><i class="ti-user"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nomor Handphone/Telephone</label>
                                            <div class="input-group mb-3">
                                                <input  class="form-control form-control-lg" required=" " placeholder="No.Handphone" name="no_hp" id="no_hp" type="number" >
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="ti-mobile"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email </label>
                                            <div class="input-group mb-3">
                                                <input type="email" class="form-control form-control-lg" required=" " placeholder="Email" name="email" id="email" >
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="ti-email"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <div class="input-group mb-3">
                                                <input class="form-control form-control-lg" type="password" required=" " placeholder="Confirm Password" name="password" id="password" >
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="ti-lock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <div class="input-group mb-3">
                                                <input class="form-control form-control-lg" type="password" required=" " placeholder="Confirm Password" name="confirmpass" id="confirmpass">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="ti-lock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group"><br>
                                            <h3 style="color: #4798e8;">Pilih Fitur Koperasi Anda</h3>
                                        </div>
                                        
                                        <div class="form-group row ">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="fitur[]" id="shopping" value="shopping">
                                                    <label class="custom-control-label" for="shopping">Shopping</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="ppob" name="fitur[]" value="ppob" >
                                                    <label class="custom-control-label" for="ppob">PPOB</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="simpin" name="fitur[]" value="simpin">
                                                    <label class="custom-control-label" for="simpin">Simpan Pinjam</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="travel" name="fitur[]" value="travel">
                                                    <label class="custom-control-label" for="travel">Travel</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="forum" name="fitur[]" value="forum">
                                                    <label class="custom-control-label" for="forum">Forum</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="event" name="fitur[]" value="event">
                                                    <label class="custom-control-label" for="event">Event</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="pos" name="fitur[]" value="pos">
                                                    <label class="custom-control-label" for="pos">Point Of Sales</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="news" name="fitur[]" value="news">
                                                    <label class="custom-control-label" for="news">News</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <p>Dengan klik daftar, kamu telah menyetujui &nbsp<a href="#">Aturan Penggunaan</a>&nbsp dan &nbsp<a href="#">Kebijakan Privasi</a>&nbsp dari koperasi</p>
                                        </div>

                                        <div class="form-group ">
                                            <button class="btn btn-block btn-lg btn-info" type="submit" name="simpan" id="simpan">Daftar</button>
                                        </div>
                                    </div>

                                </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">SELAMAT !</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <p>Anda Berhasil Mendaftarkan Koperasi Anda.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>



        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url()?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url()?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>
    <script src="<?php echo base_url()?>assets/dist/js/app.init.horizontal-fullwidth.js"></script>
    <script src="<?php echo base_url()?>assets/dist/js/app-style-switcher.horizontal.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url()?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()?>assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url()?>assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url()?>assets/dist/js/custom.min.js"></script>
    <script src="<?php echo base_url()?>assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip "]').tooltip();
    $(".preloader ").fadeOut();
    </script>

    <script type="text/javascript">
            $(function () {
                $("#simpan").click(function () {
                    var password = $("#password").val();
                    var confirmPassword = $("#confirmpass").val();
                    var pass_length = password.length;
                    if (password != confirmPassword) {
                        alert("Kata sandi tidak sama.");
                    // document.getElementById("demo").innerHTML = "Kata sandi tidak sama.";
                    return false;
                }else{
                    if(pass_length < 6){
                        alert("Panjang Kata sandi minimal 6 karakter");
                        return false;
                    }else{
                        if(pass_length > 50){
                            alert("Panjang Kata sandi maksimal 50 karakter");
                            return false;
                        }else{
                            return true;
                        }
                    }
                }
            });
            });
        </script>

        
<script language="javascript">
function validate()
{
var chks = document.getElementsByName('fitur[]');
var hasChecked = false;
for (var i = 0; i < chks.length; i++)
{
    if (chks[i].checked)
    {
    hasChecked = true;
    break;
    }
}

if (hasChecked == false)
    {
    alert("Silahkan pilih minimal satu fitur.");
    return false;
    }

return true;
}
</script>


</body>

</html>