<?php
//mengecek apakah ada id yang dikirimkan
//jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
	header("location: index.php");
	exit;
}

require 'functions.php';

//mengambil id dan url
$id = $_GET['id'];

//melakukan query dengan parameter id yang diambil dari url
$buku = query("SELECT * FROM buku WHERE ID = $id")[0];


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

		body {
			background: url(../assets/image/ps.png);
		}

		table {
			margin-top: 150px;
		}

		a {
			text-decoration: none;
			color: hotpink;
		}

		.button {

			border: none;
			color: white;
			padding: 16px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			transition-duration: 0.4s;
			cursor: pointer;
		}

		.button1 {
			background-color: white;
			color: hotpink;
			border: 2px solid hotpink;
		}

		.button1:hover {
			background-color: hotpink;
			color: white;
		}
	</style>
</head>

<body>
	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th>Foto</th>
			<th>Deskripsi Buku</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Harga</th>
		</tr>

		<tr>
			<td><img src="../assets/image/<?= $buku["foto"]; ?>" alt=""></td>
			<td><?= $buku["deskripsibuku"]; ?></td>
			<td><?= $buku["pengarang"]; ?></td>
			<td><?= $buku["penerbit"]; ?></td>
			<td><?= $buku["harga"]; ?></td>
		</tr>


	</table>
	<br>
	<a href="index.php"><button class="button button1">BACK</button></a>
</body>

</html>