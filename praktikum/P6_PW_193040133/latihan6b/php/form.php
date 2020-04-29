<?php

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


<link rel="stylesheet" type="text/css" href="../assets/css/latihan5c.css">
<div class="form">
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="post">

    <ul>
      <li>
        <label for="foto">Foto :</label><br>
        <input type="text" name="foto" id="foto" required><br><br>
      </li>
      <li>
        <label for="judulbuku">Judul Buku :</label><br>
        <input type="text" name="judulbuku" id="judulbuku" required><br><br>
      </li>
      <li>
        <label for="deskripsi buku">Deskripsi Buku :</label><br>
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
      <button type="submit" name="tambah" class="buttonf">Tambah Data</button>
      <button type="submit" class="buttonf">
        <a href="admin.php" style="text-decoration: none; color:white; ">kembali</a>
      </button>
    </ul>

  </form>
</div>