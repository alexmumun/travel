<?php
$halaman = 'pengguna';
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
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../img/icon.png" alt="UPB" height="200" width="200">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" >
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
   <aside class="main-sidebar sidebar-dark-white elevation-4" style="background-color: #860a0e;" >
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="background-color: #ffffff;">
      <img src="../img/icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 1.0">
      <span class="brand-text font-weight-light"><font color="black"><b>SKRIPSIKU</b></font></span>
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
          <section class="col-lg-5 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
          <br/>
             <div class="card">
              <div class="card-header" style="background-color:#860a0e;">
                <h3 class="card-title">
                  <font color="#ffffff">
                <i class="fas fa-users nav-icon"></i>  
                Data Pengguna
                </h3>
              </font>
            </h3>
            </div>
                <div class="card-body">

                  <a href="../superuser-pengguna"  class="btn btn-info btn-sm"><i class="fas fa-chevron-left"></i> Kembali </a> 

                    <?php
                    $username = @$_GET['pengguna'];
                    $id       = @$_GET['id'];
                    $namauser = @$_GET['nama'];
                    ?>

                    <form class="form-horizontal" action="edit.php" method="POST" id="peranan">
                      <div class="modal-body">
                            <div class="col-md-12">
                              <!-- Horizontal Form -->
                              <div class="card card-info">
                                <!-- /.card-header -->
                                <!-- form start -->
                                  <div class="card-body">
                                     <div class="row">
                                      <div class="col-sm-12">
                                        <!-- text input -->
                                     <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-12 control-label">Username</label>
                                      <div class="col-sm-12">
                                        <input type="hidden" class="form-control" name="id" id="id" value="<?=$id;?>" >
                                        <input type="hidden" class="form-control" name="user" id="user" value="<?=$username;?>">
                                       <input type="text" class="form-control" name="user2" id="user2" value="<?=$username;?>" disabled>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-12 control-label">Nama Admin</label>
                                      <div class="col-sm-12">
                                       <input type="text" class="form-control" name="nama" id="nama" value="<?=$namauser;?>" required>
                                      </div>
                                    </div>    
                                  
                                  </div>

                  <button type="submit" name="edit" class="btn btn-danger btn-md btn-block" style="background-color:#860a0e;" ><i class="fas fa-edit"></i>
                    Update Data</button>


                    </div>
                    </form>
                    <!-- /.modal-content -->
                  </div>
                  </div>
              </form>




             
           

                </div>


                




          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

      <div class="modal fade" id="modal-tambah">
                  <div class="modal-dialog modal-md">
                    <div class="modal-content">
                      <div class="modal-header" style="background-color:#860a0e;">
                        <h4 class="modal-title"><font color="#ffffff"><i class="fas fa-user-circle"></i> Tambah Pengguna Administrator</font></h4>
                      </div>
                        <form class="form-horizontal" action="tambahpengguna.php" method="POST" id="peranan">
                      <div class="modal-body">
                        
                            <div class="col-md-12">
                              <!-- Horizontal Form -->
                              <div class="card card-info">
                                <!-- /.card-header -->
                                <!-- form start -->
                                  <div class="card-body">
                                     <div class="row">
                                      <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                          <label>RT</label>
                                          <input type="text" name="rt" class="form-control" placeholder="RT">
                                        </div>
                                      </div>
                                      <div class="col-sm-6">
                                        <div class="form-group">
                                          <label>RW</label>
                                          <input type="text" name="rw" class="form-control" placeholder="RW">
                                        </div>
                                      </div>
                                    </div>
                                     <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-12 control-label">Username</label>
                                      <div class="col-sm-12">
                                       <input type="text" class="form-control" name="user" id="user" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-12 control-label">Nama Admin</label>
                                      <div class="col-sm-12">
                                       <input type="text" class="form-control" name="nama" id="nama" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-12 control-label">Jenis Kelamin</label>
                                      <div class="col-sm-12">
                                       <select class="form-control" name="jeniskelamin" id="jenikelamin">
                                          <option>Pria</option>
                                          <option>Wanita</option>
                                        </select>
                                      </div>
                                    </div>



                                    
                                    <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-12 control-label">Password</label>
                                      <div class="col-sm-12">
                                       <input type="password" class="form-control" name="pw" id="pw" required>
                                       <input type="checkbox" onclick="myFunction()"> Tampilkan Password
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="inputEmail3" class="col-sm-12 control-label">Ketik Ulang Password</label>
                                      <div class="col-sm-12">
                                       <input type="password" class="form-control" name="pw2" id="pw2" required>
                                       <input type="checkbox" onclick="myFunction2()"> Tampilkan Password
                                      </div>
                                    </div>
                                    
                                 
                                  </div>


                                  <!-- /.card-body -->  
                      <div class="modal-footer justify-content-between" style="background-color:#e5eaf0;">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fas fa-times"></i></button>
                        <button type="submit" name="insertdata" class="btn btn-secondary" style="background-color:#860a0e"><i class="fas fa-download"></i> Simpan Data</button>
                      </div>
                    </div>
                    </form>
                    <!-- /.modal-content -->
                  </div>
                  </div>
              </form>
            </div>
          </div>
        </div>





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
