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
    <title>Marketlace -- Koperasi</title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/libs/raty-js/lib/jquery.raty.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/libs/morris.js/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/dist/css/style.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/dist/css/pulsa.css" rel="stylesheet">
    <!-- This Page CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/libs/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/libs/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/libs/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/extra-libs/prism/prism.css">


    <link href="<?php echo base_url()?>assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/libs/jquery-steps/steps.css" rel="stylesheet">

    
    <link href="<?php echo base_url()?>assets/dist/css/wizard.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/dist/js/wizard.js" rel="stylesheet">




    <!-- This page plugin CSS -->
    <link href="<?php echo base_url()?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style type="text/css">
    #lblCartCount {
        font-size: 12px;
        background: #ff0000;
        color: #fff;
        padding: 0 5px;
        vertical-align: top;
        margin: 5px 0px 0px -10px;
        padding-left: 7px;
        padding-right: 7px;
        -webkit-border-radius: 9px;
        -moz-border-radius: 9px;
        border-radius: 9px;
    }
    /* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
    background: radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0, .8));

  background: -webkit-radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0,.8));
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 1500ms infinite linear;
  -moz-animation: spinner 1500ms infinite linear;
  -ms-animation: spinner 1500ms infinite linear;
  -o-animation: spinner 1500ms infinite linear;
  animation: spinner 1500ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="<?php echo base_url()?>">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url()?>assets/images/Arnawa_Apps Logo_1.png" alt="homepage" style="width: 100%" />
                        </b>
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti-more"></i>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                            <i class="sl-icon-menu font-20"></i>
                        </a>
                    </li>
                    <!-- ============================================================== -->
                    <!-- mega menu -->
                    <!-- ============================================================== --> 
                    <?php 
                    // print_r($dataDiri);
                    if($logged_in == 1){
                        ?>

                        <li class="nav-item dropdown" id="dp-cart">
                          <!--   <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-shopping-cart font-20"></i>
                            </a> -->
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="<?php echo site_url('MemberC/beli_barang/').$dataDiri['memberID'];?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dp-xp-cart">
                                <i class="ti-shopping-cart font-20"></i>
                                <span class="badge badge-warning" id="lblCartCount"> </span>
                                <!-- <div class="basket-item-count"><span class="count">2</span></div> -->
                            </a>
                            <div class="dropdown-menu mailbox animated bounceInDown" aria-labelledby="2" id="dp-list-cart">
                                <span class="with-arrow">
                                    <span class="bg-info"></span>
                                </span>
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title bg-info text-white">
                                            <h4 class="m-b-0 m-t-5">Keranjang Anda</h4>
                                        </div>
                                    </li>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <div id="detail_cart"></div>
                                            <!-- <li>
                                                <a href="#" >
                                                    <div class="message-body  " style=" margin-left: 20px;">
                                                        <h5><img src="<?php echo base_url()?>assets/images/kategori/handphone.png" />&nbsp Handphone</h5>
                                                    </div>
                                                </a>
                                            </li> -->
                                        </div>
                                    </div>
                                    <li>
                                    </li>
                                        <!-- <hr/> -->
                                        <h4 style="float: right; margin-right: 20px; font-size: 1rem;">
                                            <a href="<?php echo site_url('beli_barang/').$dataDiri['memberID'];?>" class="btn btn-info btn-sm" style="padding: 6px 8px 6px 8px; color: #FFF;">Tampilkan Keranjang Belanja</a>
                                        </h4>
                                    </li>
                                </ul>
                            </div>
                        </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-bell font-20"></i>

                                </a>
                                <div class="dropdown-menu mailbox animated bounceInDown">
                                    <span class="with-arrow">
                                        <span class="bg-info"></span>
                                    </span>
                                    <ul class="list-style-none">
                                        <li>
                                            <div class="drop-title bg-info text-white">
                                                <h4 class="m-b-0 m-t-5">Notifications</h4>
                                            </div>
                                        </li>
                                        <li>
                                        </li>
                                        <li>
                                            <a class="nav-link text-center m-b-5" href="javascript:void(0);">
                                                <strong>Check all notifications</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="font-20 ti-split-h"></i>

                                </a>
                                <div class="dropdown-menu mailbox animated bounceInDown" aria-labelledby="2">
                                    <span class="with-arrow">
                                        <span class="bg-info"></span>
                                    </span>
                                    <ul class="list-style-none">
                                        <li>
                                            <div class="drop-title bg-info text-white">
                                                <h4 class="m-b-0 m-t-5">Transaksi</h4>
                                            </div>
                                        </li>
                                        <li>
                                        </li>
                                        <li>
                                            <a class="nav-link text-center link" href="javascript:void(0);">
                                                <b>See all e-Mails</b>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <?php
                        }
                        ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="font-20 ti-angle-double-down"></i>

                            </a>
                            <div class="dropdown-menu mailbox animated bounceInDown" aria-labelledby="2">
                                <span class="with-arrow">
                                    <span class="bg-info"></span>
                                </span>
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title bg-info text-white">
                                            <h4 class="m-b-0 m-t-5">Kategori</h4>
                                        </div>
                                    </li>

                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <?php 
                                            // print_r($menu_kategori);
                                            foreach ($menu_kategori as $kategori) {
                                                ?>
                                                <li>
                                                    <a href="<?php echo base_url()?>kategori" >
                                                        <div class="message-body  " style=" margin-left: 20px;">
                                                            <h5><img src="<?php echo base_url()?>assets/images/kategori/<?php echo $kategori->icons;?>" /><?php echo " ".$kategori->categoryName;?></h5>
                                                        </div>
                                                    </a>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- KATEGORI : SELESAI -->
                        <!-- ============================================================== -->


                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <i class="ti-search font-16"></i>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->

                        
                        <!-- ============================================================== -->
                        <!-- Menu Toko : mulai -->
                        <!-- ============================================================== -->
                        <?php 
                        if($logged_in == 1){
                            ?>
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ti-home font-20"></i>

                                </a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                    <span class="with-arrow">
                                        <span class="bg-info"></span>
                                    </span>
                                    <div class="d-flex no-block align-items-center p-15 bg-info text-white m-b-10">
                                        <div class="">
                                            <img src="<?php echo base_url()?>assets/images/users/1.jpg" alt="user" class="img-circle" width="60">
                                        </div>
                                        <div class="m-l-10">
                                            <h4 class="m-b-0"><?php echo $dataDiri['nama']?></h4>
                                            <p class=" m-b-0"><?php echo $dataDiri['address']?></p>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="ti-home m-r-5 m-l-5"></i>Toko Saya
                                    </a>
                                    <a class="dropdown-item" href="<?php echo site_url('jual_barang')?>">
                                        <i class="ti-wallet m-r-5 m-l-5"></i> Jual Barang
                                    </a>
                                    <a class="dropdown-item" href="<?php echo site_url('daftar_barang')?>">
                                        <i class="ti-settings m-r-5 m-l-5"></i> Daftar Barang
                                    </a>
                                    <a class="dropdown-item" href="<?php echo site_url('labelbarang')?>">
                                        <i class="ti-bookmark-alt m-r-5 m-l-5"></i> Label Barang
                                    </a>
                                    <a class="dropdown-item" href="<?php echo site_url('labelbarang')?>">
                                        <i class="ti-home m-r-5 m-l-5"></i> Courier
                                    </a>
                                </div>
                            </li>
                            <?php
                        }
                        ?>


                        <?php 
                        if($logged_in == 1){
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img src="<?php echo base_url()?>assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class="">
                                        <img src="<?php echo base_url()?>assets/images/users/1.jpg" alt="user" class="img-circle" width="60">
                                    </div>
                                    <div class="m-l-10">
                                        <h4 class="m-b-0"><?php echo $dataDiri['nama'];?></h4>
                                        <p class=" m-b-0"><?php echo $dataDiri['email'];?></p>
                                    </div>
                                </div>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="ti-wallet m-r-5 m-l-5"></i> Saldo Saya Rp. 20.000</a>
                                        <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo site_url('transaksi');?>">
                                        <i class="ti-shopping-cart m-r-5 m-l-5"></i> Belanjaan Saya</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo site_url('pengaturan_profile');?>">
                                            <i class="ti-settings m-r-5 m-l-5"></i> Pengaturan Profil</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="ti-bookmark-alt m-r-5 m-l-5"></i> Ulasan</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0)">
                                                    <i class="mdi mdi-star-circle m-r-5 m-l-5"></i> Favorite</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="<?php echo site_url('LoginC/log_out');?>">
                                                        <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                                        <div class="dropdown-divider"></div>
                                                        <div class="p-l-30 p-10">
                                                            <a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php
                                            }else{
                                                ?>
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle waves-effect waves-dark font-20" href="<?php echo site_url('/masuk')?>">Login</a>
                                                </li>
                                                <?php
                                            }
                                            ?>

                                            <!-- ============================================================== -->
                                            <!-- Menu Toko : selesai -->
                                            <!-- ============================================================== -->


                                            <!-- ============================================================== -->
                                            <!-- User profile : mulai -->
                                            <!-- ============================================================== -->
                                            <!-- ============================================================== -->
                                            <!-- User profile : selesai -->
                                            <!-- ============================================================== -->

                                            <!-- ============================================================== -->
                                            <!-- Label Login : MULAI -->
                                            <!-- ============================================================== -->

                                            <!-- ============================================================== -->
                                            <!-- Label Login : SELESAI -->
                                            <!-- ============================================================== -->


                                        </ul>
                                    </div>
                                </nav>
                            </header>
                            <!-- ============================================================== -->
                            <!-- End Topbar header -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Left Sidebar - style you can find in sidebar.scss  -->
                            <!-- ============================================================== -->
                            <aside class="left-sidebar">
                                <!-- Sidebar scroll-->
                                <div class="scroll-sidebar">
                                    <!-- Sidebar navigation
                                    <nav class="sidebar-nav">
                                        <ul id="sidebarnav">
                                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Pencarian Populer</span><i class="ti-angle-left"></i></a></li>
                                            <?php
                                            foreach ($produk_terpopuler as $produk_populer) {
                                                ?>
                                                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu"><?php echo $produk_populer->productName?> </span><i class="ti-angle-right"></i></a></li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </nav> End Sidebar navigation -->
                                </div>
                                <!-- End Sidebar scroll-->
                            </aside>
                            <!-- ============================================================== -->
                            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- Page wrapper  -->
                            <!-- ============================================================== -->
                            <div class="page-wrapper">


                                <!-- ================================================================================================================== -->
                                <!-- START  CONTENT -->
                                <!-- ================================================================================================================== -->

                                <section class="content">

                                    <?php 
                                    echo $isi; 
                                    ?>

                                </section>

                                <!-- ================================================================================================================== -->
                                <!-- END  CONTENT -->
                                <!-- ================================================================================================================== -->


                                <!-- ============================================================== -->
                                <!-- FOOTER (INFO KOPERASI) : MULAI -->
                                <!-- ============================================================== -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card  bg-light no-card-border">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="row">
                                                        <div clas="col-lg-2 col-md-12 m-r-10" style="margin-left: 70px;">
                                                            <h4 class="m-b-0">Informasi</h4><br>
                                                            <p>About Us</p>
                                                            <p>Shipp & Returns</p>
                                                            <p>Contact Us </p>
                                                            <p>Testimonials</p>
                                                        </div>

                                                        <div clas="col-lg-2 col-md-12 m-r-10" style="margin-left: 70px;">
                                                            <h4 class="m-b-0">Customer Service</h4><br>
                                                            <p>Helps & FAQS</p>
                                                            <p>Terms of Condition</p>
                                                            <p>Privacy Policy </p>
                                                            <p>Partners</p>
                                                        </div>

                                                        <div clas="col-lg-2 col-md-12 m-r-10" style="margin-left: 70px;">
                                                            <h4 class="m-b-0">Penjual</h4><br>
                                                            <p>Cara Berjualan</p>
                                                            <p>Keuntungan Berjualan</p>
                                                            <p>Tips Berjualan </p>
                                                        </div>

                                                        <div clas="col-lg-2 col-md-12 m-r-10" style="margin-left: 70px;">
                                                            <h4 class="m-b-0">Pembeli</h4><br>
                                                            <p>Cara Belanja</p>
                                                            <p>Pembayaran</p>
                                                            <p>Jaminan Aman </p>
                                                        </div>

                                                        <div clas="col-lg-4 col-md-12 m-r-10" style="margin-left: 70px;">
                                                            <h4 class="m-b-0">Berlangganan</h4><br>
                                                            <p>Informasi & berita terupdate akan dikirim ke email kamu</p>
                                                            <div class="row">
                                                                <div class="col-sm-12 col-md-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="email" maxlength="30" placeholder="email@gmail.com">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-6">
                                                                    <div class="form-group">
                                                                        <button type="submit" class="btn btn-info ">Simpan</button> 
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
                                <!-- ============================================================== -->
                                <!-- FOOTER (INFO KOPERASI) : SELESAI -->
                                <!-- ============================================================== -->
                                <!-- ============================================================== -->
                                <!-- footer -->
                                <!-- ============================================================== -->
                                <footer class="footer ">
                                    <div class="d-flex align-items-center" >
                                        <div class="m-r-10">
                                            <p>Temukan Kami di :</p>
                                            <button class="btn btn-facebook waves-effect btn-circle waves-light" type="button"> <i class="fab fa-facebook"></i> </button>
                                            <button class="btn btn-twitter waves-effect btn-circle waves-light" type="button"> <i class="fab fa-twitter"></i> </button>
                                            <button class="btn btn-googleplus waves-effect btn-circle waves-light" type="button"> <i class="fab fa-google-plus"></i> </button>
                                            <button class="btn btn-linkedin waves-effect btn-circle waves-light" type="button"> <i class="fab fa-linkedin"></i> </button>
                                            <button class="btn btn-instagram waves-effect btn-circle waves-light" type="button"> <i class="fab fa-instagram"></i> </button>
                                            <button class="btn btn-pinterest waves-effect btn-circle waves-light" type="button"> <i class="fab fa-pinterest"></i> </button>
                                            <button class="btn btn-dribbble waves-effect btn-circle waves-light" type="button"> <i class="fab fa-dribbble"></i> </button>
                                            <button class="btn btn-youtube waves-effect btn-circle waves-light" type="button"> <i class="fab fa-youtube"></i> </button>
                                        </div>
                                        <div style="margin-left: 35%;">
                                            <p>@2018 Marketplace Koperasi. Designed and Developed by<a href="https://arnintech.co.id" >Arnintech</a>.</p>
                                        </div>
                                    </div><br>
                                </footer>
                                <!-- ============================================================== -->
                                <!-- End footer -->
                                <!-- ============================================================== -->
                            </div>
                            <!-- ============================================================== -->
                            <!-- End Page wrapper  -->
                            <!-- ============================================================== -->
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Wrapper -->
                        <!-- ============================================================== -->


                        <!-- ============================================================== -->
                        <!-- All Jquery -->
                        <!-- ============================================================== -->
                        <script src="<?php echo base_url()?>assets/libs/jquery/dist/jquery.min.js"></script>
                        <!-- Bootstrap tether Core JavaScript -->
                        <script src="<?php echo base_url()?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
                        <script src="<?php echo base_url()?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
                        <!-- apps -->
                        <script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>
                        <script src="<?php echo base_url()?>assets/dist/js/pulsa.js"></script>
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
                        <!--This page JavaScript -->
                        <!--chartis chart-->
                        <script src="<?php echo base_url()?>assets/libs/chartist/dist/chartist.min.js"></script>
                        <script src="<?php echo base_url()?>assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
                        <!--c3 charts -->
                        <script src="<?php echo base_url()?>assets/extra-libs/c3/d3.min.js"></script>
                        <script src="<?php echo base_url()?>assets/extra-libs/c3/c3.min.js"></script>
                        <!--chartjs -->
                        <script src="<?php echo base_url()?>assets/libs/raphael/raphael.min.js"></script>
                        <!-- <script src="<?php echo base_url()?>assets/libs/morris.js/morris.min.js"></script> -->

                        <script src="<?php echo base_url()?>assets/libs/raty-js/lib/jquery.raty.js"></script>

                        <!-- <script src="<?php echo base_url()?>assets/dist/js/pages/dashboards/dashboard1.js"></script> -->
                        <!-- This Page JS -->
                        <script src="<?php echo base_url()?>assets/libs/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
                        <script src="<?php echo base_url()?>assets/libs/nestable/jquery.nestable.js"></script>
                        <script src="<?php echo base_url()?>assets/extra-libs/DataTables/datatables.min.js"></script>

                        <script src="<?php echo base_url()?>assets/dist/js/pages/datatable/datatable-basic.init.js"></script>
                        <script src="<?php echo base_url()?>assets/extra-libs/prism/prism.js"></script>

                        
                        <script src="<?php echo base_url()?>assets/libs/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
                        <script src="<?php echo base_url()?>assets/libs/moment/moment.js"></script>
                        <script src="<?php echo base_url()?>assets/libs/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker-custom.js"></script>

                        <script src="<?php echo base_url()?>assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
                        <script src="<?php echo base_url()?>assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
                        
                        
                        <script>
                            //==================================================//
                            //                  Normal Touchspin                //
                            //==================================================//
                            $("input[name='demo3']").TouchSpin();
                        </script>


                        <script>
                            //Custom design form example
                            $(".tab-wizard").steps({
                                headerTag: "h6",
                                bodyTag: "section",
                                transitionEffect: "fade",
                                titleTemplate: '<span class="step">#index#</span> #title#',
                                labels: {
                                    finish: "Submit"
                                },
                                onFinished: function(event, currentIndex) {
                                    swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");

                                }
                            });
                        </script>
                        

                        <script>
                        // MAterial Date picker    
                        $('#pergi').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
                        $('#pulang').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
                        $('#checkin').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
                        $('#checkout').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
                        $('#timepicker').bootstrapMaterialDatePicker({ format: 'HH:mm', time: true, date: false });
                        $('#date-format').bootstrapMaterialDatePicker({ format: 'dddd DD MMMM YYYY - HH:mm' });

                        $('#min-date').bootstrapMaterialDatePicker({ format: 'DD/MM/YYYY HH:mm', minDate: new Date() });
                        $('#date-fr').bootstrapMaterialDatePicker({ format: 'DD/MM/YYYY HH:mm', lang: 'fr', weekStart: 1, cancelText: 'ANNULER' });
                        $('#date-end').bootstrapMaterialDatePicker({ weekStart: 0 });
                        $('#date-start').bootstrapMaterialDatePicker({ weekStart: 0 }).on('change', function(e, date) {
                            $('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
                        });
                        </script>
    
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('#mytable').DataTable();
 
                                // Load shopping cart
                                $('#detail_cart').load("<?php echo base_url();?>Cart/show_cart");
                                // Load number of shopping cart
                                $('#lblCartCount').load("<?php echo base_url();?>Cart/cart_count");
                                $('#tabel_cek_ongkir').load("<?php echo base_url();?>HomeC/cek_ongkir/");
                            });
                        </script>
<!--                         <script>
                            $(function() {
                            // Nestable
                            var updateOutput = function(e) {
                                var list = e.length ? e : $(e.target),
                                output = list.data('output');
                                if (window.JSON) {
                                        output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
                                    } else {
                                        output.val('JSON browser support required for this demo.');
                                    }
                                };

                                $('#nestable').nestable({
                                    group: 1
                                }).on('change', updateOutput);

                                $('#nestable2').nestable({
                                    group: 1
                                }).on('change', updateOutput);

                                updateOutput($('#nestable').data('output', $('#nestable-output')));
                                updateOutput($('#nestable2').data('output', $('#nestable2-output')));

                                $('#nestable-menu').on('click', function(e) {
                                    var target = $(e.target),
                                    action = target.data('action');
                                    if (action === 'collapse-all') {
                                        $('.dd').nestable('collapseAll');
                                    }
                                    if (action === 'expand-all') {
                                        $('.dd').nestable('expandAll');
                                    }
                                });

                                $('#nestable-menu').nestable();
                            });
                        </script> -->
                        


                    </body>

                    </html>