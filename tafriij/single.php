<?php
require_once 'core/init.php';

require_once 'templates/header.php';

if( isset($_REQUEST['tampil']) ){
  $id     = $_REQUEST['id'];
  $query      = mysqli_query($link,"SELECT * FROM blog WHERE id='$id'");
  while( $row = mysqli_fetch_array($query) ){ ?>

<div class="">
  <h1 style="text-align:center"><?=$row['judul'];?></h1>
  <p><?=$row['waktu'];?></p>
  <p style="text-align:center"><img src="assets/images/<?=$row['img']?>" alt="Uuppss..!"></p>
  <p><?=$row['isi'];?></p><br>
  <p><?=$row['tag'];?></p>
</div>

<?php
    }
  }
   ?>
