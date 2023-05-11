<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Operator Logika</title>
	<link rel="stylesheet" href="http://elearning.bsi.ac.id/assets/css/bootstrap.min.css">

</head>
<body>
	<h1>Logika AND</h1>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>True</td>
				<td>True</td>
				<td><?= True && True ?></td>
			</tr>
			<tr>
				<td>True</td>
				<td>False</td>
				<td><?= True && False ?></td>
			</tr>
			<tr>
				<td>False</td>
				<td>True</td>
				<td><?= False && True ?></td>
			</tr>
			<tr>
				<td>False</td>
				<td>False</td>
				<td><?= False && False ?></td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</tfoot>
	</table>
	<h1>Logika OR</h1>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>True</td>
				<td>True</td>
				<td><?= True || True ?></td>
			</tr>
			<tr>
				<td>True</td>
				<td>False</td>
				<td><?= True || False ?></td>
			</tr>
			<tr>
				<td>False</td>
				<td>True</td>
				<td><?= False || True ?></td>
			</tr>
			<tr>
				<td>False</td>
				<td>False</td>
				<td><?= False || False ?></td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</tfoot>
	</table>
	<h1>Logika XOR</h1>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>True</td>
				<td>True</td>
				<td><?= True XOR True ?></td>
			</tr>
			<tr>
				<td>True</td>
				<td>False</td>
				<td><?= True XOR False ?></td>
			</tr>
			<tr>
				<td>False</td>
				<td>True</td>
				<td><?= False XOR True ?></td>
			</tr>
			<tr>
				<td>False</td>
				<td>False</td>
				<td><?= False XOR False ?></td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</tfoot>
	</table>
</body>
</html>