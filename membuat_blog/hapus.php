<?php
  require_once 'core/init.php';

  $error = '';
  $id    = $_GET['id'];

  if (isset($_GET['id']))
  {
    if(hapus_data($id))
    {
      header('location:index.php');
    }else {
      echo "gagal menghaspus";
    }
  }
 ?>
