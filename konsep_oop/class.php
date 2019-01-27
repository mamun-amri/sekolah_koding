<?php

// class
  class robot{
    // property
    public $suara;
    public $berat;

    // kontrutor
    public function __construct($bunyi,$berat){
      $this->suara = $bunyi;
      $this->berat = $berat;

    }

    // metode set dan get
    public function set_suara($bunyi){
      $this->suara = $bunyi;
    }

    public function get_suara(){
      return $this->suara;
    }

    public function set_berat($bunyi){
      $this->berat = $bunyi;
    }

    public function get_berat(){
      return $this->berat;
    }
  }

  // pewarisan inheritance

  class robot_hewan extends robot{
    public function kekuatan(){
      echo "saya mempunyai kekuatan....";
    }

    // overriding atau memakai nama fungsi yang sama tapi beda class
    public function get_berat(){
      return 'beratnya ...' . $this->berat;
    }
  }
 ?>
