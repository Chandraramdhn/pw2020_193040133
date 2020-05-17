<?php 


	echo "hasil";
	echo "<hr>";


	function hasil($angka1,$angka2)
	{
		$hasil = $angka1 + $angka2;
		echo "$hasil";
	}

	//eksekusi
	$angka1 = $_GET['angka1'];
	$angka2 = $_GET['angka2'];
	hasil($angka1,$angka2);
 ?>

