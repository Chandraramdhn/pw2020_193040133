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
		<?php foreach ($buku as $bk) :?>
				<tr>
					<td><?= $i?></td>
					<td><img src="../assets/image/<?= $bk["foto"]?>"></td>
					<td><?= $bk["judul buku"]?></td>
					<td><?= $bk["deskripsi buku"]?></td>
					<td><?= $bk["pengarang"]?></td>
					<td><?= $bk["penerbit"]?></td>
					<td><?= $bk["harga"]?></td>
				</tr>
		<?php $i++ ?>
		 <?php endforeach; ?>
	</table>
</body>
</html>