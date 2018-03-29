<head>
	<title>Puskita - Transaksi</title>
	<meta charset="UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>
	.vertical-center {
		min-height: 50px;

		display: flex;
		align-items: center;
	}
</style>

<body style="background-color:#d8d8d8">
	<!---------------------------------------------------JUMBOTRON--------------------------------------------------->
	<div class="jumbotron vertical-center" style="padding-left:10px">
		<h2>Transaksi Sirkulasi Puskita</h2>
	</div>
	<!---------------------------------------------------JUMBOTRON--------------------------------------------------->

	<!---------------------------------------------------ROW&COLUMN--------------------------------------------------->
	<div class="container-fluid" style="background-color:white; padding-top:40px; padding-bottom:40px">
		<div class="row">
			<div class="col-lg-6" align="center" style="padding-top:20px; padding-bottom:20px">
				<h3>Peminjaman Buku</h3>
				<p>Klik tombol Peminjaman untuk menambahkan pinjaman baru<br><br></p>
				<a href="<?php echo base_url('transaction/borrowBook'); ?>"><button type="button" class="btn btn-primary btn-block" style="width:50%">Peminjaman</button></a><br>
			</div>
			<div class="col-lg-6" align="center" style="padding-top:20px; padding-bottom:20px">
				<h3>Pengembalian Buku</h3>
				<p>Klik tombol Pengembalian untuk mengubah status peminjaman buku<br><br></p>
				<a href="<?php echo base_url('transaction/returnBook'); ?>"><button type="button" class="btn btn-primary btn-block" style="width:50%">Pegembalian</button></a>
			</div>
		</div>
	</div>
	<!---------------------------------------------------ROW&COLUMN--------------------------------------------------->
</body>