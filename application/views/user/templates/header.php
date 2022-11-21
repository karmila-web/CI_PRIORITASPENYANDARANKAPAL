<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <title>Sistem Pendukung Keputusan Penyandaran Kapal | PELINDO IV</title>

    <!-- Icon Pelindo for title -->
    <link rel="icon" href="<?= base_url() ?>assets/images/LOGO3.png" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" />

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/custom-font/fonts.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css" />
    <!-- Bootsnav -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootsnav.css" />
    <!-- Fancybox -->
    <link rel="stylesheet" type="<?= base_url() ?>assets/text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css" />
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Preloader -->

    <!-- Header -->
    <header>
      <!-- Top Navbar -->
      <div class="top_nav">
        <div class="container">
          <ul class="list-inline info">
            <li>
              <a href="#"><span class="fa fa-phone"></span> (0411) 3616549</a>
            </li>
            <li>
              <a href="#"><span class="fa fa-envelope"></span> info@pelindo.co.id</a>
            </li>
          </ul>
          <ul class="list-inline social_icon">
            <li>
              <a href=""> <i class="fa fa-sign-out"></i> <b>Logout </b></a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Top Navbar end -->

      <!-- Navbar -->
      <nav class="navbar bootsnav">
        <div class="container">
          <!-- Header Navigation -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
              <i class="fa fa-bars"></i>
            </button>
            <!-- <br /> -->
            <a class="navbar-brand" href=""><img class="logo" src="<?= base_url() ?>assets/images/LOGO2.png" alt="" /></a>
          </div>
          <!-- Navigation -->
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav menu">
              <li><a href="<?= base_url() ?>controller_user/">Home</a></li>
              <li><a href="<?= base_url() ?>controller_user/contact">Contact</a></li>
              <li><a href="<?= base_url() ?>controller_user/team">Developer Team</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar end -->
    </header>
    <!-- Header end -->