<!DOCTYPE html>
<html>
<head>
	<title>PELINDO - Data Kapal Prioritas</title>

	<!-- Icon Pelindo for title -->
	<link rel="icon" href="<?= base_url() ?>assets/images/LOGO3.png" />

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	    <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css" />

</head>
<body>
	<br><br>
	<div class="container">
		<h2 style="text-align: center;">Data Kapal Prioritas</h2><hr>
		<br>
		<br>		
		<table class="table table-bordered">
			<tr align="center">
				<th width="1%">No</th>
				<th width="30%">Nama Kapal</th>
				<th width="9%">Aksi</th> <!-- Jika status antri berubah jdi status berangkat maka data kapal akan hilang dihalaman ini tapi di halaman data kapal masih tetap muncul -->
			</tr>
				<tr>
					<td></td>
					<td></td>
					<td align="center"><a class="btn btn-success" href="" role="button">Proses</a></a></td>
				</tr>
			</table>
			<br><br>
			<br>
			<br><br><hr>
	</div>
</body>
</html>