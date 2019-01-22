<?php

	function register_user($nama,$pass)
	{
		// global untuk membaca variabel di luar
		global $link;

		// mencegah sql injection
		$nama = mysqli_real_escape_string($link,$nama);
		$pass = mysqli_real_escape_string($link,$pass);

		// merubah password agar tidak mucul aslinya
		$pass = password_hash($pass, PASSWORD_DEFAULT);

		$query = "INSERT into users (username,password) VALUES ('$nama', '$pass')";

		if(mysqli_query($link,$query)){
			return true;
		}else{
			return false;
		}
	}

// menguji nama kembar
	function register_cek_nama($nama)
	{
		global $link;

		$nama = mysqli_real_escape_string($link,$nama);

		$query = "SELECT * from users where username='$nama'";
		if($result = mysqli_query($link, $query))
		{
			if(mysqli_num_rows($result)==0)return true;
				else return false;
		}

	}

	// menguji nama di database
		function login_cek_nama($nama)
		{
			global $link;

			$nama = mysqli_real_escape_string($link,$nama);

			$query = "SELECT * from users where username='$nama'";
			if($result = mysqli_query($link, $query))
			{
				if(mysqli_num_rows($result) !=0 )return true;
					else return false;
			}
		}

// untuk login
	function cek_data($nama,$pass)
	{
		global $link;
		// mencegah sql injection
		$nama  = mysqli_real_escape_string($link,$nama);
		$pass  = mysqli_real_escape_string($link,$pass);

		$query  = "SELECT password from users where username= '$nama'";
		$result = mysqli_query($link,$query);
		$hash   = mysqli_fetch_assoc($result);//['password'] atau di bawah

		if(password_verify($pass,$hash['password']))
		{
			return true;
		}else {
			return false;
		}
	}

// jika multi user
	function cek_status($nama)
	{
		global $link;

		$nama  = mysqli_real_escape_string($link,$nama);

		$query = "SELECT role from users where username='$nama'";
		$result= mysqli_query($link,$query);

		$status=mysqli_fetch_assoc($result)['role'];

		if ($status==1) return $status;
			else return false;
	}


 ?>
