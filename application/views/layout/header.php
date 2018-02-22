<!DOCTYPE html>
<html lang="en" class="wide smoothscroll wow-animation">
<head>
  <!-- Site Title-->
  <title>Home</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,900">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="<?php echo base_url(); ?>assets/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
  <![endif]-->
</head>
<body>
  <!-- Page-->
  <div class="page text-center">
    <!-- Page Header-->
    <div>
      <header class="page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap bg-gray-dark">
          <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-sm-stick-up-offset="1px" data-md-stick-up-offset="1px" data-lg-stick-up-offset="1px" class="rd-navbar">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a href="index.html" class="reveal-inline-block brand-name"><img src="<?php echo base_url(); ?>assets/images/logo.png" width="200" height="55" alt="" class="img-responsive center-block"></a></div>
              </div>
              <div class="rd-navbar-nav-wrap">

                <?php 
                $halaman = apache_getenv("HTTP_HOST") . apache_getenv("REQUEST_URI");
                $home1 = 'localhost/travelwuz/';
                $home2 = 'localhost/travelwuz/home';
                $login = 'localhost/travelwuz/login';

                ?>

                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li <?php if ($halaman==($home1)||$halaman==($home2)) {echo "class='active'"; } ?> >
                    <a href=<?php echo base_url();?>>Home</a>
                  </li>
                  <li><a href=<?php echo base_url("#");?>>About</a>
                    <li><a href=<?php echo base_url("#");?>>Contacts</a></li>
                    <?php if ($this->session->userdata('status')!='login') { ?>
                    <li <?php if ($halaman==$login) {echo "class='active'"; } ?>><a href=<?php echo base_url("login");?> >Log in</a></li>
                    <?php } ?>
                    <?php if ($this->session->userdata('status')=='login') { ?>
                    <li><a href="#"><?php echo $this->session->userdata('fullname'); ?></a>
                      <ul class="rd-navbar-dropdown">
                        <li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
                      </ul>
                    </li>
                    <?php } ?>

                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </header>