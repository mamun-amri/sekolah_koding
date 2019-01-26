<?php
  require_once 'core/init.php';

  if(!$_SESSION['user'])
  {
    header('location:login.php');
  }

  $error = '';

  if (isset($_POST['submit']))
  {
    $judul = $_POST['judul'];
    $isi   = $_POST['isi'];
    $tag   = $_POST['tag'];

    if ( !empty(trim($judul)) && !empty(trim($isi)) ) {
      if( tambah($judul,$isi,$tagding) )
      {
        header('location:index.php');
      }else {
        $error = 'gagal tambah konten';
      }
    }else {
      $error = 'tidak boleh kosong';
    }
  }

  require_once 'view/header.php';

 ?>

  <form action="" method="post">
    <label for="">Judul</label> <br>
    <input type="text" name="judul"><br><br>

    <label for="">Isi</label> <br>
    <textarea name="isi" rows="8" cols="80"></textarea><br><br>

    <label for="">Tag</label> <br>
    <input type="text" name="tag"><br><br>
    <div id="error">
      <?= $error; ?>
    </div>
    <button type="submit" name="submit">Submit</button>
  </form>

 <?php
   require_once 'view/footer.php';
  ?>
