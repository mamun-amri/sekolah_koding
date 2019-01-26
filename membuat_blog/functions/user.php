<?php

  function cek_data($nama,$pass){
    global $link;
    $nama = escape($nama);
    $pass = escape($pass);
    $pass   =md5($pass);

    $query = "SELECT * FROM users where username='$nama' AND password='$pass'";

    if($result = mysqli_query($link,$query)){
      if(mysqli_num_rows($result)!= 0) return true;
      else return false;
    }
  }

  function cek_status($username){
    global $link;
    $nama = escape($username);

    $query = "SELECT status FROM users where username='$nama'";

    if($result = mysqli_query($link,$query)){
      while ($row=mysqli_fetch_assoc($result)) {
        $status = $row['status'];
      }
      return $status;
    }
  }

  function cek_daftar($nama){
    global $link;
    $nama = escape($nama);

    $query = "SELECT * FROM users where username='$nama'";

    if($result = mysqli_query($link,$query)){
      if(mysqli_num_rows($result)== 0) return true;
      else return false;
    }
  }

  function daftar($nama,$pass){
    global $link;

    $nama   = escape($nama);
    $pass   = escape($pass);
    // hash
    $pass   =md5($pass);

    $query ="INSERT INTO users (username,password,status) VALUES ('$nama','$pass',0)";
    return run($query);
  }
