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
	
	#margin-cell {
		padding:5px;
	}
	
	.navbar{
		margin-bottom: 50px;
	}
</style>

<body style="background-color:#d8d8d8">
	<!---------------------------------------------------SEARCH RESULT--------------------------------------------------->
	<div class="container-fluid" style="padding:40px 50px 40px 50px;background-color:white">
		<form class="form-group" action="<?php echo base_url('report/archive'); ?>" method="post"><center>
			<table class="table-striped">
				<tr>
					<th id="margin-cell">ID Peminjaman</th>
					<th id="margin-cell">ID Anggota</th>
					<th id="margin-cell">ISBN</th>
					<th id="margin-cell">Tanggal Peminjaman</th>
					<th id="margin-cell">Tanggal Pengembalian</th>
					<th id="margin-cell">Status Pengembalian</th>
				</tr>
				
				<?php
					$result = $db_result->result();
					$num_rows = $db_result->num_rows();
					
					if ($num_rows>0) {
					foreach ($result as $row) {
							echo '<tr>';
							echo '<td id="margin-cell">'.$row->id_peminjaman.'</td>';//ID Peminjaman
							echo '<td id="margin-cell">'.$row->id_anggota.'</td>';//ID Anggota
							echo '<td id="margin-cell">'.$row->isbn.'</td>';//ISBN
							echo '<td id="margin-cell">'.$row->tanggal_pinjam.'</td>';//Tanggal Peminjaman
							echo '<td id="margin-cell">'.$row->tanggal_kembali.'</td>';//Tanggal Pengembalian
							if ($row->status_pengembalian == 0) {
								echo '<td id="margin-cell">Belum dikembalikan</td>';//Status Pengembalian
							}
							else {
								echo '<td id="margin-cell">Sudah dikembalikan</td>';
							}
							echo '</tr>';
						}
					} else {
						echo '<tr>';
						echo '<td span="6">Tidak ada hasil. Coba dengan kata kunci lain.</td>';
						echo '</tr>';
					}
				?>
			</table>
		<center></form>
	</div>
	<!---------------------------------------------------SELECT DATE--------------------------------------------------->
</body>