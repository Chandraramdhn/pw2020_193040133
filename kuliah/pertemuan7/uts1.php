<?php 
	function cetak_bintang($baris)
	{
		for ($i=1; $i < $baris; $i++) { 
			for ($j=1; $j < $i ; $j++) { 
				echo "*";
			}
			echo "<br>";
		}
	}

	cetak_bintang(10);
	cetak_bintang(5);
 ?>