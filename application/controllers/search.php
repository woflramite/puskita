<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('model_search');
	}
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->library('form_validation');
		
		if (strcmp($this->session->userdata('status'),"login")==0)	{
			$this->load->view('navbar/navbar_admin');
			$this->load->view('search');
		}
		else {
			$this->load->view('navbar/navbar_general');
			$this->load->view('search');
		}
	}
	
	public function result() {
		$data = array();
		
		$this->form_validation->set_rules('query','masukan pencarian', 'required');
		
		if ($this->form_validation->run()) {
			$query = $this->input->post('query');
			
			$data['db_result']=$this->model_search->getSearchAllCategory($query);
		}
		$this->index();
		$this->load->view('search_result',$data);
	}
}
