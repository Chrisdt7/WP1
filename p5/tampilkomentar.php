<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tampil Komentar</title>
</head>
<body>
	<h1>Komentar Anda</h1>
	<hr>
	
	<?php 
		$nama = $_GET['nama'];
		$email = $_GET['email'];
		$komentar = $_GET['komentar'];

		echo "
			Nama Anda : $nama<br>
			Email Anda : $email<br>
			komentar Anda : $komentar<br>
		"
	?>

 <a href="forminputkomentar.php"><input title="INPUT DATA LAGI" type="button" value="INPUT DATA LAGI"></input></a>

</body>
</html>