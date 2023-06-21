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
  
  $user           = trim(mysqli_real_escape_string($con, $_POST['user']));
  $nama           = trim(mysqli_real_escape_string($con, $_POST['nama']));
  $pw             = trim(mysqli_real_escape_string($con, $_POST['pw']));
  $pw2            = trim(mysqli_real_escape_string($con, $_POST['pw2']));
  $pass           = sha1(trim(mysqli_real_escape_string($con, $_POST['pw2'])));
  $peran          = "admin";

  
  if ($pw!==$pw2)
  {
       echo "<script>alert('Maaf, Transaksi Gagal! input password tidak cocok');</script>";
       echo "<script>window.location='../supremerole-administrator';</script>";
  }
  else
  {    
       $queryid =  mysqli_query($con, "SELECT COUNT(*) as jmluseradmin FROM tb_pengguna WHERE peran ='$peran'") or die (mysqli_eror($con));
       
       if (mysqli_num_rows($queryid)> 0 )
       {
        $dataid = mysqli_fetch_assoc($queryid);
        $jmladmin = $dataid['jmluseradmin']+1;
        $idurut = "adm-".$jmladmin;

         mysqli_query($con, "INSERT INTO tb_pengguna VALUES ('$id','$user','$pass','$peran','$nama')") or die (mysqli_eror($con));   
         
       }
       else
       {
        $idurut = "adm-1";
           
         mysqli_query($con, "INSERT INTO tb_pengguna VALUES ('$id','$user','$pass','$peran','$nama')") or die (mysqli_eror($con));   
       }
      
    }   
  }

?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  swal("Success", "User Administrator telah ditambahkan", "success");
  
  setTimeout(function(){ 
  window.location.href = "../superuser-pengguna";

  }, 1000);
</script>
</body>
</html>


       