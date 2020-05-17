<?php
//melakukan koneksi kedatabase
$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
//memilih database
mysqli_select_db($conn, "tubes_193040133") or die("Database salah");
//query mengambil objek dari tabel didalam database
$result = mysqli_query($conn, "SELECT * FROM buku");

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
</head>

<body>
	<h1>Daftar Buku</h1>
	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th>ID</th>
			<th>Foto</th>
			<th>Judul Buku</th>
			<th>Deskripsi Buku</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Harga</th>
		</tr>
		<?php $i = 1 ?>
		<?php while ($row = mysqli_fetch_assoc($result)) : ?>
			<tr>
				<td><?= $i ?></td>
				<td><img src="assets/image/<?= $row["foto"] ?>"></td>
				<td><?= $row["judulbuku"] ?></td>
				<td><?= $row["deskripsibuku"] ?></td>
				<td><?= $row["pengarang"] ?></td>
				<td><?= $row["penerbit"] ?></td>
				<td><?= $row["harga"] ?></td>
			</tr>
			<?php $i++ ?>
		<?php endwhile; ?>
	</table>
</body>

</html>