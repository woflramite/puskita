<head>
	<title>Puskita - Laporan/Arsip</title>
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
		<h2>Laporan Transaksi Puskita</h2>
	</div>
	<!---------------------------------------------------JUMBOTRON--------------------------------------------------->

	<!---------------------------------------------------ROW&COLUMN--------------------------------------------------->
	<div class="container-fluid" style="background-color:white; padding-top:40px; padding-bottom:40px">
		<div class="row">
			<div class="col-lg-4" align="center" style="padding-top:20px; padding-bottom:20px">
				<h3>Arsip Bulanan</h3>
				<p>Klik tombol Arsip untuk melihat transaksi bulanan<br><br></p>
				<a href="<?php echo base_url('report/archive'); ?>"><button type="button" class="btn btn-primary btn-block" style="width:50%">Arsip</button></a><br>
			</div>
			<div class="col-lg-4" align="center" style="padding-top:20px; padding-bottom:20px">
				<h3>Stok Buku</h3>
				<p>Klik tombol Stok untuk melihat stok buku Puskita<br><br></p>
				<a href="<?php echo base_url('report/stock'); ?>"><button type="button" class="btn btn-primary btn-block" style="width:50%">Stok</button></a>
			</div>
			<div class="col-lg-4" align="center" style="padding-top:20px; padding-bottom:20px">
				<h3>Kueri Sendiri</h3>
				<p>Klik tombol Pengembalian untuk memasukkan kueri sendiri<br><br></p>
				<a href="<?php echo base_url('report/self_query'); ?>"><button type="button" class="btn btn-primary btn-block" style="width:50%">Kueri Sendiri</button></a>
			</div>
		</div>
	</div>
	<!---------------------------------------------------ROW&COLUMN--------------------------------------------------->
</body>