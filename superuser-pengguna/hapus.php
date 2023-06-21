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
  $id        = @$_GET['id'];
  $admin     = 'admin';
  $queryhitungdata = mysqli_query($con, "SELECT COUNT(*) AS jmldata FROM tb_pengguna
  WHERE peran='$admin'") or die (mysqli_eror($con));

  $hasilquery = mysqli_fetch_assoc($queryhitungdata);
  $angkahasil = $hasilquery['jmldata'];



  if ($angkahasil==1)
  {
      echo "<script>alert('Maaf, user admin tidak boleh dihapus semua');</script>";
      echo "<script>window.location='../superuser-pengguna';</script>";
  }
  else
  {
   mysqli_query($con, "DELETE FROM tb_pengguna WHERE Id='$id'") or die (mysqli_eror($con));
  }       

  

      
  ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  swal("Telah dihapus", "User admin telah dihapus", "error");
  
  setTimeout(function(){ 
  window.location.href = "../superuser-pengguna";

  }, 1000);
</script>
</body>
</html>


       