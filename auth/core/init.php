<?php

  session_start();
  // load kelas yang ada di folder classes
  spl_autoload_register( function($class){
    require_once 'classes/' .$class. '.php';
  });

  $user = new user(); 
 ?>
