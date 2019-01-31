<?php
  $login = false;
  if(isset($_SESSION['user']))
  {
    $login=true;
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tafriijul Ahkam</title>
    <link rel="stylesheet" href="assets/style.css">
  </head>
  <body>
    <nav>
      <header>
        <a href="home.php">Home</a>
        <?php if( $login==true ){ ?>
          <a href="logout.php">Logout</a>
        <?php }else{ ?>
          <a href="login.php">Login</a>
          <a href="register.php">Register</a>
        <?php } ?>
      </header>
    </nav>
