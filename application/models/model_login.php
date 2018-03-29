<?php

class Model_Login extends CI_Model {
	
	function isAuthorized($where) {
		$num_rows = $this->db->get_where('administrator',$where)->num_rows();
		return $num_rows>0;
	}
}

?>