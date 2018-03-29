<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('model_transaction');
	}
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('navbar/navbar_admin');
		$this->load->view('transaction_landing_page');
	}
	
	function borrowBook() {
		$data = array(
			'id_anggota' => '0',
			'isbn'=> 'XXXXXXXXX-X',
			'nama' => 'Masukkan ID Anggota terlebih dahulu',
			'alamat' => 'Masukkan ID Anggota terlebih dahulu',
			'email' => 'Masukkan ID Anggota terlebih dahulu',
			'judul' => 'Masukkan ISBN Buku terlebih dahulu',
			'penulis' => 'Masukkan ISBN Buku terlebih dahulu',
			'penerbit' => 'Masukkan ISBN Buku terlebih dahulu',
			'stok' => 'Masukkan ISBN Buku terlebih dahulu',
			'isAvailable' => FALSE,
			'isAllowedToReturn' => 0,
			'isToPost'=> FALSE
		);
		
		$this->load->helper('url');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('id_anggota','ID anggota', 'required');
		$this->form_validation->set_rules('isbn','ISBN', 'required');
		
		if($this->form_validation->run()) {
			$id_anggota = $this->input->post('id_anggota');
			$isbn = $this->input->post('isbn');
			
			$data['id_anggota'] = $id_anggota;
			$data['isbn'] = $isbn;
			
			$anggota = $this->model_transaction->getAnggotaByID($id_anggota)->result();
			$buku = $this->model_transaction->getBukuByISBN($isbn)->result();
			$transaksiBukuAnggotaBelumLunas = $this->model_transaction->getTransaksiBukuAnggotaBelumLunas($id_anggota,$isbn);
			
			foreach ($anggota as $a) {
				$data['nama']=$a->nama;
				$data['alamat']=$a->alamat;
				$data['email']=$a->email;
			}
			foreach ($buku as $b) {
				$data['judul']=$b->judul;
				$data['penulis']=$b->penulis;
				$data['penerbit']=$b->penerbit;
				$data['stok']=$b->stok;
				$data['isAvailable']=$data['stok']>0;
			}
			
			$num_rows = $transaksiBukuAnggotaBelumLunas->num_rows();
			$data['isAllowedToBorrow'] = $num_rows==0;
			$data['isToPost'] = TRUE;
		}
		
		$this->load->view('navbar/navbar_admin');
		$this->load->view('transaction_borrow',$data);
	}
	
	function addBorrow($id_anggota,$isbn) {
		$this->model_transaction->addBorrow($id_anggota,$isbn);
		redirect(base_url('transaction/borrowBook'));
	}
	
	function returnBook() {
		$data = array(
			'id_anggota' => '0',
			'isbn'=> 'XXXXXXXXX-X',
			'nama' => 'Masukkan ID Anggota terlebih dahulu',
			'alamat' => 'Masukkan ID Anggota terlebih dahulu',
			'email' => 'Masukkan ID Anggota terlebih dahulu',
			'judul' => 'Masukkan ISBN Buku terlebih dahulu',
			'penulis' => 'Masukkan ISBN Buku terlebih dahulu',
			'penerbit' => 'Masukkan ISBN Buku terlebih dahulu',
			'isAllowedToReturn' => 0,
			'isToPost'=> FALSE
		);
		
		$this->load->helper('url');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('id_anggota','ID anggota', 'required');
		$this->form_validation->set_rules('isbn','ISBN', 'required');
		
		if($this->form_validation->run()) {
			$id_anggota = $this->input->post('id_anggota');
			$isbn = $this->input->post('isbn');
			
			$data['id_anggota'] = $id_anggota;
			$data['isbn'] = $isbn;
			
			$peminjaman = $this->model_transaction->getDataPeminjaman($isbn,$id_anggota)->result();
			
			$transaksiBukuAnggotaBelumLunas = $this->model_transaction->getTransaksiBukuAnggotaBelumLunas($id_anggota,$isbn);
			
			foreach ($peminjaman as $p) {
				$data['nama']=$p->nama;
				$data['alamat']=$p->alamat;
				$data['email']=$p->email;
				$data['judul']=$p->judul;
				$data['penulis']=$p->penulis;
				$data['penerbit']=$p->penerbit;
			}
			
			$num_rows = $transaksiBukuAnggotaBelumLunas->num_rows();
			echo $num_rows;
			$data['isAllowedToReturn'] = $num_rows>0;
			$data['isToPost'] = TRUE;
		}
		
		$this->load->view('navbar/navbar_admin');
		$this->load->view('transaction_return',$data);
	}
	
	function addReturn($id_anggota,$isbn) {
		$this->model_transaction->addReturn($id_anggota,$isbn);
		redirect(base_url('transaction/returnBook'));
	}
}
