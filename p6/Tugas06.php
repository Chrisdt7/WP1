<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Registrasi</title>
</head>
<body>
	<p><h1>Form Registrasi</h1>
	
	<form method="GET" action="Tugas06proses.php">
		<table>
		
			<tr>
				<td>Isi Data Dibawah ini :</td>
			</tr>
		
			<tr>	
				<td>Nama</td>
				<td><input type="text" name="nama" required></td>
			</tr>
		
			<tr>	
				<td>Alamat</td>
				<td><textarea rows="4" cols="40" name="alamat" required></textarea></td>
			</tr>
		
			<tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="tmpt" required></td>
			</tr>

			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="text" name="tggl" required></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="jk" value="L">Laki-Laki
					<input type="radio" name="jk" value="P">Perempuan
				</td>	
			</tr>

			<tr>
				<td>Pendidikan</td>
				<td>
					<select name="pend" required>
						<option value="D3">D3</option>
						<option value="S1">S1</option>
						<option value="S2">S2</option>
						<option value="S3">S3</option>
				</td>
			</tr>

			<tr>
				<td>
					<input type="submit" name="submit" value="Submit">
					<input type="reset" name="reset" value="Cancel">
				</td>
			</tr>

		</table>
	</form>

</body>
</html>