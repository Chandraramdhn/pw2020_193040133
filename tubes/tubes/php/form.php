<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location : login.php");
  exit;
}
require 'functions.php';

if (isset($_POST['tambah'])) {



  if (tambah($_POST) > 0) {
    echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
                alert('data gagal ditambahkan!');
                document.location.href = 'admin.php';
          </script>";
  }
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
<div class="form center">
    <div class="row-center">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Form Tambah Data Mahasiswa</span>
          <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="foto">Foto :</label><br>
        <input type="file" name="foto" id="foto" required><br><br>
      </li>
      <li>
        <label for="judulbuku">Judul Buku :</label><br>
        <input type="text" name="judulbuku" id="judulbuku" required><br><br>
      </li>
      <li>
        <label for="deskripsibuku">Deskripsi Buku :</label><br>
        <input type="text" name="deskripsibuku" id="deskripsibuku" required><br><br>
      </li>
      <li>
        <label for="pengarang">Pengarang :</label><br>
        <input type="text" name="pengarang" id="pengarang" required><br><br>
      </li>
      <li>
        <label for="penerbit">penerbit :</label><br>
        <input type="text" name="penerbit" id="penerbit" required><br><br>
      </li>
      <li>
        <label for="harga">harga :</label><br>
        <input type="text" name="harga" id="harga" required><br><br>
      </li>
      <br>
     
    </ul>

  
        </div>
        <div class="card-action">
          <button class="btn waves-effect waves-light" type="submit" name="tambah">Tambah
            <i class="material-icons right">send</i>
          </button>
          <a class="waves-effect waves-light btn-large" style=" height: 38px; padding-top: -50px;" href="admin.php">Kembali</a>
        </div>
      </div></form>
    </div>
  </div>
</div>
</div>
<script type="text/javascript" src="../../js/materialize.min.js"></script>




            



</body>
</html>


