<?php

  $host   = 'localhost';
  $user   = 'root';
  $pass   = '';
  $dbname = 'sekolah_tafriij';

  $link   = mysqli_connect($host,$user,$pass,$dbname);

  if(mysqli_connect_errno($link)) die ('gagal konek ke database');

 ?>
