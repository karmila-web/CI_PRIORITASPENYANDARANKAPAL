<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PELINDO | Tambah Data Kapal</title>
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
<br>
<h2 align="center">Update Pengguna</h2>
<hr><br><br>
<?php foreach($user as $usr) : ?>

<form action="<?= base_url().'controller_utama/update_user';  ?>" method="post">
    <div class="container">
        <div class="form-group row">
            <label for="nama_user" class="col-sm-2 col-form-label">Nama User</label>
            <div class="col-sm-10">
                <input name="id_user" value="<?= $usr->id_user?>" type="hidden">
                <input name="nama_user" value="<?= $usr->nama_user?>" type="text" class="form-control" id="nama_user" placeholder="Nama User">
            </div>
        </div>
        <div class="form-group row">
            <label for="status_user" class="col-sm-2 col-form-label">Status User</label>
            <div class="col-sm-10">            
            <select class="form-control" id="sel1" name="status_user">
                <option>--Pilih Status--</option>
                <option value="USER" <?php if($usr->status_user==='USER') echo 'selected="selected"';?>>USER</option>
                <option value="ADMIN" <?php if($usr->status_user==='ADMIN') echo 'selected="selected"';?>>ADMIN</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input name="jabatan" value="<?= $usr->jabatan?>" type="text" class="form-control" id="jabatan" placeholder="Jabatan">
            </div>
        </div>
        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input name="username" value="<?= $usr->username?>" type="text" class="form-control" id="username" placeholder="Username">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input name="password" value="<?= $usr->password?>" type="text" class="form-control" id="password" placeholder="Password">
            </div>
        </div>
        <br><br>
        <button type="submit" class="btn btn-outline-primary btn-block">Update</button>
        <br><br>
    </div>
    
</form>

<?php endforeach; ?>
    
</body>
</html>