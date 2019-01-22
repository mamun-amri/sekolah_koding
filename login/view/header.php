<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="view/style.css">
</head>
<body>
	<h1>login user</h1>
<header>
	<ul>
		<li> <a href="index.php"> Home</a></li>
		<!-- menguji jika si user udh login dia tidak bisa mengakses login dan register -->
		<?php if( !isset($_SESSION['user']) ){ ?>
		<li> <a href="login.php"> Login</a></li>
		<li> <a href="register.php"> Register</a></li>
		<?php }else{ ?>
		<li> <a href="logout.php"> Logout</a></li>
		<?php } ?>
	</ul>
</header>
