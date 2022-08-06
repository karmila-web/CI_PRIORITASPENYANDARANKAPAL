<!doctype html>
<html lang="en">
  <head>
  	<title>Halaman Login</title>
  	<!-- Icon Pelindo for title -->
    <link rel="icon" href="<?= base_url() ?>assets/images/LOGO3.png" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?= base_url() ?>assets_login/css/style.css">


	</head>
	<body class="img js-fullheight" style="background-image: url(<?= base_url() ?>assets/images/loader1.png);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<!-- <h2 class="heading-section">Login Pembelajaran</h2> --> <br>
                    <a class="navbar-brand" href="" style="background-color: white"><img class="logo" src="<?= base_url() ?>assets/images/LOGO2.png" alt="" /></a>
                </div>
            </div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
					<!-- <h3 class="mb-4 text-center">Apakah anda sudah punya akun?</h3> -->
					<form method="post" action="../koneksi/cek_login.php" class="signin-form">
						<div class="form-group">
							<input type="text" name="nim" class="form-control" placeholder="Masukkan Username Yang Benar" required>
						</div>
						<div class="form-group">
							<input id="password-field" type="password" name="password" class="form-control" placeholder="Masukkan Password Yang Benar" required>
							<!-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> -->
						</div><br><br>
                        <div class="row justify-content-end">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <td width="10px" >
                                        <button type="submit" class="btn btn-light submit px-5"><b>Login</b></button><br><br>
                                    </td>
                                </div>
                            </div>  
						</div>
					</form>
	          	</div>
		    </div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

