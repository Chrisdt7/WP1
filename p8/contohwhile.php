<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Penggunaan WHILE</title>
</head>
<body>
	Menggunakan WHILE
	<br>
	<?php
		$jumlah=1;
		while ($jumlah<=5)
		{
			echo $jumlah++;
			echo "<br>";
		}
	?>
</body>
</html>