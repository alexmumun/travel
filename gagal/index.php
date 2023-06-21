<?php require_once "../config/database.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="../img/icon.png?>">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../assets/plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">

    <title>Login | Sitem Informasi Skripsiku</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" width="70%" style="background-image: url('../img/banner2.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
             <center>
              <img src="../img/logo.jpg" height="140" width="360">
            </center>
            <br/>

            <form action="#" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" placeholder="NIM / NIK" id="username"name="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder=" Password" id="password" name="password">
              </div>
              
              <input type="submit" name="login" value="Log In" class="btn btn-block btn-danger" style="background-color:#860a0e">
              <br/>
              <br/>
              <center>
                <font color="black"><b>SISTEM INFORMASI SKRIPSIKU</b></font>
                <br/><font color="black"><b>UNIVERSITAS PERADABAN BUMIAYU</b></font>
                <br/><font color="black">Copyright &copy;  <?php echo date("Y"); ?></font>
              </center>

            </form>

              <?php 
                        if(isset($_POST['login']))
                        {

                         $username = trim(mysqli_real_escape_string($con, $_POST['username']));
                         $password = sha1(trim(mysqli_real_escape_string($con, $_POST['password'])));
                         $sql_login = mysqli_query($con, "SELECT * FROM tb_pengguna WHERE username = '$username' AND password = '$password'") or die(mysqli_error($con));
                        
                           if(mysqli_num_rows($sql_login) > 0 )
                           {
                              $datanya = mysqli_fetch_assoc($sql_login);
                              if($datanya['peran']=="superuser" )
                              {
                                $_SESSION['username'] = $username;
                                $_SESSION['id'] = $datanya['Id'];
                                $_SESSION['nama'] = $datanya['nama'];
                                $_SESSION['peran'] = $datanya['peran'];
                                echo "<script>window.location='".base_url('superuser')."';</script>";
                              }
                               elseif($datanya['peran']=="mahasiswa" )
                              {
                                $_SESSION['username'] = $username;
                                $_SESSION['id'] = $datanya['Id'];
                                $_SESSION['nama'] = $datanya['nama'];
                                $_SESSION['peran'] = $datanya['peran'];
                                echo "<script>window.location='".base_url('mahasiswa')."';</script>";
                              }
                              else
                            {

                            }
                             
                           }
                           else
                           {
                             echo "<script>window.location='".base_url('gagal')."';</script>" 
                            ?> 
                                
                              <?php
                           }
                        }

                      ?>



          </div>
        </div>
      </div>
    </div>


 
    
  </div>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#860a0e">
          <h4 class="modal-title"><font color="#ffffff">TERJADI KESALAHAN!</font></h4>
        </div>
        <div class="modal-body">
          <h5><p><b>Assalamualaikum, mohon maaf tampaknya terjadi kesalahan....</b></p>
          <p>Username atau Password yang anda masukkan salah / tidak terdaftar pada sistem
           Silahkan dicoba kembali, atau hubungi administrator</p></h5>
           <p></p>
           <h5><p> Terimakasih.. </p></h5>

        
        </div>
        <div class="modal-footer" style="background-color:#ffffff;">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#59595b"><font color="#ffffff"><b> TUTUP </b></font></button>
        </div>
      </div>
    </div>
  </div>
</div>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="scripts/app.min.js"></script>
  <script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
  </script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>