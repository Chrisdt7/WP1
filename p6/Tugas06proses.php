<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas 06</title>
</head>
<body>

	<h1>Data Registrasi</h1>

	<?php
		$nama 	= $_GET['nama'];
		$alamat = $_GET['alamat'];
		$tmpt	= $_GET['tmpt'];
		$tggl	= $_GET['tggl'];
		$jk 	= $_GET['jk'];
		$pend	= $_GET['pend'];
	?>

	<table border="1" cellpadding="4">
		
		<tr>
			<td width="281px">Nama</td>
			<td width="281px"><?php echo $nama; ?></td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td><?php echo $alamat; ?></td>
		</tr>

		<tr>
			<td>Tempat Lahir</td>
			<td><?php echo $tmpt; ?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><?php echo $tggl; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><?php echo $jk; ?></td>
		</tr>
		<tr>
			<td>Pendidikan</td>
			<td><?php echo $pend; ?></td>
		</tr>

	</table>

	<a href="Tugas06.php"><input type="button" value="Back To Home"></a>

</body>
</html>