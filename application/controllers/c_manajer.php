<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();

class C_manajer extends CI_Controller {

	private $limit = 5;

	public function __construct(){
		parent::__construct();
		$this->load->helper('text');
        $this->load->library('pagination');
        $this->load->library('session');
        //$this->load->model('m_login');
	}

	public function index($offset = 0)
	{
		if($this->session->userdata('is_logged_in')){
			$this->load->library("session");
			$data['username'] = $this->session->userdata('username');
			$this->load->view('template/head-css');
			$this->load->view('template/header_manajer');
			$this->load->view('manajer/v_home');
			$this->load->view('template/footer-js');

			$username = $this->session->userdata('username');
		}
		else{
			redirect('c_login');
		}		
	}

	public function tampil_persetujuan_akad($offset = 0)
	{
		if($this->session->userdata('is_logged_in')){
			$this->load->library("session");
			$data['username'] = $this->session->userdata('username');

			$this->load->model('m_cs');
			$data['getAkad']=$this->m_cs->getAkad();
			$this->load->view('template/head-css');
			$this->load->view('template/header_manajer');
			$this->load->view('manajer/tampil_persetujuan', $data);
			$this->load->view('template/footer-js');

			$username = $this->session->userdata('username');
		}
		else{
			redirect('c_login','refresh');
		}		
	}

	public function tampilUpdatePengajuan($offset=0) {
		if ($this->session->userdata('is_logged_in')) {
			$this->load->library('session');
			$data['username'] = $this->session->userdata('username');
			
			$id_akad = $this->input->post('update_pengajuan');
	        $this->load->model('m_manajer');
	        $data['getPersetujuan']=$this->m_manajer->getDetailPersetujuan($id_akad);
	       
	        $this->load->view('template/head-css');
			$this->load->view('template/header_manajer');
			$this->load->view('manajer/tampil_updatestatus_pemohon', $data);
			$this->load->view('template/footer-js');
		}
		else {
            //If no session, redirect to login page
            redirect('c_login', 'refresh');
        }
	}

	public function tampilDetailPemohon(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->library('session');
			$data['username'] = $this->session->userdata('username');
			
			$id_pemohon = $this->input->post('ubah');
	        $this->load->model('m_cs');
	        $data['tampilPemohon']=$this->m_cs->getDetailPemohon($id_pemohon);
	       
	        $this->load->view('template/head-css');
			$this->load->view('template/header_manajer');
			$this->load->view('manajer/tampil_detail_pemohon', $data);
			$this->load->view('template/footer-js');
		}
		else {
            //If no session, redirect to login page
            redirect('c_login', 'refresh');
        }
	}

	public function tampilUpdateStatus(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->library('session');
			$data['username'] = $this->session->userdata('username');
			
			$id_pemohon = $this->input->post('ubahstatus');
	        $this->load->model('m_cs');
	        $data['tampilPemohon']=$this->m_cs->getDetailPemohon($id_pemohon);
	       
	        $this->load->view('template/head-css');
			$this->load->view('template/header_manajer');
			$this->load->view('manajer/tampil_updatestatus_pemohon', $data);
			$this->load->view('template/footer-js');
		}
		else {
            //If no session, redirect to login page
            redirect('c_login', 'refresh');
        }
	}

	public function update_status_pemohon(){
		if ($this->session->userdata('is_logged_in')) {
			$now = date('Y-m-d H:i:s');
	        $rek = $this->input->post('no_rekening');
	        
	        $akad = array(
	        		
	        	'nama_anggota' => $this->input->post('nama_anggota'),
	            'jumlah_pinjaman' => $this->input->post('jumlah_pinjaman'),
	            'jangka_waktu' => "10",
	            'basil_persen' => $this->input->post('basil_persen'),
	            'status_akad' => $this->input->post('status_akad'),
	            'penggunaan_pinjaman' => $this->input->post('penggunaan_pinjaman'),
	            );
	        
	        $transaksi = array(
	        	'id_akad' => $this->input->post('id_akad'),
	        	'jumlah_pinjaman' => $this->input->post('jumlah_pinjaman'),
	        	'nama_anggota' => $this->input->post('nama_anggota'),);
	             
	        $this->load->model('m_manajer');
	        $updateStatPemohon = $this->m_manajer->updateStatPemohon($akad, $transaksi, $rek);
	        if ($updateStatPemohon){
		    	echo"<script>alert('Update Data PErsetujuan Berhasil!');history.go(-2);</script>";
		        
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

	public function tampil_daftar_mudharib($offset = 0)
	{
		if($this->session->userdata('is_logged_in')){
			$this->load->library("session");
			$data['username'] = $this->session->userdata('username');
			$this->load->view('template/head-css');
			$this->load->view('template/header_manajer');
			$this->load->view('manajer/tampil_daftar_mudharib');
			$this->load->view('template/footer-js');

			$username = $this->session->userdata('username');
		}
		else{
			redirect('c_login');
		}		
	}

	public function tampil_daftar_pegawai($offset = 0)
	{
		if($this->session->userdata('is_logged_in')){
			$this->load->library("session");
			$data['username'] = $this->session->userdata('username');

			$this->load->model('m_manajer');
        	$data['listPegawai']=$this->m_manajer->listPegawai();

			$this->load->view('template/head-css');
			$this->load->view('template/header_manajer');
			$this->load->view('manajer/tampil_daftar_pegawai', $data);
			$this->load->view('template/footer-js');

			$username = $this->session->userdata('username');
		}
		else{
			redirect('c_login', 'refresh');
		}		
	}

	public function tampilUpdateStatusPeg($offset = 0)
	{
		if($this->session->userdata('is_logged_in')){
			$this->load->library('session');
			$data['username'] = $this->session->userdata('username');

			$id_peg = $this->input->post('ubahstatpeg');
	        $this->load->model('m_manajer');
	        $data['tampil_daftar_pegawai']=$this->m_manajer->lihatStatusPegawai($id_peg);
	       
	        $this->load->view('template/head-css');
			$this->load->view('template/header_manajer');
			$this->load->view('manajer/tampil_updatestatus_pegawai', $data);
			$this->load->view('template/footer-js');
		}
		else{
			redirect('c_login', 'refresh');
		}		
	}

	function update_stat_pegawai(){
		$password = md5($this->input->post('password'));
        $data = array(
            'id_peg' => $this->input->post('id_peg'),
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'tempat_lahir' => $this->input->post ('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat_lengkap' => $this->input->post('alamat_lengkap'),
            'level' => $this->input->post ('level'),
            'password' => $password,
            'agama' => $this->input->post ('agama'),
            'no_telp' => $this->input->post ('no_telp'),
            'level' => $this->input->post ('level'),
            'jenis_identitas' => $this->input->post ('jenis_identitas'),
            'no_identitas' => $this->input->post ('no_identitas'),
            'status' => $this->input->post ('status'),
            );    
        $this->load->model('m_manajer');
        $updateStatPegawai = $this->m_manajer->updateStatPegawai($data);
        if ($updateStatPegawai){
            redirect ('c_manajer/tampil_daftar_pegawai');
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
  
}