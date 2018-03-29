<!DOCTYPE html>

<head>
	<title>Puskita</title>
	<meta charset="UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>
	.vertical-center {
		min-height: 200px;

		display: flex;
		align-items: center;
	}
	
	.navbar{
		margin-bottom: 0!important;
	}
</style>

<body style="background-color:#d8d8d8">
	<!---------------------------------------------------JUMBOTRON--------------------------------------------------->
	<div class="jumbotron vertical-center">
		<h1>Selamat datang di Puskita<h1>
	</div>
	<!---------------------------------------------------JUMBOTRON--------------------------------------------------->
	
	<!---------------------------------------------------ROW&COLUMN--------------------------------------------------->
	<div class="container-fluid" style="background-color:white; padding-top:40px; padding-bottom:40px">
		<div class="row">
			<div class="col-lg-6" align="center" style="padding-top:20px; padding-bottom:20px">
				<h3>Registrasi Akun</h3>
				<p>Klik tombol Registrasi untuk mendaftar akun<br><br></p>
				<a href="<?php echo base_url('register'); ?>"><button type="button" class="btn btn-primary btn-block" style="width:50%">Registrasi</button></a><br>
				<p>Anda Admin? Klik <a href="<?php echo base_url('login');?>">di sini</a>.</p>
			</div>
			<div class="col-lg-6" align="center" style="padding-top:20px; padding-bottom:20px">
				<h3>Cari Buku</h3>
				<p>Klik tombol Cari untuk mencari buku tersedia<br><br></p>
				<a href="<?php echo base_url('search'); ?>"><button type="button" class="btn btn-primary btn-block" style="width:50%">Cari</button></a>
			</div>
		</div>
	</div>	<!---------------------------------------------------ROW&COLUMN--------------------------------------------------->
</body>