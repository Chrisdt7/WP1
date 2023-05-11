<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Mahasiswa</title>
</head>
<body bgcolor="#00780a">

	<?php

		$Nama 		= isset($_GET['Nama']) ? $_GET['Nama'] : '';
		$Alamat 	= isset($_GET['Alamat']) ? $_GET['Alamat'] : '';
		$Jk 		= isset($_GET['Jk']) ? $_GET['Jk'] : '';
		$Pekerjaan 	= isset($_GET['Pekerjaan']) ? $_GET['Pekerjaan'] : '';
		$Hobi1 		= isset($_GET['Hobi1']) ? $_GET['Hobi1'] : '';
		$Hobi2 		= isset($_GET['Hobi2']) ? $_GET['Hobi2'] : '';
		$Hobi3 		= isset($_GET['Hobi3']) ? $_GET['Hobi3'] : '';
		$Hobi4 		= isset($_GET['Hobi4']) ? $_GET['Hobi4'] : '';
		
	?>

	<table border="1" bgcolor="cyan" align="center">
		
		<thead>
			<tr>
				<th colspan="2">Data Mahasiswa</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>Nama</td>
				<td><?php echo $Nama; ?></td>
			</tr>
			<tr>	
				<td>Alamat</td>
				<td><?php echo $Alamat; ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><?php echo $Jk; ?></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td><?php echo $Pekerjaan; ?></td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td><?php echo $Hobi1; ?> <?php echo $Hobi2; ?> <?php echo $Hobi3; ?> <?php echo $Hobi4; 
				?></td>
			</tr>
		</tbody>

	</table>
	<hr>
	<a href="forminputmahasiswa.php">
		<table align="center">
			<tr>
				<td>
					<input title="INPUT DATA LAGI" type="button" value="INPUT DATA LAGI">
				</td>
			</tr>
		</table>
	</a>

</body>
</html>