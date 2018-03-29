<html>
<head>
	<title>Puskita - Laporan</title>
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
		margin-bottom: 50px;
	}
	
	table, th, td {
		padding:5px;
	}
</style>

<body style="background-color:#d8d8d8">
	<!---------------------------------------------------QUERY RESULT--------------------------------------------------->
	<div class="container-fluid" style="padding:40px 50px 40px 50px;background-color:white">
		<h3>Hasil Kueri</h3>
		<center>
		<?php
			echo $this->table->generate($query_result)
		?>
		</center>
	</div>
	<!---------------------------------------------------QUERY RESULT--------------------------------------------------->
</body>