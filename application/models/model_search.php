<?php

class Model_Search extends CI_Model {
	function getSearchAllCategory($keyword) {
		$query_db = 'SELECT buku.isbn, buku.judul, buku.penulis, buku.penerbit, buku.no_rak, total-COUNT(CASE WHEN peminjaman.status_pengembalian=0 THEN 1 END) AS stok FROM buku LEFT JOIN peminjaman ON buku.isbn=peminjaman.isbn WHERE ';
		$where_isbn = 'buku.isbn LIKE "%'.$keyword.'%" ';
		$where_judul = 'buku.judul LIKE "%'.$keyword.'%" ';
		$where_penulis = 'buku.penulis LIKE "%'.$keyword.'%" ';
		$where_penerbit = 'buku.penerbit LIKE "%'.$keyword.'%" ';
		$where_rak = 'buku.no_rak LIKE "%'.$keyword.'%" ';
		$group_by = 'GROUP BY buku.isbn';
		return $this->db->query($query_db.$where_isbn.' OR '.$where_judul.' OR '.$where_penulis.' OR '.$where_penerbit.' OR '.$where_rak.' '.$group_by);
	}
}

?>