<?php 
	$lagu = "mana dimana anak kambing saya anak kambing tuan ada di pohon waru mana dimana jantung hati saya jantung hati tuan ada di kampung baru caca marica he hei caca marica he hei caca marica ada di kampung baru caca marica he hey caca marica he hey caca marica ada di kampung baru";
	$lagu1 =  str_replace("a","o", $lagu);
	$lagu2 =  str_replace("i","o", $lagu1);
	$lagu3 =  str_replace("u","o", $lagu2);
	$lagu4 =  str_replace("e","o", $lagu3);

		echo "$lagu4";

 ?>