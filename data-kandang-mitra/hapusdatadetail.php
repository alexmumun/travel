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
  $id        = @$_GET['id'];// mengambil data id yang nilainya dibawa dari halaman sebelumnya
  
   mysqli_query($con, "DELETE FROM tb_detail_kandang WHERE id='$id'") or die (mysqli_error($con));// menghapus data dari tabel kandang mitra dimana id kandang nilainya sama dengan nilai yang dibawa pada id dari halaman sebelumnya
      
  ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
        swal("Telah dihapus", "data kandang telah dihapus", "error"); // tampilkan pesan data kandang telah dihapus

        setTimeout(function() {
            window.location.href =
            "detailkandang.php"; // setelah menampilkan pesan selama 1000ms kemudian arahkan halaman ke data kandang mitra

        }, 1000);
        </script>
</body>

</html>