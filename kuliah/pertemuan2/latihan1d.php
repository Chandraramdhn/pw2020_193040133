<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.box {
			width: 15px;
			height: 15px;
			border: solid 1px;
			padding: 15px;
		}
	</style>
</head>
<body>
<table>
	<?php 
		$a="A";
		$b="B";
		$c="C";

	?>
	<tr>
	<td><div class="box"> <?php echo $a; ?> </div></td>
	<td><div class="box"> <?php echo $a; ?> </div></td>
	<td><div class="box"> <?php echo $a; ?> </div></td>
	</tr>
	<tr>
	<td><div class="box"> <?php echo $b; ?> </div></td>
	<td><div class="box"> <?php echo $b; ?> </div></td>
	</tr>
	<tr>
	<td><div class="box"> <?php echo $c; ?> </div></td>
	</tr>
</table>
</body>
</html>