<?php 
	// aray 1 dimensi
	 $arah = array("kanan","kiri");

	 $arah[2] = "atas";



	 $arah[] = "bawah";

	 $arah[1] = "kanan";
	 $arah[0] = "kiri";

	 echo "panjang array = ".count($arah);
	 echo "<br>";
	 print_r($arah);
	 	echo "<br>";

	 for ($i=0; $i < count($arah) ; $i++) { 
	 	echo "arah = ".$arah[$i];
	 	echo "<br>";
	 }

	 echo "<br>";

	 foreach ($arah as $namaarah) {
	 	echo $namaarah;

	 }

	//array multidimensi

	// $mahasiswa = array();
	// $mahasiswa[0][0]= "193040133";
	// $mahasiswa[0][1]= "Chandra";
	// $mahasiswa[1][0]= "kuningan";
	// $mahasiswa[1][1]= "089890897";

	// // print("<pre>".print_r($mahasiswa,true)."</pre>"); 

	// for ($i=0; $i < count($mahasiswa) ; $i++) { 
	// 	for ($j=0; $j <2 ; $j++) { 
	// 		echo $mahasiswa[$i][$j];
	// 		echo "<br>";
	// 	}
	// }
 ?>