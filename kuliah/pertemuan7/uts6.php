<?php 

	$sandika = array(
	"nama" => "Sandhika Galih",
	"nrp" => "043040023",
	"email" => "shandikaghalih@unpas.ac.id",
	"jurusan" => "teknik informatika",
);
	$dodi = array(
	"nama" => "dodi ferdiansah",
	"nrp" => "144040004",
	"email" => "doddy@gmail.com",
	"jurusan" => "teknik mesin"
);
	foreach ($sandika as $judul => $value) {
			echo "$judul : $value <br>";
		}
		echo "<br>";

	foreach ($dodi as $judul => $value) {
			echo "$judul : $value <br>";
		}
 ?>