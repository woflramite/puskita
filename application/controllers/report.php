<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('model_report');
	}
	
	public function index()
	{
		$this->load->helper('url');
		
		$this->load->view('navbar/navbar_admin');
		$this->load->view('report_landing_page');
	}
	
	function archive() {
		$data = array();
		
		$this->load->view('navbar/navbar_admin');
		$this->load->view('report_monthly');
		
		$this->form_validation->set_rules('month', 'bulan', 'required');
		$this->form_validation->set_rules('year', 'tahun', 'required');
		
		if ($this->form_validation->run()) {
			$month = $this->input->post('month');
			$year = $this->input->post('year');
			
			$data['db_result'] = $this->model_report->getMonthlyArchive($month,$year);
			$this->load->view('report_monthly_result',$data);
		}
	}
	
	function stock() {
		$data = array();
		$data['db_result']=$this->model_report->getBookStock();
		
		$this->load->view('navbar/navbar_admin');
		$this->load->view('report_book_stock',$data);
	}
	
	function self_query() {
		$data = array();
		
		$this->load->library('table');
		$tmp=array('table_open' => '<table class="table-striped">');
		$this->table->set_template($tmp);
		
		$this->load->view('navbar/navbar_admin');
		$this->load->view('report_self_query');
		
		$this->form_validation->set_rules('query','kueri','required');
		
		if ($this->form_validation->run()) {
			$query = $this->input->post('query');
			
			$data['query_result'] = $this->model_report->getQuery($query);
			$this->load->view('report_self_query_result',$data);
		}
	}
}
