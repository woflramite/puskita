<html>
<head>
	<title>Puskita - Registrasi</title>
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
	<!---------------------------------------------------REGISTRASI FORM--------------------------------------------------->
	<div class="container-fluid" style="width:600px; padding-top:40px; padding-bottom:60px; background-color:white">
		<center>
			<h3>Registrasi Anggota Perpustakaan</h3>
			<form class="form-group" action="<?php echo base_url('register'); ?>" name="registration-form" id="registration-form" method="post">
				<table>
					<tr>
						<td style="padding-right:10px">Nama Anggota</td>
						<td><font color="#FF0000"><?php echo form_error('nama'); ?><input type="text" id="nama" name="nama" class="form-control" value="<?php echo set_value('nama'); ?>"></font></td>
					</tr>
					<tr >
						<td style="padding-right:10px">Alamat Anggota</td>
						<td><font color="#FF0000"><?php echo form_error('alamat'); ?><input type="text" id="alamat" name="alamat" class="form-control" value="<?php echo set_value('alamat'); ?>"></font></td>
					</tr>
					<tr>
						<td style="padding-right:10px">Alamat Surel</td>
						<td><font color="#FF0000"><?php echo form_error('email'); ?><input type="email" id="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>"></font></td>
					</tr>
					<tr>
						<td colspan="2" style="padding-top:20px">
							<button type="submit" class="btn btn-primary btn-block">Daftar</button>
						</td>
					</tr>
				</table>
				<br>
				<br>
			</form>
			<form>
				<table>
					<tr>
						<td><input type="text" class="form-control" placeholder="<?php echo $id_anggota?>" disabled></td>
					</tr>
				</table>
			</form>
		</center>
	</div>
	<!---------------------------------------------------REGISTRASI FORM--------------------------------------------------->
</body>