<?php
  require_once 'core/init.php';

  if(!isset($_SESSION['user'])){
    header('location:login.php');
  }else {
    header('location:home.php');
  }

  $id     = $_POST['id'];
  $judul  = $_POST['judul'];
  $isi    = $_POST['isi'];
  $tag    = $_POST['tag'];

  $tujuan ="assets/images/";
  if( isset($_POST['simpan']) ){
    if( !empty($_FILES['img']['tmp_name']) ){
      $type = $_FILES['img']['type'];
      if($type=="image/jpeg" || $type=="image/png"){
        $size = $_FILES['img']['size'];
        if($size <= 1000000 ){
        $img = basename($_FILES['img']['name']);
        $lampiran = $tujuan . $img;

          if(move_uploaded_file($_FILES['img']['tmp_name'], $lampiran)){
            $query =mysqli_query($link, "INSERT INTO blog
                                  (id,judul,isi,tag,img)
            VALUES ('','$judul','$isi','$tag','$img')");
            echo"
            <script>
              alert('selamat berhasil');
              document.location.href='home.php';
            </script>";
          }else {
            echo "Gambar gagal dikirim";
          }
        }else {
          echo "gambar terlalu besar";
        }
      }else {
        echo "tipe gambar harus .jpg / .png";
      }
    }else {
      echo "pilih gambar dahulu..!";
    }
    // ==== untuk update ====
  }else {
    $id     = $_POST['id'];
    $judul  = $_POST['judul'];
    $isi    = $_POST['isi'];
    $tag    = $_POST['tag'];
    $img    = $_POST['img'];

    $query  = mysqli_query($link,"UPDATE blog SET
                                  id='$id',
                                  judul='$judul',
                                  isi='$isi',
                                  tag='$tag',
                                  img='$img'
                                  WHERE id='$id'
                                  ");
  }
 ?>
