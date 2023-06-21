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
  if(isset($_POST['update']))
  {
     $id          = trim(mysqli_real_escape_string($con, $_POST['user']));
     $passupdate  = trim(mysqli_real_escape_string($con, $_POST['pw1']));
     $hasilupdate = sha1($passupdate);


  $queryupdatepass = mysqli_query($con, "UPDATE tb_pengguna SET password='$hasilupdate' WHERE Id='$id'") or die (mysqli_eror($con));

  }
      
  ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  swal("Password diganti", "Password sukses di update", "success");
  
  setTimeout(function(){ 
  window.location.href = "../login/logout.php";

  }, 1000);
</script>
</body>
</html>


       