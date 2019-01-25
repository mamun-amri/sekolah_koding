<?php

$login = false;
if($_SESSION['user'])
{
  $login=true;
}

 ?>

<title>mbanten</title>
<link rel="stylesheet" href="view/style.css">
<h1>Selamat Datang di MBanten</h1>

<div id="menu">
  <a href="index.php">Home</a>
  <?php if($login==true){ ?>
    <a href="tambah.php">Tambah</a>
    <a href="logout.php">Keluar</a>
  <?php }else{ ?>
    <a href="login.php">Masuk</a>
  <?php } ?>
</div>
