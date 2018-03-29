<?php

class Model_Report extends CI_Model {
	function getMonthlyArchive($month, $year) {
		return $this->db->query('SELECT * FROM peminjaman WHERE MONTH(tanggal_pinjam)='.$month.' AND YEAR(tanggal_pinjam)='.$year.' OR MONTH(tanggal_kembali)='.$month.' AND YEAR(tanggal_kembali)='.$year);
	}
	
	function getBookStock() {
		return $this->db->query('SELECT buku.isbn, buku.judul, buku.penulis, buku.penerbit, buku.no_rak, total-COUNT(CASE WHEN peminjaman.status_pengembalian=0 THEN 1 END) AS stok FROM buku LEFT JOIN peminjaman ON buku.isbn=peminjaman.isbn GROUP BY buku.isbn');
	}
	
	function getQuery($query) {
		return $this->db->query($query);
	}
}

?>