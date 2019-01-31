<?php
  require_once 'core/init.php';

  if(!isset($_SESSION['user'])){
    header('location:login.php');
  }

  if( isset($_REQUEST['delete']) ){
    $id     = $_REQUEST['id'];
    $query  = mysqli_query($link,"DELETE FROM blog WHERE id='$id'");
    if ($query) {
			echo "<script>alert('data berhasil dihapus');document.location='home.php';</script>";
    } else { echo "<script>alert('data gagal dihapus');document.location='home.php';</script>";
        }
  }

  require_once 'templates/header.php';
 ?>
 <a href="input.php">Tambah</a>

 <?php

  $query      = mysqli_query($link,"SELECT * FROM blog ORDER BY id DESC");
  while( $row = mysqli_fetch_array($query) ):?>

    <div id="blog">
      <p id="judul"><?=$row['judul']?></p>
      <span id="waktu"><?=$row['waktu']?></span>
      <span id="tag">Tag : <?=$row['tag']?></span>
      <table>
        <tr>
          <td width=350px>
            <p id="img-blog">
            <img src="assets/images/<?=$row['img']?>" style="width:200px;height:200px" alt="Uuppss..!">
            </p>
          </td>
          <td align=justify valign=top>
          <span> <?= substr($row['isi'],0,600)?></span>... <a href="single.php?tampil=1&id=<?=$row['id'];?>">Continou</a>
          </td>
        </tr>
      </table>
      <a href="input.php?id=<?=$row['id']?>">Edit</a>
      <a href='home.php?delete=1&id=<?=$row['id']?>' onclick="return confirm('yakin mau menghapus..! <?=$row['judul']?>');">Delete</a>
    </div>
  <?php endwhile; ?>

<?php require_once 'templates/footer.php'; ?>
