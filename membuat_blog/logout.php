<?php

  // require_once 'core/init.php';
  session_start();
  session_destroy();

  header('location: index.php');

 ?>
