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
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/tittle.png">
    
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="img/avatar-1.jpg" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">ADMIN</h2><span>SMK N 1 INDRAMAYU</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>4</strong><strong class="text-primary">7</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="index.html"> <i class="icon-home"></i>Home </a></li>
            <li><a href="datasiswa.html"> <i class="icon-user"></i>Data Siswa </a></li>
            <li><a href="dataguru.html"> <i class="icon-user"></i>Data Guru </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Data User</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="userguru.html"> <i class="icon-user"></i>User Guru</a></li>
                <li><a href="usersiswa.html"> <i class="icon-user"></i>User Siswa</a></li>
              </ul>
            </li>
            <li><a href="datakelas.html"> <i class="icon-home"></i>Data Kelas </a></li>
            <li><a href="datajurusan.html"> <i class="icon-home"></i>Data Jurusan </a></li>
            <li><a href="rekapabsen.php"> <i class="icon-padnote"></i>Rekap Absen </a></li>
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
                  <div class="brand-text d-none d-md-inline-block"><span>Rekap Presensi </span><strong class="text-primary"> M-AFI</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                  </ul>
                </li>
                <li class="nav-item"><a href="login.html" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Rekap Presensi       </li>
          </ul>
        </div>
      </div>
      <section class="forms" style="padding-top: 50px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Pilih Tahun</h4>
                </div>
                <div class="card-body">
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <label class="col-sm-12"><b>Select</b></label>
                      <form method="get" role="form" action="rekapabsen.php?module=laporan">
<input type="hidden" name="module" value="laporan">


                                <div class="col-lg-4">
                                        
               
                                        <div class="form-group">
                                            <label>Tahun</label>
                                            <select class="form-control" name="tahun">
<?php 
$ht=2010;
while($ht<=2050){
  $to=$ht+1;
if(date("m")>=7){
  $e=$ht;
}else{
  $e=$to; 
}
if(date("Y")==$e){
  echo "<option selected>$ht-$to</option>"; 
}else{
  echo "<option>$ht-$to</option>";  
  
}
$ht++;
}?>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                               
                                <!-- /.col-lg-6 (nested) -->
                                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>All form elements</h4>
                </div>
                <div class="card-body">
                  <?php
                  $con = mysqli_connect("localhost", "root", "","sekolahku");
$sql=mysqli_query($con, "select * from siswa");
$rs=mysqli_fetch_array($sql);
$ids=$rs['ids'];
$pecah = explode("-", $_GET['tahun']);
$year2=$pecah[0];
$year3=$pecah[1];

?>
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><strong> <?php echo "$year2 - $year3"; ?></h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data Siswa <?php echo "$rs[nis] | $rs[nama] | ";
                    $sqlj=mysqli_query($con, "select * from kelas");
                    $rsj=mysqli_fetch_array($sqlj);
                    echo "Kelas $rsj[nama]";          
                    ?>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">

                        <div class="well">
                            <h4 class="text-center"><?php echo"Tahun $year2";  ?></h4>
                        </div>

                        <table class="table table-striped table-bordered table-hover">


                            <?php

                            $k=7;
                            $tp=12;


                            ?>


                            <?php while($k<=$tp){ 
                               $tanggal = date("F", mktime(0, 0, 0, $k, 1, $year2));
                               ?>
                               <tr>
                                <td colspan="32" class="text-center bg-info text-white"><?php echo $tanggal  ?></td>
                            </tr>
                            <tr>
                                <td class="bg-success text-white text-center" rowspan="1">Tanggal</td>
                            

                            <?php
                            $jml = cal_days_in_month(CAL_GREGORIAN, $k, $year2);
                            $yu=1;

                            while($yu<=$jml){ 
                                $kol=1;
                                if($yu<10){
                                    $dty="0$yu";
                                }else{
                                    $dty="$yu";
                                }
                                if($k<10){
                                    $blnn="0$k";
                                }else{
                                    $blnn="$k";
                                }
                                $tanggul="$dty-$blnn-$year2";

                                if (date("w", mktime(0, 0, 0, $blnn, $dty, $year2)) == 0){
                                    ?>                                      
                                   <td class="bg-danger text-white" align="center">

                                    <?php }else{
                                        echo "<td>";
                            
                                    }?>
                                    <?php echo $yu; ?>
                                    </td>

                                    <?php $yu++;} ?>
                                </tr>
                                <?php while ($rs = mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td>
                                        <?php echo "$rs[nama]"; ?>
                                    </td>
                                    <?php 
                                    $yu=1;
                                    while($yu<=$jml){ 
                                        if($yu<10){
                                            $dty="0$yu";
                                        }else{
                                            $dty="$yu";
                                        }
                                        if($k<10){
                                            $blnn="0$k";
                                        }else{
                                            $blnn="$k";
                                        }
                                        $tanggul="$dty-$blnn-$year2";

                                        $sqla=mysqli_query($con, "select * from absen");
                                        $rsa=mysqli_fetch_array($sqla);

                                        ?>

                                        <td class="text-center"><?php echo "$rsa[ket]"; ?></td>
                                        <?php $yu++;} ?>
                                </tr>
                                <?php } ?>
                                <?php $k++;} ?>                                </table>

                            </div>







                            <div class="well">
                                <h4 class="text-center"><?php echo"Tahun $year3";  ?></h4>
                            </div>


                            <div class="table-responsive">


                                <table class="table table-striped table-bordered table-hover">


                                    <?php

                                    $k=1;
                                    $tp=6;


                                    ?>


                                    <?php while($k<=$tp){ 
                                       $tanggal = date("F", mktime(0, 0, 0, $k, 1, $year3));
                                       ?>
                                       <tr>
                                        <td colspan="32" class="text-center bg-info text-white"><?php echo $tanggal  ?></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-success text-white text-center" rowspan="1">Tanggal</td>
                                    




                                    <?php
                                    $jml = cal_days_in_month(CAL_GREGORIAN, $k, $year3);
                                    $yu=1;

                                    while($yu<=$jml){ 
                                        $kol=1;
                                        if($yu<10){
                                            $dty="0$yu";
                                        }else{
                                            $dty="$yu";
                                        }
                                        if($k<10){
                                            $blnn="0$k";
                                        }else{
                                            $blnn="$k";
                                        }
                                        $tanggul="$dty-$blnn-$year3";

                                        if (date("w", mktime(0, 0, 0, $blnn, $dty, $year2)) == 0){
                                           ?>
                                           <td class="bg-danger text-white" align="center">

                                    <?php }else{
                                        echo "<td>";
                            
                                    }?>
                                    <?php echo $yu; ?>
                                    </td>

                                    <?php $yu++;} ?>
                                </tr>
                                <tr>
                                    <td>
                                        Keterangan
                                    </td>
                                    <?php 
                                    $yu=1;
                                    while($yu<=$jml){ 
                                        if($yu<10){
                                            $dty="0$yu";
                                        }else{
                                            $dty="$yu";
                                        }
                                        if($k<10){
                                            $blnn="0$k";
                                        }else{
                                            $blnn="$k";
                                        }
                                        $tanggul="$dty-$blnn-$year3";

                                        

                                        $sqla=mysqli_query($con, "select * from absen");
                                        $rsa=mysqli_fetch_array($sqla);

                                        ?>

                                        <td class="text-center"><?php echo "$rsa[ket]"; ?></td>
                                        <?php $yu++;} ?>
                                </tr>
                                        <?php $k++;} ?>                                </table>

                                    </div>




                                    <!-- /.table-responsive -->
                                    <div class="well">
                                        <h4>Keterangan Absensi</h4>
                                        <p>A = Tidak Masuk Tanpa Keterangan</p>
                                        <p>I = Tidak Masuk Ada Surat Ijin Atau Pemberitahuan</p>
                                        <p>S = Tidak Masuk Ada Surat Dokter Atau Pemberitahuan</p>
                                        <p>H = Hadir</p>
                                        <p class="text-info">Warna merah pada tabel menandakan hari minggu</p>

                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Production by Informatic Engineering <b class="external">POLINDRA</b></p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Copyright &copy by <b class="external">M-AFI</b></p>
            </div>
          </div>
        </div>
      </footer>
      
    </div>
    <!-- Javascript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>