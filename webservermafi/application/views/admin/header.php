<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Webserver | Mobile - Attendance Fingerprint</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/css/table.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/css/table.min.css">
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url(''); ?>assets/img/tittle.png">
    <!-- JQuery -->
    <script src="<?php echo base_url(''); ?>assets/vendor/jquery/jquery.min.js"></script>
    <!-- TinyMCE/Textarea -->
    <script type="text/javascript" src="<?php echo base_url(''); ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
      tinyMCE.init({
        selector: "textarea"
      })
    </script>
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="<?php echo base_url(''); ?>assets/img/avatar-1.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">ADMIN</h2><span>SMK N 1 INDRAMAYU</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>4</strong><strong class="text-primary">7</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="<?php echo base_url('Admin/dashboard') ?>"> <i class="icon-home"></i>Home </a></li>
            <li><a href="<?php echo base_url('Datasiswa/read') ?>"> <i class="icon-user"></i>Data Siswa </a></li>
            <li><a href="<?php echo base_url('Dataguru/read') ?>"> <i class="icon-user"></i>Data Guru </a></li>
            <li><a href="#datauser" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Data User</a>
              <ul id="datauser" class="collapse list-unstyled ">
                <li><a href="<?php echo base_url('Datauser/readusersiswa') ?>"> <i class="icon-user"></i>User Siswa</a></li>
                <li><a href="<?php echo base_url('Datauser/readuserguru') ?>"> <i class="icon-user"></i>User Guru</a></li>
                <li><a href="<?php echo base_url('Datauser/readuserortu') ?>"> <i class="icon-user"></i>User Orang tua</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url('Datakelas') ?>"> <i class="icon-home"></i>Data Kelas </a></li>
            <li><a href="<?php echo base_url('Datajurusan') ?>"> <i class="icon-home"></i>Data Jurusan </a></li>
            <li><a href="#datapresensi" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Data Presensi</a>
              <ul id="datapresensi" class="collapse list-unstyled ">
                <li><a href="<?php echo base_url('Datapresensi/readizinsiswa') ?>"> <i class="icon-rss-feed"></i>Izin Siswa</a></li>
                <li><a href="<?php echo base_url('Datapresensi/readrekap') ?>"> <i class="icon-padnote"></i>Rekap Absen</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                <div class="brand-text d-none d-md-inline-block"><span>Dashboard </span><strong class="text-primary"> M-AFI</strong></div></a></div>
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                  <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                    <ul aria-labelledby="notifications" class="dropdown-menu">
                      <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                          <div class="msg-profile icon-rss-feed" style="font-size: 40px"></div>
                          <div class="msg-body">
                            <h3 class="h5">Jono</h3><span>Izin Siswa</span><small>2018-03-14 09:51:34</small>
                          </div></a></li>
                      <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                          <div class="msg-profile icon-rss-feed" style="font-size: 40px"></div>
                          <div class="msg-body">
                            <h3 class="h5">Joni</h3><span>Izin Siswa</span><small>2018-03-14 09:51:34</small>
                          </div></a></li>
                      <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                          <div  class="msg-profile icon-rss-feed" style="font-size: 40px"></div>
                          <div class="msg-body">
                            <h3 class="h5">Jona</h3><span>Izin Siswa</span><small>2018-03-14 09:51:34</small>
                          </div></a></li>
                      <li><a rel="nofollow" href="<?php echo base_url('Datapresensi/readizinsiswa'); ?>" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Lihat semua pesan</strong></a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a href="<?php echo base_url('Admin'); ?>" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
                </ul>
            </div>
          </div>
        </nav>
      </header>