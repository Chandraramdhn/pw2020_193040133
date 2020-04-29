<?php
//menghubungkan dengan file php lainya
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
	<title>Tugas2</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/latihan5c.css">
</head>

<body>

	<div class="container">
		<h1>PILIH BUKU</h1>
		<hr>

		<form action="" method="post">

			<input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencaharian" autocomplete="off">
			<button type="submit" name="cari">cari</button>


		</form>
		``
		<?php foreach ($buku as $bk) : ?>
			<ul class="judulbuku">
				<a href="detail.php?id=<?= $bk['ID'] ?>">
					<li><?= $bk["judulbuku"] ?></li>
				</a>
			</ul>
			``<?php if (empty($buku)) : ?>
			<tr>
				<td colspan="7">
					<h1>Data tidak ditemukan</h1>
				</td>
			</tr>
		<?php endif; ?>
	<?php endforeach; ?>

	</div>
	<a href="admin.php" class="admin"><button class="buttona" style="vertical-align:middle"><span>ADMIN</span></button></a>
</body>

</html>