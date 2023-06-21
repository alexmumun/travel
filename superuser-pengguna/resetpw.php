<?php 
require_once "../config/database.php";
if (isset($_SESSION['peran']))
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
   echo "<script>window.location='../login/logout.php';</script>"; 
 }
?>
<!DOCTYPE html>
<html>
<head>
  
</head>

<body>
<div class="wrapper">
  <?php
  $id         = @$_GET['id'];
  $passreset  = 'skripsiupb2022!@#';
  $hasilreset = sha1($passreset);

  $queryresetpw = mysqli_query($con, "UPDATE tb_pengguna SET password='$hasilreset' WHERE Id='$id'") or die (mysqli_eror($con));
      
  ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  swal("Password Direset", "Password sukses di reset", "success");
  
  setTimeout(function(){ 
  window.location.href = "../superuser-pengguna";

  }, 1000);
</script>
</body>
</html>


       