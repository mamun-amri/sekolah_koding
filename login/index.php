<?php
	require_once 'core/init.php';

	if( !isset($_SESSION['user']) )
	{
		$_SESSION['msg']='anda harus login dahulu';
		header('location: login.php');
	}

	require_once 'view/header.php';
 ?>

	<h1>Selamat datang <?php echo $_SESSION['user']; ?> dihalaman </h1>

 <?php require_once 'view/footer.php'; ?>
