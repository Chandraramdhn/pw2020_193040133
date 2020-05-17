<!DOCTYPE html>
<html>
<head>
	<title>Modul 2 latihan 2d</title>
	<style>
		.kotak {
			background-color: white;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
			border: 1px solid;
			float: left;
			margin: 2px;
			color: black;  
		}
		.kotak1 {
			background-color: #57e65a;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
			border: 1px solid;
			float: left;
			margin: 2px;
			color: black; 
		}
		.clear{
			clear: both;
		}
		.ganjil {
			background-color: #003;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
			border: 1px solid;
			float: left;
			margin: 2px;
			color: white; 
		}
		.genap {
			background-color: #57e65a;
		}
	</style>
</head>
<body>
	<?php 
		$k1 = 1;
		$k2 = 1;

		while ($k1 <= 1) {
			for ($k2=1; $k2 <= 1 ; $k2++) { 
				echo "<div class='kotak'>#$k1</div>";
				echo "<div class='ganjil'>$k2</div>";
			}

			echo "<div class='clear'></div>";
			$k1++;
		}
		while ($k1 <= 2) {
			for ($k2=1; $k2 <= 2 ; $k2++) { 
				echo "<div class='kotak'>#$k1</div>";
				echo "<div class='kotak1'>$k2</div>";
			}

			echo "<div class='clear'></div>";
			$k1++;
		}
		while ($k1 <= 3) {
			for ($k2=1; $k2 <= 3 ; $k2++) { 
				echo "<div class='kotak'>#$k1</div>";
				echo "<div class='ganjil'>$k2</div>";
			}

			echo "<div class='clear'></div>";
			$k1++;
		}
		while ($k1 <= 4) {
			for ($k2=1; $k2 <= 4 ; $k2++) { 
				echo "<div class='kotak'>#$k1</div>";
				echo "<div class='kotak1'>$k2</div>";
			}

			echo "<div class='clear'></div>";
			$k1++;
		}
		while ($k1 <= 5) {
			for ($k2=1; $k2 <= 5 ; $k2++) { 
				echo "<div class='kotak'>#$k1</div>";
				echo "<div class='ganjil'>$k2</div>";
			}

			echo "<div class='clear'></div>";
			$k1++;
		}
	 ?>

</body>
</html>