<?php
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
    }
    if (isset($_POST['remember'])) {
      setcookie('username', $row['username'], time() + 60 * 60 * 24);
      $hash = hash('sha256', $row['id']);
      setcookie('hash', $hash, time() + 60 * 60 * 24);
    }

    if (hash('sha256', $row['id'] == $_SESSION['hash'])) {
      header("Location: admin.php");
      die;
    }
    header("Location: index.php");
    die;
  }
  $error = true;
}

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="../assets/image/home.png">
  <title>CDR BookStore</title>
  
  <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="../css/index.css">
      <link rel="stylesheet" type="text/css" href="../css/home.css">
</head>
<body>
  <div class="container">
  <div class="logini">
  <form action="" method="post">
    <?php if (isset($error)) : ?>
      <p style="color: red; font-style: italic;">Username atau Password salah</p>
    <?php endif; ?>
<div>
  <br>
  <br>
  <br>
  <div class="row-center">
    <div class="col s12 m6">
      <div class="card grey darken-4">
        <div class="card-content white-text">
          <span class="card-title" style="text-align: center;">LOGIN</span>
          <tr>
            <td><label for="username">Username</label></td>
            <td><input type="text" name="username"></td>
          </tr>
          <br>
          <tr>
            <td><label for="password">Password</label></td>
            <td><input type="password" name="password"></td>
          </tr>
          <div class="remember">
            <input type="checkbox" name="remember">
            <label for="remember"></label>
                  <p>
            <label>
              <input type="checkbox" name="remember" />
              <span>Remember me</span>
            </label>
          </p>
          </div>
          <br>
          <br>
         <div class="registrasi">
          <label>
          <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p></label>
        </div> 
        </div>
        <div class="card-action center">
          <button class="btn waves-effect waves-light" type="submit" name="submit">Login
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </div>
  </div>
 </form>            

</div>

</div>

<script type="text/javascript" src="../../js/materialize.min.js"></script>

</body>
</html>

