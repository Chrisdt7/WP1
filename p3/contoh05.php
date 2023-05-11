<?php
define("JUDUL", "Latihan PHP <br>");
$no ="1" ;
$title ="Contoh Script PHP" ;
$nim ="12220681" ;
$nama ="Christy Dany Tallane" ;
$kelas ="12.2B.24" ;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan PHP</title>
</head>
<body>
<?php 
echo JUDUL ;
echo "
	No : $no<br>
	Nim : $nim<br>
	Nama : $nama<br>
	Kelas : $kelas
" ;
?>
</body>
</html>
