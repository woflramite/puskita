<?php

class Model_Admin extends CI_Model {
	
	function getAdmin($id_administrator) {
		$where = array ( 'id_administrator' => $id_administrator );
		return $this->db->get_where('administrator',$where)->result();
	}
}

?>