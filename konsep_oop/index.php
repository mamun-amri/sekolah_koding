<?php

  require_once 'class.php';

  // pemanggilannya
  $call  = new robot('ngik nok',36);
  $call1 = new robot_hewan('titut titup',36);

  echo "suaranya = " . $call->get_suara().'<br>';
  echo $call1->get_berat();

 ?>
