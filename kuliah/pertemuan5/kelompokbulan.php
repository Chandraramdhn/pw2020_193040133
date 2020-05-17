<?php 
	
	$bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
	 // echo "panjang array = ".count($bulan);
	 // echo "<br>";
  //    print_r($bulan);

	 // echo $bulan[6];

	$angka = array(1,2,3,4,5,6);

	$hasil = array_pop($bulan);
	print_r($bulan);
	echo "<hr>";

	$hasil = array_push($angka,10,9,8,7 );
	print_r($angka);

	echo "<hr>";
	$hasil = rsort($angka);
	print_r($angka);

	echo "<hr>";
	$hasil = sort($angka);
	print_r($angka);

	echo "<hr>";
	$hasil = sort($bulan);
	print_r($bulan);

//asorth
 ?>