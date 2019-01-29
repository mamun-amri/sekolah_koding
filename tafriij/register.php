<?php

  require_once 'core/init.php';

  if(isset($_SESSION['user'])){
    header('location:home.php');
  }

 ?>
