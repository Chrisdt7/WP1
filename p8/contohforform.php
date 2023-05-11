<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perulangan For</title>
</head>
<body>
	Penggunaan pada form :
	<br>
	<?php
		echo "<form name = form1 method=post>";
		echo "Tanggal";
		echo "<select name = tanggal>";
		for ($tanggal=1; $tanggal<=31 ; $tanggal++)
			{ 
				echo "<option value=".$tanggal.">".$tanggal."</option>";
			}
		echo "</select></form>";
	?>
</body>
</html>