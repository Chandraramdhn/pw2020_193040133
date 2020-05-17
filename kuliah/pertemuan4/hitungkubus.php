<?php 
	//kubus pertama
	$sisi1 = 9;

	//kubus kedua
	$sisi2 = 4;

	//luas ke 1
	$luaskb1 = $sisi1*$sisi1*6;

	//luas ke 2
	$luaskb2 = $sisi2*$sisi2*6;

	$totalluas = $luaskb1+$luaskb2;

	//fungsi tambah luas 2kubus
	//$totalluas = $luaskb1 + $luaskb2
	//echoa "total luas = ".$totalluas


	
	echo "total luas = ".tambahluas2kubus($luaskb1,$luaskb2);

	function tambahluas2kubus($luas1, $luas2)
	{
		$totalluas = $luas1 + $luas2;
		return $totalluas;
	}

 ?>