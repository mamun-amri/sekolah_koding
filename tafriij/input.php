<?php
  require_once 'core/init.php';

  if(!isset($_SESSION['user'])){
    header('location:login.php');
  }

  if( isset($_REQUEST['id']) ){
    $id    = $_REQUEST['id'];

    $query = mysqli_query($link,"SELECT * FROM blog WHERE id='$id'");
    while ($row = mysqli_fetch_assoc($query)){
      $id    = $row['id'];
      $judul = $row['judul'];
      $isi   = $row['isi'];
      $tag   = $row['tag'];
      $img   = $row['img'];
      $button= 'Edit';
    }
  }else {
    $id    = "";
    $judul = "";
    $isi   = "";
    $tag   = "";
    $img   = "";
    $button= 'Simpan';
  }

  require_once 'templates/header.php';
 ?>

  <form action="save.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $id ?>">
    <label for="">Judul</label><br>
    <input type="text" name="judul" value="<?= $judul ?>"><br><br>

    <label for="">Isi</label><br>
    <textarea name="isi" rows="8" cols="80"><?= $isi ?></textarea><br><br>

    <label for="">Tag</label><br>
    <input type="text" name="tag" value="<?= $tag ?>"><br><br>
    <input type="file" name="img" value="<?= $img ?>"><br><br>

    <input type="submit" name="simpan" value="<?= $button ?>">

  </form>
