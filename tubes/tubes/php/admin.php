<?php
//menghubungkan dengan file php lainya
session_start();
if (!isset($_SESSION["username"])) {
  header("Location : login.php");
  exit;
}
require 'functions.php';

//melakukan query
$buku = query("SELECT * FROM buku");

if (isset($_POST["cari"])) {
  $buku = cari($_POST["keyword"]);
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

<div class="navbar-fixed">
  <nav class="grey darken-4">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><img class="cdr" src="../assets/image/cdr4.png"></a>
      <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <form action="" method="post">
        <li>
      <input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencaharian" autocomplete="off" class="keyword">
    </li>
    <li>  <button class="btn waves-effect waves-light iki" type="submit" name="cari"><i class="material-icons aku" class="tombol-cari">search</i></button></li>
    <li>
      <a class="waves-effect waves-light btn-large" style="border-radius: 10px; height: 50px;" href="form.php" style="text-decoration: none; color:white;">Tambah data</a>
    </li>
    <li>
          <a class="waves-effect waves-light btn-large" style="border-radius: 10px; height: 50px;"  href="logout.php"><i class="material-icons left">assignment_ind</i>Logout</a>
    </li>
        </form>
      </ul>
    </div>
  </nav>
 </div>


 
 
    
  
  

  
 

  <table border="1" cellspacing="0" cellpadding="10">
   
    <?php if (empty($buku)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data tidak ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>
     
    <?php endif; ?>
  </table>

  

  

<div class="container">

<div class="row" style="padding-left: 80px;">
    <?php foreach ($buku as $bk) : ?>
     <div class="col s12 m7">
      
      <div class="card horizontal small center" style="width: 600px; margin: auto; margin-bottom: 30px; margin-top: 20px;">
        <div class="card-image" style="width: 200px; height: 300px;">
          <img src="../assets/image/<?= $bk["foto"]; ?>" alt="">
          
        </div>
        <div class="card-stacked">
         <div class="koko">
          <a class="waves-effect waves-light btn-large" style="border-radius: 10px; height: 50px; width: 200px; " href="ubah.php?id=<?= $bk["ID"] ?>">Ubah</a>
          </div> 
  
          <div class="kiki">
          <a class="waves-effect waves-light btn-large" style="border-radius: 10px; height: 50px; width: 200px;"  href="hapus.php?id=<?= $bk["ID"] ?>" onclick="return confirm('Hapus Data??')">Hapus</a>
          </div>


          <div class="card-action">
            <a href="detail.php?id=<?= $bk['ID'] ?>"><?= $bk["judulbuku"] ?></a>
            <?php if (empty($buku)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data tidak ditemukan</h1>
        </td>
      </tr>
    <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

</div>

  <script type="text/javascript" src="../../js/materialize.min.js"></script>
</body>
</html>