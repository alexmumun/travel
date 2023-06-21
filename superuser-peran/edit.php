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
  
     $ided         = trim(mysqli_real_escape_string($con, $_POST['ided']));
     $peran   = trim(mysqli_real_escape_string($con, $_POST['peran']));


    $queryupdate = mysqli_query($con, "UPDATE tb_master_peran SET peran='$peran' WHERE id='$ided'") or die (mysqli_eror($con));
      
  
 
  ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  swal("Update Berhasil", "Data Pengguna berhasil di update", "success");
  
  setTimeout(function(){ 
  window.location.href = "../superuser-peran";

  }, 1000);
</script>
</body>
</html>


       