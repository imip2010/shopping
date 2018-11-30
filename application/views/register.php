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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/images/favicon.png">
    <title>Market Place -- Koperasi</title>
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
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?php echo base_url()?>assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box">
                <div>
                    <div class="logo">
                        <span class="db"><img src="<?php echo base_url()?>assets/images/logo-icon.png" alt="logo" /></span>
                        <h5 class="font-medium m-b-20">Sign Up</h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
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
                          <form class="form-horizontal m-t-20" action="<?php echo site_url('LoginC/post_register')?>" method="post">
                            <div class="form-group row ">
                                <div class="col-12 ">
                                    <input class="form-control form-control-lg" name="username" type="text" required=" " placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 ">
                                    <input class="form-control form-control-lg" name="email" type="email" required=" " placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 ">
                                    <input class="form-control form-control-lg" name="fullName" type="text" required=" " placeholder="Full Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 ">
                                    <input class="form-control form-control-lg" name="phone" type="text" required=" " placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 ">
                                    <input class="form-control form-control-lg" name="password" type="password" required=" " placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12 ">
                                    <input class="form-control form-control-lg" name="confirm_password" type="password" required=" " placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="form-group text-center ">
                                <div class="col-xs-12 p-b-20 ">
                                    <button class="btn btn-block btn-lg btn-info " type="submit ">SIGN UP</button>
                                </div>
                            </div>
                            <div class="form-group m-b-0 m-t-10 ">
                                <div class="col-sm-12 text-center ">
                                    Already have an account? <a href="<?php echo site_url('LoginC')?> " class="text-info m-l-5 "><b>Sign In</b></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->
<script src="<?php echo base_url()?>assets/libs/jquery/dist/jquery.min.js "></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url()?>assets/libs/popper.js/dist/umd/popper.min.js "></script>
<script src="<?php echo base_url()?>assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
<script>
    $('[data-toggle="tooltip "]').tooltip();
    $(".preloader ").fadeOut();
</script>
</body>

</html>