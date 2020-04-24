<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login || spp</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/dist/css/bootstrap.min.css') ?>">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/Login/vendor/bootstrap/css/bootstrap.min.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/Login/fonts/iconic/css/material-design-iconic-font.min.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/Login/vendor/animate/animate.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/Login/vendor/css-hamburgers/hamburgers.min.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/Login/vendor/animsition/css/animsition.min.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/Login/vendor/select2/select2.min.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/Login/vendor/daterangepicker/daterangepicker.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/Login/css/util.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/Login/css/main.css') ?>">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" <?php echo form_open('LoginSiswa/proses_login') ?>
                
					<span class="login100-form-title p-b-70">
						SELAMAT DATANG <br>
						<p>Silahkan Login Terlebih Dahulu!</p>
					</span>


					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="nis">
						<span class="focus-input100" data-placeholder="Nis"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">
							Login
						</button>
					</div>

                    <?php echo form_open('LoginSiswa/proses_login') ?>

					<ul class="login-more p-t-190">
						<li class="m-b-8">
							<span class="txt1">
								Lupa
							</span>

							<a href="#" class="txt2">
								Username / Password?
							</a>
						</li>

						<li>
							<span class="txt1">
								Silahkan Hubungi Admin
							</span>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

	<script src="<?= base_url('assets/Login/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>

	<script src="<?= base_url('assets/Login/vendor/animsition/js/animsition.min.js') ?>"></script>
	<script src="<?= base_url('assets/Login/vendor/bootstrap/js/popper.js') ?>"></script>
	<script src="<?= base_url('assets/Login/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/Login/vendor/select2/select2.min.js') ?>"></script>
	<script src="<?= base_url('assets/Login/vendor/daterangepicker/moment.min.js') ?>"></script>
	<script src="<?= base_url('assets/Login/vendor/daterangepicker/daterangepicker.js') ?>"></script>

	<script src="<?= base_url('assets/Login/vendor/countdowntime/countdowntime.js') ?>"></script>

	<script src="<?= base_url('assets/Login/js/main.js') ?>"></script>
	


</body>
</html>