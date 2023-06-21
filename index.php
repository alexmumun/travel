<?php require_once "config/database.php";

if (isset($_SESSION['username']))
  {
     session_destroy();
     echo "<script>window.location='login';</script>";       
   } 
  else
  {
     session_destroy();
    echo "<script>window.location='login';</script>";
  }
 ?>

