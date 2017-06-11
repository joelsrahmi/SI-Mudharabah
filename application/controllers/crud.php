<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	function input_pegawai(){
		$this->load->view->('admin/tambah_pegawai');
	}
}
