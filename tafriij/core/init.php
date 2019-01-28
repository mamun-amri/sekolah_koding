<?php

  session_start();
  // untuk meload semua fungsi yang ada di folder functions
  spl_autoload_register( function($function){
    require_once 'functions/' .$function. '.php';
  });

 ?>
