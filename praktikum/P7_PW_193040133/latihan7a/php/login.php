<?php
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if ($password == $row['password']) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = $row['id'];
    }
    if ($row['id'] == $_SESSION['hash']) {
      header("Location: admin.php");
      die;
    }
    header("Location: index.php");
    die;
  }
  $error = true;
}

?>

<link rel="stylesheet" href="../css/login.css">
<div class="kotaklogin">
  <p class="tulisan_login">Silahkan Login</p>
  <hr>
  <form action="" method="post">
    <?php if (isset($error)) : ?>
      <p style="color: red; font-style: italic;">Username atau Password salah</p>
    <?php endif; ?>
    <table>
      <tr class="un">
        <td><label for="username">Username</label></td>
        <td>:</td>
        <td><input type="text" name="username" class="formlogin"></td>
      </tr>
      <tr class="pass">
        <td><label for="password">Password</label></td>
        <td>:</td>
        <td><input type="password" name="password" class="formlogin"></td>
      </tr>
    </table>
    <br>
    <div class="remember">
      <input type="checkbox" name="remember">
      <label for="remember">Remember me</label>
    </div>
    <br>
    <button type="submit" name="submit" class="tombol">Login</button>

  </form>
</div>