<?php

class Model_Register extends CI_Model {
	
	function isEmailUnique($where) {
		$num_rows = $this->db->get_where('anggota',$where)->num_rows();
		return $num_rows==0;
	}
	
	function insertNewMember($nama, $alamat, $email) {
		$this->db->query('INSERT INTO anggota (nama, alamat, email) VALUES ("'.$nama.'","'.$alamat.'","'.$email.'")');
	}
	
	function getIDWhere($nama,$alamat,$email) {
		$query = 'SELECT id_anggota FROM anggota where nama="'.$nama.'" AND alamat="'.$alamat.'" AND email="'.$email.'"';
		return $this->db->query($query);
	}
}

?>