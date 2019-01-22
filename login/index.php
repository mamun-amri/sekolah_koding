<?php
	require_once 'core/init.php';

	if( !isset($_SESSION['user']) )
	{
		header('location: login.php');
	}

	require_once 'view/header.php';
 ?>

	<h1>Selamat datang di halaman </h1>

 <?php require_once 'view/footer.php'; ?>
