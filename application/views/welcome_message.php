<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<title>Alika</title>
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/img/alika.png" type=" image/x-icon">
	<link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>


</head>

<body>

	<main>
		<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
			<div class="col-md-6 p-lg-5 mx-auto my-5">
				<h1 class="display-4 font-weight-normal">Hai!, Selamat Datang di Alika.</h1>
				<p class="font-weight-light mt-4">Dengan Alika, kami hadirkan pengalaman terbaik dalam mengakses informasi keuangan di layar Anda.</p>
				<a class="btn btn-outline-danger mb-3" href="https://sso.djkn.kemenkeu.go.id/via/sso/remote/login?client_id=portalkeuangan&redirect_uri=http://localhost:8888/x-alika/sso&no_cache=123">Login Menggunakan SSO DJKN</a>
				<!-- <p class="text-muted">atau</p>
				<a href="<?= base_url('sign-in'); ?>" class="text-muted">Login dengan Akun Alika</a> -->
			</div>
		</div>
	</main>

	<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

</body>

</html>