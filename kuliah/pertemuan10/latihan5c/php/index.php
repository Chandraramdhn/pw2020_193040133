<?php 
	//menghubungkan dengan file php lainya
	require 'functions.php';

	//melakukan query
	$buku = query("SELECT * FROM buku")

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tugas2</title>
	<link rel="stylesheet" type="text/css" href="../css/latihan5c.css">
</head>
<body>

	<div class="container">
		<h1>PILIH BUKU</h1>
		<hr>
		<?php foreach ($buku as $bk) :?>
			<ul class="judulbuku">
				<a href="detail.php?id=<?= $bk['ID']?>">
					<li><?= $bk["judul buku"] ?></li>
				</a>
			</ul>
		<?php endforeach; ?>
	</div>

</body>
</html>