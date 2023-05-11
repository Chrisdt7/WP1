<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Percabangan</title>
</head>
<body>
	<table>
		<form action="" method="GET">
			<input type="text" name="input" >
			<input type="button" name="submit" value="submit">
		</form>
	</table>

	<?php 
	if (isset($_GET['submit'])) {
	
	$input = $_GET['input'];
	if ($input < 6.3) {
		$warna = "yellow";
		echo "<div style = 'background:$warna;'>Angka = $input</div>";
	}
	elseif ($input <= 7.3) {
		$warna = "green";
		echo "<div style = 'background:$warna;'>Angka = $input</div>";
	}
	else
	{
		$warna = "red";
		echo "<div style = 'background:$warna;'>Angka = $input</div>";
	}}
	?>
</body>
</html>