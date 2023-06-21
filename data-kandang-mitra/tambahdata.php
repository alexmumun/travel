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

if (isset($_POST['insertdata']))
{
  
  $nama_kandang     = trim(mysqli_real_escape_string($con, $_POST['nama']));
  $alamat_kandang   = trim(mysqli_real_escape_string($con, $_POST['alamat']));
  $no_telp          = trim(mysqli_real_escape_string($con, $_POST['telp']));
  $jumlah_kandang          = trim(mysqli_real_escape_string($con, $_POST['kandang']));



         mysqli_query($con, "INSERT INTO tb_kandang_mitra VALUES ('','$nama_kandang','$alamat_kandang','$no_telp','$jumlah_kandang')") or die (mysqli_eror($con));   
         
       }

?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  swal("Success", "data kandang telah ditambahkan", "success");
  
  setTimeout(function(){ 
  window.location.href = "../data-kandang-mitra";

  }, 1000);
</script>
</body>
</html>


       