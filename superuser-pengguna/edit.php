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
  if (isset($_POST['edit']))
  {
     $id         = trim(mysqli_real_escape_string($con, $_POST['id']));
     $username   = trim(mysqli_real_escape_string($con, $_POST['user']));
     $namauser   = trim(mysqli_real_escape_string($con, $_POST['nama']));

    $queryupdate = mysqli_query($con, "UPDATE tb_pengguna SET nama='$namauser' WHERE Id='$id'") or die (mysqli_eror($con));
      
  }
  elseif (isset($_POST['editmodal']))
  {
     $id         = trim(mysqli_real_escape_string($con, $_POST['ided']));
     $username   = trim(mysqli_real_escape_string($con, $_POST['usered']));
     $namauser   = trim(mysqli_real_escape_string($con, $_POST['namaed']));

    $queryupdate = mysqli_query($con, "UPDATE tb_pengguna SET nama='$namauser' WHERE Id='$id'") or die (mysqli_eror($con));

  }
 
  ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  swal("Update Berhasil", "Data Pengguna berhasil di update", "success");
  
  setTimeout(function(){ 
  window.location.href = "../superuser-pengguna";

  }, 1000);
</script>
</body>
</html>


       