<?php
  function tampil()
  {
    global $link;

    $query = "SELECT * FROM blog";
    $result= mysqli_query($link,$query);
    return $result;
  }

  function tambah($judul,$isi,$tag)
  {
    global $link;

    $query = "INSERT INTO blog (judul,isi,tag) VALUES ('$judul','$isi','$tag')";
    return run($query);
  }

  function run($query)
  {
    global $link;

    if($result=mysqli_query($link,$query)) return true;
    else return false;
  }
 ?>
