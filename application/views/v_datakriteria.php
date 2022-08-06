<!DOCTYPE html>
<html>
<head>
	<title>PELINDO - Data Kapal Pendaftar</title>

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
    
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

</head>
<body>
	<br><br>
	<div class="container">
		<h2 style="text-align: center;">Data Kapal Pendaftar</h2><hr>
		<br>		
		<br>
        <h4>FACTOR WEIGHT (FW)</h4><hr>
        <h5>Kriteria dan bobot</h5>
		<table class="table table-bordered">
			<tr align="center" class="bg-col-black">
				<th width="2%">No</th>
				<th width="25%">Kriteria</th>
				<th width="20%">Bobot</th>
			</tr>
			<tr>
				<td align="center">1</td>
				<td>Panjang Dermaga dan LOA</td>
				<td>0,5</td>
			</tr>
            <tr>
				<td align="center">2</td>
				<td>Jenis Kapal</td>
				<td>0,3</td>
			</tr>
            <tr>
				<td align="center">3</td>
				<td>Pengangkutan</td>
				<td>0,2</td>
			</tr>
            <tr>
                <td align="center" colspan="2"><b>Total</b></td>
                <td><b>1,0</b></td>
            </tr>
		</table><br>

        <hr>
        <h4>SUB KRITERIA DAN BOBOT SUB KRITERIA</h4><hr>
        <h5>1. Sub Kriteria Panjang Dermaga dan LOA</h5>
		<table class="table table-bordered">
			<tr align="center"  class="bg-col-grey">
				<th width="12%">Kriteria</th>
				<th width="25%">Sub Kriteria</th>
				<th width="10%">Bobot</th>
			</tr>
			<tr>
				<td align="center" rowspan="2"><b>Panjang Dermaga & LOA</b></td>
				<td>Panjang Dermaga > LOA</td>
				<td>0,7</td>
			</tr>
            <tr>
				<td>Panjang Dermaga < LOA</td>
				<td>0,3</td>
			</tr>
            <tr>
				<td align="center" colspan="2"><b>Total</b></td>
				<td><b>1,0</b></td>
			</tr>
		</table><br>

        <h5>2. Sub Kriteria Jenis Kapal</h5>
		<table class="table table-bordered">
			<tr align="center"  class="bg-col-grey">
				<th width="12%">Kriteria</th>
				<th width="25%">Sub Kriteria</th>
				<th width="10%">Bobot</th>
			</tr>
			<tr>
				<td align="center" rowspan="5"><b>Jenis Kapal</b></td>
				<td>Kapal Rumah sakit/pertolongan</td>
				<td>0,300</td>
			</tr>
            <tr>
				<td>Kapal Perang</td>
				<td>0,250</td>
			</tr>
            <tr>
				<td>Kapal Pemerintah</td>
				<td>0,230</td>
			</tr>
            <tr>
				<td>Kapal Kunjungan</td>
				<td>0,210</td>
			</tr>
            <tr>
				<td>Lainnya</td>
				<td>0,010</td>
			</tr>
            <tr>
				<td align="center" colspan="2"><b>Total</b></td>
				<td><b>1,000</b></td>
			</tr>
		</table><br>

        <h5>3. Sub Kriteria Pengangkutan</h5>
		<table class="table table-bordered">
			<tr align="center"  class="bg-col-grey">
				<th width="12%">Kriteria</th>
				<th width="25%">Sub Kriteria</th>
				<th width="10%">Bobot</th>
			</tr>
			<tr>
				<td align="center" rowspan="3"><b>Pengangkutan</b></td>
				<td>Penumpang</td>
				<td>0,5</td>
			</tr>
            <tr>
				<td>Hewan</td>
				<td>0,3</td>
			</tr>
            <tr>
				<td>Petikemas</td>
				<td>0,2</td>
			</tr>
            <tr>
				<td align="center" colspan="2"><b>Total</b></td>
				<td><b>1,0</b></td>
			</tr>
		</table><br>

        <hr>
        <h4>DATA PENDAFTAR</h4><hr>
        <h5>Data Pendaftar ke - 1</h5>
        <table class="table table-bordered">
            <tr>
                <th width="12%" class="bg-col-navy">Nama</th>
                <td width="35%"></td>
            </tr>
            <tr>
                <th class="bg-col-navy">Panjang Dermaga & LOA</th>
                <td></td>
            </tr>
            <tr>
                <th class="bg-col-navy">Jenis Kapal</th>
                <td></td>
            </tr>
            <tr>
                <th class="bg-col-navy">Pengangkutan</th>
                <td></td>
            </tr>
        </table><br>

        <hr>    
        <h4>EVALUATION</h4><hr>
        <h5>Nilai Faktor Data Pemohon ke - 1</h5>
        <table class="table table-bordered">
            <tr>
                <th width="12%" class="bg-col-blue">Nama</th>
                <td width="35%"></td>
            </tr>
            <tr>
                <th class="bg-col-blue">Panjang Dermaga & LOA</th>
                <td></td>
            </tr>
            <tr>
                <th class="bg-col-blue">Jenis Kapal</th>
                <td></td>
            </tr>
            <tr>
                <th class="bg-col-blue">Pengangkutan</th>
                <td></td>
            </tr>
        </table>
        <br>

        <hr>
        <h4>WEIGHT EVALUATION</h4><hr>
        <h5>Normalisasi Data Pemohon ke - 1</h5>
        <table class="table table-bordered">
            <tr>
                <th width="12%" class="bg-col-yellow">Nama</th>
                <td width="35%"></td>
            </tr>
            <tr>
                <th class="bg-col-yellow">Panjang Dermaga & LOA</th>
                <td></td>
            </tr>
            <tr>
                <th class="bg-col-yellow">Jenis Kapal</th>
                <td></td>
            </tr>
            <tr>
                <th class="bg-col-yellow">Pengangkutan</th>
                <td></td>
            </tr>
        </table><br>

        <hr>
        <h4>∑ WEIGHT EVALUATION</h4>
        <hr>
        <table class="table table-bordered">
            <tr align="center" class="bg-col-green">
                <th colspan="2">Total Bobot</th>
            </tr>
            <tr>
                <td>Tidar</td>
                <td>0,525</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
        
	</div>
</body>
</html>