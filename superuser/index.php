<?php
$halaman = 'home';
require_once "../config/database.php";
if (isset($_SESSION['id']))
{
    if ($_SESSION['peran']!="admin")
      {
        unset($_SESSION['peran']);
        unset($_SESSION['username']);
        unset($_SESSION['nama']);
        unset($_SESSION['Id']);
       echo "<script>window.location='../login/logout.php';</script>";    
      } 
      else
      {
        
      }
 }
 else
 {
   echo "<script>window.location='../login';</script>"; 
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
  include '../linksheet-admin.php';
  ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../img/icon.png" alt="UPB" height="200" width="200">
        </div> -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>


            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <!-- Notifications Dropdown Menu -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user-circle"></i>

                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-lock mr-2"></i> Ganti Password

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="../login/logout.php" class="dropdown-item">
                            <i class="fas fa-sign-out-alt mr-2"></i> Keluar Aplikasi

                        </a>

                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #0000CD;">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link" style="background-color: #ffffff;">
                <img src="../img/ayam.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: 1.0">
                <span class="brand-text font-weight-light">
                    <font color="black"><b>TIKET TRAVEL</b></font>
                </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <?php
        include '../menu-admin.php';
        ?>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <p>
                            <h5>Assalamuaiakum dan Salam sejahtera, selamat datang <?= $_SESSION['nama'];?></h5>
                            </p>

                        </section>
                        <!-- right col -->
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
        </div>
        <?php
  include '../footer.php';
  ?>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <?php
  include '../script-admin.php';
  ?>
</body>

</html>