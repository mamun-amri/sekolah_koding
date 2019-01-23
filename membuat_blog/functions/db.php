<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db   = 'sekolah_koding1';

  $link = mysqli_connect($host,$user,$pass,$db);

  if($link){
    // echo "berhasil";
  }else {
    echo "gagal konek";
  }
 ?>
