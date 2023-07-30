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
  
     $id_pemilik       = trim(mysqli_real_escape_string($con, $_POST['id_pemilik']));
     $pemilik          = trim(mysqli_real_escape_string($con, $_POST['pemilik']));
     $alamat_kandang   = trim(mysqli_real_escape_string($con, $_POST['alamat_kandang']));
     $no_telp          = trim(mysqli_real_escape_string($con, $_POST['no_telp']));
     $jumlah_kandang   = trim(mysqli_real_escape_string($con, $_POST['jumlah_kandang']));


    $queryupdate = mysqli_query($con, "UPDATE tb_kandang_mitra SET pemilik='$pemilik', alamat_kandang='$alamat_kandang', no_telp='$no_telp', jumlah_kandang='$jumlah_kandang' WHERE id_pemilik='$id_pemilik'") or die (mysqli_error($con));
      
  
 
  ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
        swal("Update Berhasil", "Data Pengguna berhasil di update", "success");

        setTimeout(function() {
            window.location.href = "../data_kandang_mitra";

        }, 1000);
        </script>
</body>

</html>