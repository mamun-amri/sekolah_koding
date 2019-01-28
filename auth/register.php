<?php
  require_once 'core/init.php';

  if( input::get('submit') ){

    $user->register_user(array(
      'username' => input::get('username'),
      'password' => password_hash( input::get('password'), PASSWORD_DEFAULT )
    ));
  }

  require_once 'templates/header.php';
 ?>

  <form action="register.php" method="post">
    <label for="">Username</label><br>
    <input type="text" name="username"><br><br>

    <label for="">Password</label><br>
    <input type="password" name="password"><br><br>

    <input type="submit" name="submit">
  </form>

 <?php require_once 'templates/footer.php'; ?>
