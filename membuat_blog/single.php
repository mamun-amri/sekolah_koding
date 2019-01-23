<?php
  require_once 'core/init.php';
  require_once 'view/header.php';

  $error = '';
  $id    = $_GET['id'];

  if (isset($_GET['id']))
  {
     $artikel = tampil_per_id($id);
     while($row = mysqli_fetch_assoc($artikel) )
     {
       $judul_lama = $row['judul'];
       $isi_lama   = $row['isi'];
       $waktu_lama   = $row['waktu'];
       $tag_lama   = $row['tag'];
     }
  }
 ?>

  <p id='judul-single'>
    <?= $judul_lama; ?>
  </p>

  <p id='isi-single'>
    <?= $isi_lama; ?>
  </p>

  <span id='waktu-single'>
    <?= $waktu_lama; ?>
  </span>

  <span id='tag-single'>
    <?= $tag_lama; ?>
  </span>

 <?php
   require_once 'view/footer.php';
  ?>
