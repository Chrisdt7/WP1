<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Masukan Data</title>
</head>
<body>
	
	<h1>Masukan Identitas Anda</h1>

	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
		<pre>
			Isikan Nama		: <input type="text" name="nama">
			Isikan No Telepon	: <input type="text" name="telp">
			Isikan Alamat		: <textarea name="alamat" rows="5" cols="40"></textarea>
			<input type="submit" value="Tampil"><input type="reset" value="Batal">
		</pre>
	</form>

	<?php	
		if (isset($_POST['nama']))   { 	$nama 	= $_POST['nama']; 	} 	else { $nama = ""; 	 }
		if (isset($_POST['telp']))   { 	$telp 	= $_POST['telp']; 	} 	else { $telp = "";   } 
		if (isset($_POST['alamat'])) { 	$alamat = $_POST['alamat']; } 	else { $alamat = ""; }

		if (!empty($nama)){
			echo "<hr>Nama 		: $nama<br>";}
		if (!empty($telp)){
			echo "No Telepon 	: $telp<br>";}
		if (!empty($alamat)){
			echo "Alamat 		: $alamat";}
	?>

</body>
</html>