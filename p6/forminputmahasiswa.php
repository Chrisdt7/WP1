<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Data Mahasiswa</title>
</head>
<body bgcolor="#00780a">
	<table align="center">
		<tr>
			<td><b style="color: white;">Pengelolaan Data Mahasiswa</b><td>
		</tr>
	</table>

	<br><hr style="color: white;">

	<table>
		<form method="GET" action="tampilmahasiswa.php">

			<tr>
				<td width="100px" style="color: white;">Nama</td>
				<td width="10px" style="color: white;">:</td>
				<td><input type="text" name="Nama" size="25" maxlength="50" required></td>
			</tr>

			<tr>
				<td width="100px" style="color: white;">Alamat</td>
				<td width="10px" style="color: white;">:</td>
				<td><input type="text" name="Alamat" size="25" maxlength="50" required></td>
			</tr>
			
			<br>

			<tr>
				<td width="100px" style="color: white;">Jenis Kelamin</td>
				<td width="10px" style="color: white;">:</td>
				<td style="color: white;">
					Laki-Laki
					<input type="radio" name="Jk" value="Laki-Laki">
					Perempuan
					<input type="radio" name="Jk" value="Perempuan">
				</td>
			</tr>

			<tr>
				<td style="color: white;">Pekerjaan</td>
				<td style="color: white;">:</td>
				<td>
					<select name="Pekerjaan" required>
						<option value="Pelajar">Pelajar
						<option value="Karyawan">Karyawan
						<option value="Wirausaha">Wirausaha
						<option value="Lain-Lain">Lain-Lain
					</select>
				</td>
			</tr>

			<tr>
				<td style="color: white;">Hobi</td>
				<td style="color: white;">:</td>
				<td style="color: white;">
					<input type="checkbox" name="Hobi1" value="Olahraga">Olahraga
					<input type="checkbox" name="Hobi2" value="Musik">Musik
					<input type="checkbox" name="Hobi3" value="Jalan-Jalan">Jalan-Jalan
					<input type="checkbox" name="Hobi4" value="Lain-Lain">Lain-Lain
				</td>
			</tr>

			<tr>
				<td>
					<p>
						<input type="submit" name="submit" value="Kirim">
						<input type="reset" name="reset" value="Batal">	
					</p>
				</td>
			</tr>

		</form>
	</table>
</body>
</html>