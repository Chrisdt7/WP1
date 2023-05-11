<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Komentar</title>
</head>
<body>
	<h1>BUKU TAMU</h1>
	<p><br>
		Komentar dan Saran anda sangat kami butuhkan<br>
		Untuk meningkatkan kualitas situs kami
	</p><hr>
	<table>
		<form method="GET" action="tampilkomentar.php">
			<tr>
				<td>Nama Anda</td>
				<td width="200px" align="right">:</td>
				<td><input type="text" name="nama" size="30" required><br></td>
			</tr>
			<tr>
				<td>Email Anda</td>
				<td width="200px" align="right">:</td>
				<td><input type="text" name="email" size="30" required><br></td>
			</tr>
			<tr>
				<td>Komentar Anda</td>
				<td width="200px" align="right">:</td>
				<td><textarea name="komentar" required></textarea><br></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" id="submit" value="kirim">
					<input type="reset" name="reset" id="reset" value="batal">
				</td>
			</tr>
		</form>
	</table>

	<?php
		if (isset($_GET[''])){
			$nama = $_GET['nama'];
			$email = $_GET['email'];
			$komentar = $_GET['komentar'];
			
			echo "nama = $nama <br>";
			echo "email = $email <br>";
			echo "komentar = $komentar";
		}
	?>
</body>
</html>