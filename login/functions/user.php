<?php

	function register_user($name,$pass)
	{
		// global untuk membaca variabel di luar
		global $link;

		// mencegah sql injection
		$name = mysqli_real_escape_string($link,$name);
		$pass = mysqli_real_escape_string($link,$pass);

		// merubah password agar tidak mucul aslinya
		$pass = password_hash($pass, PASSWORD_DEFAULT);

		$query = "INSERT into users (username,password) VALUES ('$name', '$pass')";
		
		if(mysqli_query($link,$query)){
			return true;
		}else{
			return false;
		}
	}


 ?>
