<?php
  require_once 'core/init.php';

  $login = false;
  if($_SESSION['user'])
  {
    $login=true;
  }

  $artikels = tampil();

  if (isset($_GET['cari']))
  {
    if ( !empty(trim($cari)) ) {
      $cari   = $_GET['cari'];
      $artikels = cari_data($cari);
    }else {
      echo "silahkan isi untuk mencari";
    }
  }

  require_once 'view/header.php';

 ?>

  <form action="" method="get">
    <input type="search" name="cari" placeholder="silahkan cari">
  </form>
 <?php while($row = mysqli_fetch_assoc($artikels) ): ?>
    <div class="each_artikel">
      <h2><a href="single.php?id=<?= $row['id']; ?>"> <?= $row['judul']; ?></h2> </a><br>
      <p>
        <?= exerpt($row['isi']) .'...'; ?>
      </p><br>
      <p class="waktu"> <?= $row['waktu']; ?></p>
      <p class="tag"> Tag : <?= $row['tag']; ?></p><br>
      <?php if($login==true): ?>
        <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
        <a href="hapus.php?id=<?= $row['id']; ?>">Hapus</a>
      <?php endif; ?>
    </div>
  <?php endwhile; ?>

 <?php
   require_once 'view/footer.php';
  ?>
