<?php
	require_once 'core/init.php';

		//validasi register
		if(isset($_POST['submit']))
		{
			$nama = $_POST['username'];
			$pass = $_POST['password'];

			// pengujian username kosong apa tidak
			// !empty artinya tidak kosong trim()tidak kosong diawal dan diakhir
			if(!empty(trim($nama)) && !empty(trim($pass)))
			{
				if(register_cek_nama($nama))
				{
					if(register_user($nama,$pass))
					{
						echo "berhasil";
					}else{
						echo "gagal";
					}
				}else {
					echo "nama sudah ada";
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
