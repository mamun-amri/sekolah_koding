<?php

  require_once 'core/init.php';

  if(!isset($_SESSION['user'])){
    header('location:login.php');
  }
  session_destroy();
  echo "<script>alert('Good Bye...! $_SESSION[user]');document.location='login.php';</script>";

 ?>
