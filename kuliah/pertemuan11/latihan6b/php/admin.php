<?php
//menghubungkan dengan file php lainya
require 'functions.php';

//melakukan query
$buku = query("SELECT * FROM buku");

?>


<!DOCTYPE html>
<html>

<head>
  <title>Tugas2</title>
  <style type="text/css">
    img {
      width: 110px;
      height: 150px;
    }

    h1 {
      text-align: center;
    }

    table {
      text-align: center;
      margin: auto;
      background-color: pink;
    }

    th {
      background-color: hotpink;
    }
  </style>
  <link rel="stylesheet" type="text/css" href="../assets/css/latihan5c.css">
</head>

<body>
  <h1>Daftar Buku</h1>
  <div>
    <button class="buttonf"><a href="form.php" style="text-decoration: none; color:blanchedalmond">Tambah data</a></button>
  </div>
  <br>
  <table border="1" cellspacing="0" cellpadding="10">
    <tr>
      <th>ID</th>
      <th>opsi</th>
      <th>Foto</th>
      <th>Judul Buku</th>
      <th>Deskripsi Buku</th>
      <th>Pengarang</th>
      <th>Penerbit</th>
      <th>Harga</th>
    </tr>
    <?php $i = 1 ?>
    <?php foreach ($buku as $bk) : ?>
      <tr>
        <td><?= $i ?></td>
        <td>
          <a href=""><button class="button button1">Ubah</button></a>
          <a href=""><button class="button button2">Hapus</button></a>
        </td>
        <td><img src="../assets/image/<?= $bk["foto"] ?>"></td>
        <td><?= $bk["judulbuku"] ?></td>
        <td><?= $bk["deskripsibuku"] ?></td>
        <td><?= $bk["pengarang"] ?></td>
        <td><?= $bk["penerbit"] ?></td>
        <td><?= $bk["harga"] ?></td>
      </tr>
      <?php $i++ ?>
    <?php endforeach; ?>
  </table>
</body>

</html>