<?php 
	$jari1 = 5;
	$jari2 = 6;
	$PHI = 3.14;

	$luas1 = hitungluaslingkaran($PHI,$jari1);

	$luas2 = hitungluaslingkaran($PHI,$jari2);
	
	echo "totalluas1 = ".hitungluaslingkaran($PHI,$jari1)."<br>";
	echo "total2lingkaran = ".hitungluas2lingkaran($luas1,$luas2);

	function hitungluaslingkaran($jari,$phi)
	{
		$total = $phi*$jari*$jari;
		return $total;
	}
	
	function hitungluas2lingkaran($luas1,$luas2){
		$total = $luas1 + $luas2;
		return $total;
	}
 ?>