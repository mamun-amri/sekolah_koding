<?php

  require_once 'core/init.php';

  if(isset($_SESSION['user'])){
    header('location:home.php');
  }

  if( isset($_POST['register']) ){
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $username   = mysqli_real_escape_string($link,$username);
    $password   = mysqli_real_escape_string($link,$password);

    if( !empty( trim($username) ) && !empty( trim($password) ) ){
        $username   = $_POST['username'];
        $query      = mysqli_query($link,"SELECT username FROM users WHERE username='$username'");

        if(mysqli_num_rows($query) == 0){
            // === menghash password ===
            // 1.password yang akan di hash 2.algo password hash nya
            $password   = password_hash($password,PASSWORD_DEFAULT);

            $query      = mysqli_query($link,"INSERT INTO users (username,password) VALUES ('$username','$password')");
              if($query){
              $_SESSION['user']=$username;
              header('location:home.php');
              }else {
                echo "<script>alert('anda gagal Daftar');document.location='register.php';</script>";
              }
        }else {
          echo "<script>alert('username sudah terdaftar');document.location='login.php';</script>";
        }
    }else {
      echo "<script>alert('username dan password tidak boleh kosong');document.location='login.php';</script>";
    }
  }
 ?>

 <link rel="stylesheet" href="assets/style.css">
<body id="login">
 <section>
   <div id="form-login">
     <form action="register.php" method="post">
       <label for="">Username</label><br>
       <input type="text" name="username"><br><br>

       <label for="">Password</label><br>
       <input type="password" name="password"><br><br>

       <button type="submit" name="register">Register</button>
       <!-- <p><a href="register.php" type="submit">Register</a></p> -->
     </form>
   </div>
 </section>
</body>
