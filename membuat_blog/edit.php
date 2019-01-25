<?php
  require_once 'core/init.php';

  if(!$_SESSION['user'])
  {
    header('location:login.php');
  }

  $error = '';
  $id    = $_GET['id'];

  if (isset($_GET['id']))
  {
     $artikel = tampil_per_id($id);
     while($row = mysqli_fetch_assoc($artikel) )
     {
       $judul_lama = $row['judul'];
       $isi_lama   = $row['isi'];
       $tag_lama   = $row['tag'];
     }
  }

  if (isset($_POST['submit']))
  {
    $judul = $_POST['judul'];
    $isi   = $_POST['isi'];
    $tag   = $_POST['tag'];

    if ( !empty(trim($judul)) && !empty(trim($isi)) ) {
      if( edit_data($judul,$isi,$tag,$id) )
      {
        header('location:index.php');
      }else {
        $error = 'gagal edit konten';
      }
    }else {
      $error = 'tidak boleh kosong';
    }
  }

  require_once 'view/header.php';
 ?>

  <form action="" method="post">
    <label for="">Judul</label> <br>
    <input type="text" name="judul" value="<?=$judul_lama;?>"><br><br>

    <label for="">Isi</label> <br>
    <textarea name="isi" rows="8" cols="80"><?= $isi_lama; ?></textarea><br><br>

    <label for="">Tag</label> <br>
    <input type="text" name="tag" value="<?= $tag_lama; ?>"><br><br>
    <div id="error">
      <?= $error; ?>
    </div>
    <button type="submit" name="submit">Submit</button>
  </form>

 <?php
   require_once 'view/footer.php';
  ?>
