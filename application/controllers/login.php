<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

class Login extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('model_login');
	}
	
	public function index() {
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->view('navbar/navbar_general');
		
		$this->form_validation->set_rules('id_administrator', 'administrator ID', 'required');
		$this->form_validation->set_rules('password_plaintext', 'password', 'required');
		
		$isAuthorized=FALSE;
		if ($this->form_validation->run()) {
			$id_administrator = $this->input->post('id_administrator');
			$password_plaintext = $this->input->post('password_plaintext');
			$password = md5($password_plaintext);
			
			
			$where_login = array(
				'id_administrator' => $id_administrator,
				'password' => $password
			);
			$is_authorized = $this->model_login->isAuthorized($where_login);
			
			if ($is_authorized) {
				$data_session = array(
					'id_administrator' => $id_administrator,
					'status' => "login"
				);
				$this->session->set_userdata($data_session);
				redirect(base_url());
			} else {
				$this->wrongPasswordException();
			}
		}
		
		$this->load->view('admin_login');
	}
	
	function wrongPasswordException() {
		$this->load->view('exception/login_wrong_password');
	}
	
	function logout() {
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
