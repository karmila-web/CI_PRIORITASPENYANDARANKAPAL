<!DOCTYPE html>
<html>
<head>
	<title>PELINDO - Data User</title>

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
		<h2 style="text-align: center;">Data User Sistem</h2><hr>
		<br>
			<a href="<?= base_url() ?>controller_utama/v_tambahuser" class="btn btn-dark btn-sm"><i class="fa fa-plus"></i> Tambah User</a>
		<br>		
		<br>		
		<table class="table table-bordered">
			<tr align="center">
				<th width="1%">No</th>
				<th width="10%">Status User</th>
				<th width="15%">Jabatan</th>
				<th width="20%">Username</th>
				<th width="20%">Password</th>
				<th width="9%">Aksi</th>
			</tr>
			<?php 
				// $no=1;
				// foreach ($user as $usr) :
			?>

			<tr>
				<td><?php //= $no++; ?></td>
				<td><?php //= $usr->status_user ?></td>
				<td><?php //= $usr->jabatan ?></td>
				<td><?php //= $usr->username ?></td>
				<td><?php //= $usr->password ?></td>
				<td align="center"><a class="btn btn-danger"  href="" role="button"><i class="fa fa-trash"></i></a> || <a class="btn btn-warning" href=""><i class="fa fa-edit"></i></a></td>
			</tr>

			<?php // endforeach; ?>
		</table>
	</div>
</body>
</html>