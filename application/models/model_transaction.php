<?php

class Model_Transaction extends CI_Model {
	
	function getAnggotaByID($id_anggota) {
		$query = 'SELECT nama, alamat, email FROM anggota WHERE id_anggota='.$id_anggota;
		return $this->db->query($query);
	}
	
	function getBukuByISBN($isbn) {
		$query='SELECT buku.isbn, buku.judul, buku.penulis, buku.penerbit, buku.no_rak, total-COUNT(CASE WHEN peminjaman.status_pengembalian=0 THEN 1 END) AS stok FROM buku LEFT JOIN peminjaman ON buku.isbn=peminjaman.isbn WHERE buku.isbn="'.$isbn.'" GROUP BY buku.isbn';
		
		return $this->db->query($query);
	}
	
	function getDataPeminjaman($isbn,$id_anggota) {
		$query='SELECT judul, penulis, penerbit, nama, alamat, email FROM peminjaman INNER JOIN buku ON buku.isbn=peminjaman.isbn INNER JOIN anggota ON anggota.id_anggota=peminjaman.id_anggota WHERE peminjaman.isbn="'.$isbn.'" AND peminjaman.id_anggota='.$id_anggota;
		
		return $this->db->query($query);
	}
	
	function getTransaksiBukuAnggotaBelumLunas($id_anggota,$isbn) {
		$query = 'SELECT status_pengembalian FROM peminjaman WHERE id_anggota='.$id_anggota.' AND isbn="'.$isbn.'" AND status_pengembalian=0';
		
		return $this->db->query($query);
	}
	
	function addBorrow($id_anggota,$isbn) {
		$query = 'INSERT INTO peminjaman (id_anggota, isbn) VALUES ('.$id_anggota.', "'.$isbn.'")';
		
		return $this->db->query($query);
	}
	
	function addReturn($id_anggota,$isbn) {
		$query = 'UPDATE peminjaman SET tanggal_kembali=CURRENT_TIMESTAMP, status_pengembalian=1 WHERE id_anggota='.$id_anggota.' AND isbn="'.$isbn.'"';
		
		return $this->db->query($query);
	}
}