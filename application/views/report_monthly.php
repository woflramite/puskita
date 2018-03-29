<html>
<head>
	<title>Puskita - Arsip</title>
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
</style>

<body style="background-color:#d8d8d8">
	<!---------------------------------------------------JUMBOTRON--------------------------------------------------->
	<div class="jumbotron vertical-center" style="padding-left:10px">
		<h2>Arsip Bulanan</h2>
	</div>
	<!---------------------------------------------------JUMBOTRON--------------------------------------------------->

	<!---------------------------------------------------SELECT DATE--------------------------------------------------->
	<div class="container-fluid" style="padding:40px 50px 40px 50px;background-color:white">
		<form class="form-group" action="<?php echo base_url('report/archive'); ?>" method="post"><center>
			<table>
				<tr>
					<td>
						<font color="#FF0000"><?php echo form_error('month'); ?>
						<select class="form-control" name="month" id="month" value="<?php echo set_value('month');?>">
							<option value="">Pilih Bulan</option>
							<option value="1">Januari</option>
							<option value="2">Februari</option>
							<option value="3">Maret</option>
							<option value="4">April</option>
							<option value="5">Mei</option>
							<option value="6">Juni</option>
							<option value="7">Juli</option>
							<option value="8">Agustus</option>
							<option value="9">September</option>
							<option value="10">Oktober</option>
							<option value="11">November</option>
							<option value="12">Desember</option>
						</select>
					</td>
					<td>
						<font color="#FF0000"><?php echo form_error('year'); ?>
						<select class="form-control" name="year" id="year" value="<?php echo set_value('year');?>">
							<option value="">Pilih Tahun</option>
							<?php
							
							for ($i=2000; $i<=2017; $i++) {
								echo '<option value="'.$i.'">'.$i."</option>";
							}
							
							
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<button type="submit" class="btn btn-primary btn-block">Lihat Arsip</button>
					</td>
				</tr>
			</table>
		<center></form>
	</div>
	<!---------------------------------------------------SELECT DATE--------------------------------------------------->
</body>