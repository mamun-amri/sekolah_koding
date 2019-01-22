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
				if (login_cek_nama($nama))
        {
				  if( cek_data($nama,$pass) )
          {
            $_SESSION['user']=$nama;
            header('location: index.php');
          }else {
            echo "data ada yang salah";
          }
				}else {
				  echo "nama belum terdaftar";
				}
			}else{
				echo "tidak boleh kosong";
			}
		}

	require_once 'view/header.php';
 ?>

 	<form action="login.php" method="post">
 		<label>user name</label><br>
 		<input type="text" name="username"><br><br>
 		<label>Password</label><br>
 		<input type="Password" name="password"><br><br>

 		<input type="submit" name="submit" value="Login">
 	</form>

 <?php require_once 'view/footer.php';?>
