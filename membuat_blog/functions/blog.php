<?php
  function tampil()
  {
    $query = "SELECT * FROM blog LIMIT 3";
    return result($query);
  }

  function tambah($judul,$isi,$tag)
  {
    $judul  = escape($judul);
    $isi    = escape($isi);
    $query = "INSERT INTO blog (judul,isi,tag) VALUES ('$judul','$isi','$tag')";
    return run($query);
  }

  function cari_data($cari)
  {
    $query = "SELECT * FROM blog WHERE judul LIKE '%$cari%'";
    return result($query);
  }

  function tampil_per_id($id)
  {
    $query = "SELECT * FROM blog WHERE id=$id";
    return result($query);
  }

  function result($query)
  {
    global $link;
    if($result= mysqli_query($link,$query) or die('gagal nampilkan data'))
    {
      return $result;
    }
  }

  function hapus_data($id)
  {
    $query = "DELETE FROM blog WHERE id=$id";
    return run($query);
  }


  function edit_data($judul,$isi,$tag,$id)
  {
    $judul  = escape($judul);
    $isi    = escape($isi);
    $query  = "UPDATE blog SET judul='$judul',isi='$isi',tag='$tag' WHERE id=$id";
    return run($query);
  }

  function run($query)
  {
    global $link;

    if(mysqli_query($link,$query)) return true;
    else return false;
  }

  function exerpt($string)
  {
    $string = substr($string,0,30);
    return $string;
  }

  function escape($data)
  {
    global $link;
    return mysqli_real_escape_string($link,$data);
  }
 ?>
