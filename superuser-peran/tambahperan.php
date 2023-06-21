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
  
  $peran           = trim(mysqli_real_escape_string($con, $_POST['peran']));
  
  
         mysqli_query($con, "INSERT INTO tb_master_peran VALUES ('','$peran')") or die (mysqli_eror($con));   
        
  }

?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  swal("Success", "Peran telah ditambahkan", "success");
  
  setTimeout(function(){ 
  window.location.href = "../superuser-peran";

  }, 1000);
</script>
</body>
</html>


       