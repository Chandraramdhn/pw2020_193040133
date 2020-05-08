<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location : login.php");
  exit;
}
require 'functions.php';

$id = $_GET["id"];
$bk = query("SELECT * FROM buku WHERE ID = $id")[0];


if (isset($_POST["submit"])) {
  if (ubah($_POST) > 0) {
    echo "<script>
                alert('data berhasil diubah!');
                document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
                alert('data gagal diubah!');
                document.location.href = 'admin.php';
          </script>";
  }
}

?>


<link rel="stylesheet" type="text/css" href="../css/latihan5c.css">
<div class="form">
  <h3>Ubah Data Mahasiswa</h3>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="ID" value="<?= $bk["ID"]; ?>">
    <input type="hidden" name="gambarLama" value="<?= $bk["foto"]; ?>">
    <ul>
      <li>
        <label for="foto">Foto :</label><br>
        <img src="../assets/image<?= $bk['foto']; ?>" width="40" alt=""><br>
        <input type="file" name="foto" id="foto" required><br><br>
      </li>
      <li>
        <label for="judulbuku">Judul Buku :</label><br>
        <input type="text" name="judulbuku" id="judulbuku" required value="<?= $bk['judulbuku']; ?>"><br><br>
      </li>
      <li>
        <label for="deskripsibuku">Deskripsi Buku :</label><br>
        <input type="text" name="deskripsibuku" id="deskripsibuku" required value="<?= $bk['deskripsibuku']; ?>"><br><br>
      </li>
      <li>
        <label for="pengarang">Pengarang :</label><br>
        <input type="text" name="pengarang" id="pengarang" required value="<?= $bk['pengarang']; ?>"><br><br>
      </li>
      <li>
        <label for="penerbit">penerbit :</label><br>
        <input type="text" name="penerbit" id="penerbit" required value="<?= $bk['penerbit']; ?>"><br><br>
      </li>
      <li>
        <label for="harga">harga :</label><br>
        <input type="text" name="harga" id="harga" required value="<?= $bk['harga']; ?>"><br><br>
      </li>
      <br>
      <button type="submit" name="submit" class="buttonf">ubah Data</button>
      <button type="submit" class="buttonf">
        <a href="admin.php" style="text-decoration: none; color:white; ">kembali</a>
      </button>
    </ul>

  </form>
</div>