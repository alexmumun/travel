<?php
$halaman = 'peran';
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
        <aside class="main-sidebar sidebar-dark-white elevation-4" style="background-color: #0000CD;">
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
                            <br />
                            <div class="card">
                                <div class="card-header" style="background-color:#0000CD;">
                                    <h3 class="card-title">
                                        <font color="#ffffff">
                                            <i class="fas fa-users nav-icon"></i>
                                            Data Master Peran
                                    </h3>
                                    </font>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-danger btn-md" data-toggle="modal"
                                        style="background-color:#0000CD;" data-target="#modal-tambah"><i
                                            class="fas fa-plus"></i>
                                        Tambah Data Peran</button>

                                    <table id="example1" name="example1"
                                        class="table table-sm table-hover table-bordered table-striped deta">
                                        <thead>
                                            <tr>
                                                <th bgcolor="#ffffff" style="width:5%">
                                                    <font color="#000000">NO</font>
                                                </th>
                                                <th bgcolor="#ffffff">
                                                    <font color="#000000">PERAN </font>
                                                </th>
                                                <th bgcolor="#ffffff">
                                                    <center>
                                                        <font color="#000000">AKSI</font>
                                                    </center>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                     $no  = 1;
                      $query = "SELECT * FROM tb_master_peran ORDER BY Id ASC";

                            $sql_pengguna = mysqli_query($con, $query) or die (mysqli_error($con));

                            if (mysqli_num_rows($sql_pengguna) > 0 )
                            {
                             while($data = mysqli_fetch_array($sql_pengguna))
                             {
                                  ?>
                                            <tr>
                                                <td>
                                                    <?=$no++;?>
                                                </td>

                                                <td>
                                                    <h6>
                                                        <?=$data['peran'];?>
                                                    </h6>
                                                </td>



                                                <td>
                                                    <center>

                                                        <button type="button" class="btn btn-primary btn-xs"
                                                            data-toggle="modal" data-id="<?=$data['id']?>"
                                                            data-user="<?=$data['peran']?>" data-target="#modal-edit"><i
                                                                class="fas fa-edit"></i>
                                                        </button>

                                                        <a href="hapus.php?id=<?=$data['id'];?>"
                                                            onclick="return confirm('Anda akan menghapus data kandang  [ <?=$data['peran'];?> ] ?')"
                                                            class="btn btn-danger btn-xs"><i class="fas fa-trash"></i>
                                                        </a>
                                                </td>
                                                </center>



                                            </tr>

                                            <?php
                            }

                          }
                          else
                          {
                            echo "<tr><td colspan=\"11\" align=\"center\"><h6>Data Tidak Ditemukan!</h6></td></tr>";
                          }

                            ?>



                                        </tbody>
                                    </table>






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
                        <div class="modal-header" style="background-color:#0000CD;">
                            <h4 class="modal-title">
                                <font color="#ffffff"><i class="fas fa-user-circle"></i> Tambah Peran</font>
                            </h4>
                        </div>
                        <form class="form-horizontal" action="tambahperan.php" method="POST" id="peranan">
                            <div class="modal-body">

                                <div class="col-md-12">
                                    <!-- Horizontal Form -->
                                    <div class="card card-info">
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-12 control-label">peran</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="peran" id="peran"
                                                        required>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- /.card-body -->
                                        <div class="modal-footer justify-content-between"
                                            style="background-color:#e5eaf0;">
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><i
                                                    class="fas fa-times"></i></button>
                                            <button type="submit" name="insertdata" class="btn btn-secondary"
                                                style="background-color:#0000CD"><i class="fas fa-download"></i> Simpan
                                                Data</button>
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



    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#0000CD;">
                    <h4 class="modal-title">
                        <font color="#ffffff"><i class="fas fa-edit"></i> Edit Master Peran</font>
                    </h4>
                </div>
                <form class="form-horizontal" action="edit.php" method="POST" id="peranan">
                    <div class="modal-body">

                        <div class="col-md-12">
                            <!-- Horizontal Form -->
                            <div class="card card-info">
                                <!-- /.card-header -->
                                <!-- form start -->
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="hidden" class="form-control" name="ided">
                                            <!-- <input type="text" class="form-control" name="usered"> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-12 control-label">Peran</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="peran">
                                        </div>
                                    </div>


                                    <!-- /.card-body -->
                                    <div class="modal-footer justify-content-between" style="background-color:#e5eaf0;">
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i
                                                class="fas fa-times"></i></button>
                                        <button type="submit" name="editmodal" class="btn btn-secondary"
                                            style="background-color:#0000CD"><i class="fas fa-edit"></i> Edit
                                            Data</button>
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


    <script type="text/javascript">
    $('#modal-edit').on('show.bs.modal', function(e) {

        //get data-id attribute of the clicked element

        var id = $(e.relatedTarget).data('id');
        var username = $(e.relatedTarget).data('user');
        var nama = $(e.relatedTarget).data('nama');


        $(e.currentTarget).find('input[name="ided"]').val(id);
        $(e.currentTarget).find('input[name="usered"]').val(username);
        $(e.currentTarget).find('input[name="namaed"]').val(nama);
        $(e.currentTarget).find('input[name="usered2"]').val(username);




    });
    </script>
</body>

</html>