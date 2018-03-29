<head>
	<meta charset="UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<!---------------------------------------------------NAVIGATION BAR--------------------------------------------------->
	<nav class="navbar navbar-inverse">
		<div class="container-fluid"">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="<?php echo base_url(''); ?>">Puskita</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo base_url(''); ?>">Beranda</a></li>
					<li><a href="<?php echo base_url('register'); ?>">Registrasi Anggota</a></li>
					<li><a href="<?php echo base_url('search'); ?>">Cari</a></li>
					<li><a href="<?php echo base_url('transaction'); ?>">Transaksi</a></li>
					<li><a href="<?php echo base_url('report'); ?>">Laporan</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url('login/logout'); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
<!---------------------------------------------------NAVIGATION BAR--------------------------------------------------->
</body>