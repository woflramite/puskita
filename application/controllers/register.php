<?php
/* UPDATE: This controller has been set as NOT the default controller */

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('model_register');
	}
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->library('form_validation');
		
		if (strcmp($this->session->userdata('status'),"login")==0)	{
			$this->load->view('navbar/navbar_admin');
		}
		else {
			$this->load->view('navbar/navbar_general');
		}
		$this->form_validation->set_rules('nama', 'name', 'required');
		$this->form_validation->set_rules('alamat', 'address', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		
		$data = array( 'id_anggota' => "" );
		
		if ($this->form_validation->run()) {
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$email = $this->input->post('email');
			
			$where_email = array('email' => $email);
			$isEmailUnique = $this->model_register->isEmailUnique($where_email);
			
			if ($isEmailUnique) {
				$this->model_register->insertNewMember($nama,$alamat,$email);
				
				$getID = $this->model_register->getIDWhere($nama,$alamat,$email)->result();
				
				foreach ($getID as $member) {
					$id_anggota_baru=$member->id_anggota;
					$data['id_anggota'] = $id_anggota_baru;
				}
			} else {
				$this->emailRegisteredException();
			}
		}
		
		$this->load->view('member_register',$data);
	}
	
	function emailRegisteredException() {
		$this->load->view('exception/registration_email_registered');
		$this->index();
	}
	
	function emptyFieldException() {
		$this->load->view('exception/empty_field');
		$this->index();
	}
}
