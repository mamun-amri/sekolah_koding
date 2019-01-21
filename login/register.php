<?php
	require_once 'core/init.php';

		//validasi register
		if(isset($_POST['submit']))
		{
			$name = $_POST['username'];
			$pass = $_POST['password'];

			// pengujian username kosong apa tidak
			// !empty artinya tidak kosong trim()tidak kosong diawal dan diakhir
			if(!empty(trim($name)) && !empty(trim($pass)))
			{
				if(register_user($name,$pass))
				{
					echo "berhasil";
				}else{
					echo "gagal";
				}
			}else{
				echo "tidak boles kosong";
			}
		}

	require_once 'view/header.php';
 ?>

 	<form action="register.php" method="post">
 		<label>user name</label><br>
 		<input type="text" name="username"><br><br>
 		<label>Password</label><br>
 		<input type="Password" name="password"><br><br>

 		<input type="submit" name="submit" value="Daftar">
 	</form>

 <?php
 	require_once 'view/footer.php';
  ?>
