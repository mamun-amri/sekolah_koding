<?php
  function tampil()
  {
    global $link;

    $query = "SELECT * FROM blog";
    $result= mysqli_query($link,$query);
    return $result;
  }

 ?>
