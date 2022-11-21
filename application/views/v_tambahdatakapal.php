<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PELINDO | Tambah User</title>
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
<h2 align="center">Tambah Data Penyandaran Kapal</h2>
<hr><br><br>
<form method="post" action="<?= base_url(). 'controller_utama/aksitambahdatakapal'; ?>" >
	<div class="container">
        <div class="form-group row">
            <label for="nama_kapal" class="col-sm-2 col-form-label">Nama Kapal</label>
            <div class="col-sm-10">
                <input name="nama_kapal" type="nama_kapal" class="form-control" id="nama_kapal" placeholder="Nama Kapal">
            </div>
        </div>
        <div class="form-group row">
            <label for="jenis_kapal" class="col-sm-2 col-form-label">Jenis Kapal</label>
            <div class="col-sm-10">            
                <select class="form-control" id="sel1" name="jenis_kapal">
                    <option>--Pilih Jenis Kapal--</option>
                    <option value="PEMERINTAH">PEMERINTAH</option>
                    <option value="KAPAL PERANG">KAPAL PERANG</option>
                    <option value="KAPAL KUNJUNGAN">KAPAL KUNJUNGAN</option>
                    <option value="KAPAL PERANG">LAINNYA</option>
                </select>
            </div>
        </div>  
        <div class="form-group row">
            <label for="pengangkutan" class="col-sm-2 col-form-label">Pengangkutan</label>
            <div class="col-sm-10">            
                <select class="form-control" id="sel1" name="pengangkutan">
                    <option>--Pilih Pengangkutan--</option>
                    <option value="PENUMPANG">PENUMPANG</option>
                    <option value="HEWAN">HEWAN</option>
                    <option value="PETIKEMAS">PETIKEMAS</option>
                </select>
            </div>
        </div>  
        <div class="form-group row">
            <label for="panjang_dermaga" class="col-sm-2 col-form-label">Panjang Dermaga</label>
            <div class="col-sm-10">
                <input name="panjang_dermaga" type="panjang_dermaga" class="form-control" id="panjang_dermaga" placeholder="Panjang Dermaga">
            </div>
        </div>
        <div class="form-group row">
            <label for="LOA" class="col-sm-2 col-form-label">LOA</label>
            <div class="col-sm-10">
                <input name="LOA" type="LOA" class="form-control" id="LOA" placeholder="LOA">
            </div>
        </div>

        <br><br>
        <button type="submit" class="btn btn-outline-primary btn-block">Daftar</button>
        <br><br>

    </div>

</form>
    
</body>
</html>