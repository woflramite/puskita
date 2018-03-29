<head>
	<meta charset="UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>
	#margin-cell {
		padding:5px;
	}
</style>

<body>
	<!---------------------------------------------------SEARCH RESULT--------------------------------------------------->
	<div class="container-fluid" style="padding:40px 50px 40px 50px;background-color:white">
		<h3>Stok Buku</h3>
		<table class="table-striped" style="width:100%;">
			<tr>
				<th id="margin-cell">ISBN</th>
				<th id="margin-cell">Judul</th>
				<th id="margin-cell">Penulis</th>
				<th id="margin-cell">Penerbit</th>
				<th id="margin-cell">No. Rak</th>
				<th id="margin-cell">Stok</th>
			</tr>
			<?php
				
				$result = $db_result->result();
				$num_rows = $db_result->num_rows();
				
				if ($num_rows>0) {
					foreach ($result as $row) {
						echo '<tr>';
						echo '<td id="margin-cell">'.$row->isbn.'</td>';//ISBN
						echo '<td id="margin-cell">'.$row->judul.'</td>';//Judul
						echo '<td id="margin-cell">'.$row->penulis.'</td>';//Penulis
						echo '<td id="margin-cell">'.$row->penerbit.'</td>';//Penerbit
						echo '<td id="margin-cell">'.$row->no_rak.'</td>';//No. Rak
						echo '<td id="margin-cell">'.$row->stok.'</td>';//Stok
						echo '</tr>';
					}
				} else {
					echo '<tr>';
					echo '<td span="6">Tidak ada hasil. Coba dengan kata kunci lain.</td>';
					echo '</tr>';
				}
				
			?>
		</table>
	</div>
	<!---------------------------------------------------SEARCH RESULT--------------------------------------------------->
</body>