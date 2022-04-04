<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Register-page</title>
	<!-- Custom fonts for this template-->
	<link href="<?= base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

	<?= $this->renderSection('styles') ?>
</head>

<body class="bg-gradient-primary">

	<div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-xl-10 col-lg-12 col-md-9">

				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">REGISTER</h1>
							</div>
							<?php if(session()->getFlashdata('error')): ?>
								<div class="alert alert-danger alert-dismissible show fade">
									<div>
										<button class="close" data-dismiss="alert">x</button>
										<b>error !</b>
										<?= session()->getFlashdata('error'); ?>
									</div>
								</div>
							<?php endif; ?>
							<?php
							$karakter = '123456789';
							$shuffle  = substr(str_shuffle($karakter), 0, 9);
							$kode  = substr(str_shuffle($karakter), 0, 2);
							$superadmin = "SPADM";
							$admin = "ADM";
							$user = "USR";

							?>
							<form class="user" method="post" action="<?= base_url(); ?>/register/process">
							<div class="form-group">
									<input type="hidden" name="userid" class="form-control form-control-user" id="exampleInputEmail" value="<?= $kode.$superadmin.$shuffle; ?>">
								</div>
								<div class="form-group">
									<input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username">
								</div>
								<div class="form-group">
									<input type="password" name="pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
								</div>
								<div class="form-group">
									<input type="password" name="pass_conf" class="form-control form-control-user" id="exampleInputPassword" placeholder="Konfirmasi Password">
								</div>
								<div class="form-group">
									<input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="text" name="namalengkap" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nama Lengkap">
								</div>
								<div class="form-group">
									<select name="cabang" id="cabang">
										<option value="JAKARTA">JAKARTA</option>
										<option value="SURABAYA">SURABAYA</option>
									</select>
								</div>
								<div class="form-group">
									<select name="akses" id="akses">
										<option value="1">Super Admin</option>
										<option value="2">Admin</option>
										<option value="3">Pegawai</option>
									</select>
								</div>
								<div class="form-group">
									<input type="hidden" name="isaktif" class="form-control form-control-user" id="exampleInputEmail" value="1">
								</div>
								
								<div class="form-group">
									<div class="custom-control custom-checkbox small">
										<input type="checkbox" class="custom-control-input" id="customCheck">
									</div>
								</div>
								<button type="submit" class="btn btn-primary">Daftar</button>
							</form>
							<div class="text-center">
								<a class="small" href="forgot-password.html">Forgot Password?</a>
							</div>
							<div class="text-center">
								<a class="small" href="<?= base_url('login'); ?>">Login an Account!</a>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin-2.min.js"></script>

</body>

</html>