<!DOCTYPE html>

<head>
	<title>Puskita - Login</title>
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
	<!---------------------------------------------------LOGIN FORM--------------------------------------------------->
	<div class="container-fluid" style="width:400px; padding-top:40px; padding-bottom:60px; background-color:white">
		<center>
			<h3>Login Administrator</h3>
			<form class="form-login" action="<?php echo base_url('login');?>" method="post">
				<table>
					<tr>
						<td style="padding-right:10px">ID Administrator</td>
						<td><font color="#FF0000"><?php echo form_error('id_administrator'); ?><input type="text" name="id_administrator" class="form-control"></font></td>
					</tr>
					<tr>
						<td style="padding-right:10px">Kata Sandi</td>
						<td><font color="#FF0000"><?php echo form_error('password_plaintext'); ?><input type="password" name="password_plaintext" class="form-control"></font></td>
					</tr>
					<tr>
						<td colspan="2" style="padding-top:20px">
							<button type="submit" class="btn btn-primary btn-block">Masuk</button>
						</td>
					</tr>
				</table>
			</form>
		</center>
	</div>
	<!---------------------------------------------------LOGIN FORM--------------------------------------------------->
</body>