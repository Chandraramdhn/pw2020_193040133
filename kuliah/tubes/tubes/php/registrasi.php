<?php
require 'functions.php';

if (isset($_POST["registrasi"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
              alert('Registrasi Berhasil');
              document.location.href = 'login.php';
            </script>";
  } else {
    echo "<script>
              alert('Registrasi Gagal');
            </script>";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="../assets/image/home.png">
  <title>CDR BookStore</title>
  
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
    <form action="" method="post">
  <br>
  <br>
  <br>
  <br>
  <br>

  <div class="row-center">
    <div class="col s12 m7">
      <div class="card grey darken-4">
        <div class="card-content white-text">
          <span class="card-title center">Registrasi</span>
         <tr>
          <td><label for="username">Username</label></td>
        
          <td><input type="text" name="username"></td>
        </tr>
        <tr>
          <br>
          <td><label for="password">Password</label></td>
         
          <td><input type="password" name="password"></td>
        </tr>
        </div>
        <div class="card-action center">
           <button class="btn waves-effect waves-light" type="submit" name="registrasi">Registrasi
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </div>
  </div>

</form>
</div>

<script type="text/javascript" src="../../js/materialize.min.js"></script>
</body>
</html>

