<?php

  function cek_data($nama,$pass)
  {
    global $link;
    $nama = escape($nama);
    $pass = escape($pass);

    $query = "SELECT * FROM users where username='$nama' AND password='$pass'";

    if($result = mysqli_query($link,$query))
    {
      if(mysqli_num_rows($result)!= 0) return true;
      else return false;
    }
  }

 ?>
