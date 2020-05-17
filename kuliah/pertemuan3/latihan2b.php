<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Modul2 - Latihan 1</title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>Kolom 1</th>
			<th>Kolom 2</th>
			<th>Kolom 3</th>
			<th>Kolom 4</th>
			<th>Kolom 5</th>
		</tr>
		<?php for ($i = 1; $i <= 5 ; $i++) : ?>
			<?php if ($i % 2 == 1) :?>
			<tr>
				<?php  for ($j = 1; $j <= 5 ; $j++) : ?>
					<td><?= "Baris $i, Kolom $j ";?></td>
				<?php endfor; ?>
			<?php else : ?>
				<?php  for ($j = 1; $j <= 5 ; $j++) : ?>
					<td><?= "";?></td>
				<?php endfor; ?>
			<?php endif; ?>
			</tr>

		 <?php endfor; ?>

	</table>
</body>
</html>