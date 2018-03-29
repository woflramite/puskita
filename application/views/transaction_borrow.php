<head>
	<title>Puskita - Peminjaman</title>
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
	
	table {
		width:80%;
	}
	
	#field-name {
		width:25%
	}
</style>

<body style="background-color:#d8d8d8">
	<!---------------------------------------------------BORROW FORM--------------------------------------------------->
	<div class="container-fluid" style="width:600px; padding-top:40px; padding-bottom:60px; background-color:white">
		<center>
			<h3>Peminjaman Buku</h3>
			<form class="form-borrowing" action="<?php echo base_url('transaction/borrowBook');?>" method="post">
				<table>
					<tr>
						<td style="padding-right:10px">ID Anggota</td>
						<td><input type="text" name="id_anggota" class="form-control"></td>
					</tr>
					<tr>
						<td style="padding-right:10px">ISBN Buku</td>
						<td><input type="text" name="isbn" class="form-control"></td>
					</tr>
					<tr>
						<td colspan="2" style="padding-top:20px" align="right">
							<button type="submit" class="btn">Pratinjau <span class="glyphicon glyphicon-eye-open"><span></button>
						</td>
					</tr>
				</table>
			</form>
			<br><br>
			<!---------------------------------------------------PREVIEW FORM--------------------------------------------------->
			<h4>Hasil pratinjau</h4>	
			<form class="form-borrowing-description" action="<?php echo base_url('transaction/addBorrow/'.$id_anggota.'/'.$isbn);?>" method="post">
				<h5>Identitas Anggota</h5>
				<table>
					<tr>
						<td style="padding-right:10px" id="field-name">Nama Anggota</td>
						<td>
							<input type="text" name="nama" class="form-control" placeholder="<?php echo $nama?>" disabled>
						</td>
					</tr>
					<tr>
						<td style="padding-right:10px" id="field-name">Alamat Anggota</td>
						<td>
							<input type="text" name="alamat" class="form-control" placeholder="<?php echo $alamat?>" disabled>
							</td>
					</tr>
					<tr>
						<td style="padding-right:10px" id="field-name">Email Anggota</td>
						<td>
							<input type="text" name="email" class="form-control" placeholder="<?php echo $email?>" disabled>
						</td>
					</tr>
				</table>
				<h5>Deskripsi Buku</h5>
				<table>
					<tr>
						<td style="padding-right:10px" id="field-name">Judul Buku</td>
						<td>
							<input type="text" name="judul" class="form-control" placeholder="<?php echo $judul?>" disabled>
						</td>
					</tr>
					<tr>
						<td style="padding-right:10px" id="field-name">Penulis Buku</td>
						<td>
							<input type="text" name="penulis" class="form-control" placeholder="<?php echo $penulis?>" disabled>
							</td>
					</tr>
					<tr>
						<td style="padding-right:10px" id="field-name">Penerbit Buku</td>
						<td>
							<input type="text" name="penerbit" class="form-control" placeholder="<?php echo $penerbit?>" disabled>
						</td>
					</tr>
					<tr>
						<td style="padding-right:10px" id="field-name">Stok Buku</td>
						<td>
							<input type="text" name="penerbit" class="form-control" placeholder="<?php echo $stok?>" disabled>
						</td>
					</tr>
					<tr>
						<td style="padding-right:10px" id="field-name">Status Peminjaman</td>
						<td>
							<input type="text" name="penerbit" class="form-control" placeholder="<?php
								if ($isToPost) {
									if ($isAllowedToBorrow) {
										echo 'Tidak ada pinjaman menunggak';
									} else {
										echo 'Ada pinjaman menunggak';
									}
								}
							?>" disabled>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="padding-top:20px" align="right">
						<?php
							if ($isAvailable AND $isAllowedToBorrow) {
								echo '<button type="submit" class="btn btn-primary">Konfirmasi</button>';
							} else {
								echo '<button type="submit" class="btn btn-primary" disabled>Konfirmasi</button>';
							}
						?>
						</td>
					</tr>
				</table>
			</form>
			<!---------------------------------------------------PREVIEW FORM--------------------------------------------------->
		</center>
	</div>
	<!---------------------------------------------------BORROW FORM--------------------------------------------------->
</body>