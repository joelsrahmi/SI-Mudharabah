<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();

class C_teller extends CI_Controller {

	private $limit = 5;

	public function __construct(){
		parent::__construct();
		$this->load->helper('text');
        $this->load->library('pagination');
        $this->load->library('session');
        //$this->load->model('m_login');
	}

	function index(){
		if($this->session->userdata('is_logged_in')){
			$this->load->library("session");
			$data['username'] = $this->session->userdata('username');
			$this->load->view('template/head-css');
			$this->load->view('template/header_teller');
			$this->load->view('teller/v_home');
			$this->load->view('template/footer-js');

			$username = $this->session->userdata('username');
		}
		else{
			redirect('c_login');
		}		
	}

	function tampil_transaksi(){
		if($this->session->userdata('is_logged_in')){
			$this->load->library('session');
			$data['username'] = $this->session->userdata('username');
			

			$this->load->model('m_teller');
			$data['getPemohon1']=$this->m_teller->getPemohon1();
			$this->load->view('template/head-css');
			$this->load->view('template/header_teller');
			$this->load->view('teller/tampil_daftar_transaksi', $data);
			$this->load->view('template/footer-js');

			$username = $this->session->userdata('username');
		}
		else{
			redirect('c_login', 'refresh');
		}		
	}

	function tampilTransaksi(){
		if($this->session->userdata('is_logged_in')){
			$this->load->library('session');

			$id_transaksi = $this->input->post('tampil_transaksi');

	        $this->load->model('m_teller');
	        $data['tampil_transaksi']=$this->m_teller->lihatTransaksi($id_transaksi);
	        
	       
	        $this->load->view('template/head-css');
			$this->load->view('template/header_teller');
			$this->load->view('teller/tampil_transaksi', $data);
			$this->load->view('template/footer-js');
		}
		else{
			redirect('c_login', 'refresh');
		}
	}

	public function update_transaksi(){
		if($this->session->userdata('is_logged_in')){
			$idtr = $this->input->post('id_transaksi');
			$this->load->model('m_teller');
			$berhasilitung = $this->m_teller->hitung($idtr);
			if ($berhasilitung ) {
				echo"<script>alert('Cicilan Berhasil di Tambah!');history.go(-2);</script>";
			} else {
				echo"<script>alert('Gagal Menambah Cicilan!');history.go(-2);</script>";
			}
			
		}
		else{
			redirect('c_login', 'refresh');
		}
	}

	function transaksi(){
		if ($this->session->userdata('is_logged_in')) {
			
	        $id_transaksi->this_input->post('tampil_transaksi');
	             
	        $this->load->model('m_manajer');
	        $hitungtransaksi = $this->m_teller->updateTransaksi($id_transaksi);
	        if ($hitungtransaksi = true){
		    	echo"<script>alert('Berhasil Melakukan transaksi!');history.go(-2);</script>";
		        //redirect ('c_admin/tampil_pegawai');
            }
           else{
            	echo"<script>alert('Gagal!');history.go(-2);</script>";
            }
		}
		else {
            //If no session, redirect to login page
            redirect('c_login', 'refresh');
        }
	}

	public function tampil_jurnal(){
		if ($this->session->userdata('is_logged_in')) {
				$this->load->model('m_teller');
				$data['list_jurnal']=$this->m_teller->list_jurnal();
	         	$this->load->view('template/head-css');
				$this->load->view('template/header_teller');
				$this->load->view('teller/tampil_jurnal', $data);
				$this->load->view('template/footer-js');
		        //redirect ('c_admin/tampil_pegawai');
            }
           else {
            //If no session, redirect to login page
            redirect('c_login', 'refresh');
        }
    }



	function logout() {
		$this->load->library('session');
		$username = $this->session->userdata('username');

		$this->load->model('m_login');
		$logout = $this->m_login->audit_logout($username);

		if($logout){
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('level');
			session_destroy();
			redirect('c_login');
		}
		else{
			echo "gagal logout";
		}		
	}

	public function data_jurnal()
	{
		$this->load->model('m_teller');
		$data['list_jurnal']=$this->m_teller->list_jurnal();
		$this->load->view('teller/tampil_jurnal');
	}
  
}