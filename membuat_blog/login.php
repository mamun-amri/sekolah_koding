<?php
  require_once 'core/init.php';

  $error = '';

  if (isset($_POST['submit']))
  {
    $nama    = $_POST['username'];
    $pass    = $_POST['password'];

    if ( !empty(trim($nama)) && !empty(trim($pass)) ) {
      if( cek_data($nama,$pass) )
      {
        $_SESSION['user']=$nama;
        header('location:index.php');
      }else {
        $error = 'username dan password ada yang salah';
      }
    }else {
      $error = 'nama dan password tidak boleh kosong';
    }
  }

  require_once 'view/header.php';

 ?>

  <form action="" method="post">
    <label for="">username</label> <br>
    <input type="text" name="username"><br><br>

    <label for="">password</label> <br>
    <input type="password" name="password"><br><br>
    <div id="error">
      <?= $error; ?>
    </div>
    <button type="submit" name="submit">- Masuk -</button>
  </form>

 <?php
   require_once 'view/footer.php';
  ?>
