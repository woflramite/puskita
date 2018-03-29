<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_Page extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
		parent::__construct();
		$this->load->model('model_admin');
	}
	
	public function index()
	{
		$this->load->helper('url');
		if (strcmp($this->session->userdata('status'),"login")==0)	{
			$id_administrator = $this->session->id_administrator;
			
			$data = array();
			$data['administrator'] = $this->model_admin->getAdmin($id_administrator);
			
			$this->load->view('navbar/navbar_admin');
			$this->load->view('admin_home',$data);
		}
		else {
			$this->load->view('navbar/navbar_general');
			$this->load->view('landing_page');
		}
	}
}
