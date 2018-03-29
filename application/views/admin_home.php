<!DOCTYPE html>

<head>
	<title>Puskita - Beranda</title>
	<meta charset="UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body style="background-color:#d8d8d8">
	<!---------------------------------------------------JUMBOTRON--------------------------------------------------->
	<div class="jumbotron vertical-center">
		<?php foreach($administrator as $admin){ ?>
			<h1> Selamat datang, <?php echo $admin->nama_admin ?>! </h1>
		<?php } ?>
	</div>
	<!---------------------------------------------------JUMBOTRON--------------------------------------------------->

	<!---------------------------------------------------ROW&COLUMN--------------------------------------------------->
	<div class="container-fluid" style="background-color:white; padding-top:40px; padding-bottom:40px">
		<div class="row">
			<div class="col-lg-6" align="center" style="padding-top:20px; padding-bottom:20px">
				<h3>Registrasi Akun</h3>
				<p>Klik tombol Registrasi untuk mendaftarkan akun<br><br></p>
				<a href="<?php echo base_url('register'); ?>"><button type="button" class="btn btn-primary btn-block" style="width:50%">Registrasi</button></a><br>
			</div>
			<div class="col-lg-6" align="center" style="padding-top:20px; padding-bottom:20px">
				<h3>Cari Buku</h3>
				<p>Klik tombol Cari untuk mencari buku tersedia<br><br></p>
				<a href="<?php echo base_url('search'); ?>"><button type="button" class="btn btn-primary btn-block" style="width:50%">Cari</button></a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6" align="center" style="padding-top:20px; padding-bottom:20px">
				<h3>Transaksi</h3>
				<p>Klik tombol Transaksi untuk melakukan transaksi sirkulasi buku<br><br></p>
				<a href="<?php echo base_url('transaction'); ?>"><button type="button" class="btn btn-primary btn-block" style="width:50%">Transaksi</button></a><br>
			</div>
			<div class="col-lg-6" align="center" style="padding-top:20px; padding-bottom:20px">
				<h3>Laporan Peminjaman</h3>
				<p>Klik tombol Laporan untuk mencari buku tersedia<br><br></p>
				<a href="<?php echo base_url('report'); ?>"><button type="button" class="btn btn-primary btn-block" style="width:50%">Laporan</button></a>
			</div>
		</div>
	</div>
	<!---------------------------------------------------ROW&COLUMN--------------------------------------------------->
</body>