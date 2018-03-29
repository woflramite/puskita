<html>
<head>
	<title>Puskita - Pencarian</title>
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
	<!---------------------------------------------------SEARCH BAR--------------------------------------------------->
	<div class="container-fluid" style="padding:40px 50px 40px 50px;background-color:white">
		<p>Masukkan pencarian:</p>
		<form class="form-group" action="<?php echo base_url('search/result'); ?>" method="post">
			<table style="width:100%">
				<tr>
					<td style="width:95%">
						<font color="#FF0000"><?php echo form_error('search-bar'); ?>
						<input type="text" id="query" name="query" class="form-control" value="<?php echo set_value('query'); ?>">
						</font>
					</td>
					<td style="width:5%">
						<button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-search"></span></button>
					</td>
				</tr>
			</table>
		</form>
	</div>
	<!---------------------------------------------------SEARCH BAR--------------------------------------------------->
</body>