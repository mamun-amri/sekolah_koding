<?php

  class database{

    public static $INSTANCE = null;
    private $mysqli ,
            $HOST   = 'localhost';
            $USER   = 'root';
            $PASS   = '';
            $DBNAME = 'sekolah_koding';

    public function __construct() {
      $this->mysqli = new mysqli ( $this->HOST,$this->USER,$this->PASS,$this->DBNAME );
      if( mysqli_connect_error() ){
        die('gagal koneksi')
      }
    }
  }

  /*
  singleton pattern
  menguji koneksi agar tidak double
  */
  public static function getInstance(){
    if( !isset( self::$INSTANCE ) ){
      self::$INSTANCE = new database();
    }
    return self::$INSTANCE;
  }


 ?>
