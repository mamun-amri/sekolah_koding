<?php
	require_once 'core/init.php';

  $error = '';
  // jika sudah login
  if( isset($_SESSION['user']) )
  {
    header('location: index.php');
  }

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
            $error = "data ada yang salah";
          }
				}else {
				  $error = "nama belum terdaftar";
				}
			}else{
				$error = "tidak boleh kosong";
			}
		}

	require_once 'view/header.php';

  // menguji jika belum login mengakses bagian home
  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    // menghilangkan sissionnya
    unset($_SESSION['msg']);
  }
 ?>

 	<form action="login.php" method="post">
 		<label>user name</label><br>
 		<input type="text" name="username"><br><br>
 		<label>Password</label><br>
 		<input type="Password" name="password"><br><br>

 		<input type="submit" name="submit" value="Login">
    <br><br>
    <?php if($error != '') {?>
      <div id="error">
        <?php echo $error; ?>
      </div>
    <?php } ?>
 	</form>

 <?php require_once 'view/footer.php';?>
