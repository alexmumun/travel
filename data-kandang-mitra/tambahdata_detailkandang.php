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
  
  $lokasi     = trim(mysqli_real_escape_string($con, $_POST['lokasi']));
  $kapasitas   = trim(mysqli_real_escape_string($con, $_POST['kapasitas']));
  $id_pemilik   = trim(mysqli_real_escape_string($con, $_POST['id_pemilik']));
  


         mysqli_query($con, "INSERT INTO tb_detail_kandang VALUES ('','$lokasi','$kapasitas','$id_pemilik')") or die (mysqli_eror($con));   
         
       }

?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  swal("Success", "data kandang telah ditambahkan", "success");
  
  setTimeout(function(){ 
  window.location.href = "detailkandang.php?id=<?=$id_pemilik;?>";

  }, 1000);
</script>
</body>
</html>


       