<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();

class C_admin extends CI_Controller {

	private $limit = 5;

	public function __construct(){
		parent::__construct();
		$this->load->helper('text');
        $this->load->library('pagination');
        $this->load->library('session');
	}

	public function index($offset = 0)
	{
		
		if($this->session->userdata('is_logged_in')){
			$this->load->library('session');
			$data['username'] = $this->session->userdata('username');
			$this->load->view('template/head-css');
			$this->load->view('template/header_admin');
			$this->load->view('admin/v_home');
			$this->load->view('template/footer-js');

			$username = $this->session->userdata('username');
		}
		else{
			redirect('c_login');
		}
		
	}

	public function tampil_pegawai($offset = 0){

		if ($this->session->userdata('is_logged_in')) {
        	$this->load->library('session');
			$data['username'] = $this->session->userdata('username');

			$this->load->model('m_admin');
        	$data['getPegawai']=$this->m_admin->getPegawai();

			$this->load->view('template/head-css');
			$this->load->view('template/header_admin');
			$this->load->view('admin/v_tampil_pegawai', $data);
			$this->load->view('template/footer-js');

			$username = $this->session->userdata('username');
			/*$session_data = $this->session->userdata('is_logged_in');
            $data['username'] = $session_data['username'];
            //ambil data kendaraan
            $this->load->model('m_admin', 'listPegawai');
            $this->load->library("pagination");

            $param['offset'] = $offset;
            $param["data"] = $this->listPegawai->getPegawai($this->limit, $offset);

            $config["base_url"] = site_url("m_admin/getPegawai");
            //$config["total_rows"] = $param["data"]["total_rows"];
            $config["per_page"] = $this->limit;
            $this->pagination->initialize($config);

            $this->load->view('template/head-css');
			$this->load->view('template/header_admin');
			$this->load->view('admin/v_tampil_pegawai', $data);
			$this->load->view('template/footer-js');

			$username = $this->session->userdata('username');*/
        } else {
            //If no session, redirect to login page
            redirect('c_login', 'refresh');
        }
	}

	function tampil_input_pegawai(){
		if ($this->session->userdata('is_logged_in')) {
        	$this->load->library('session');

			$this->load->view('template/head-css');
			$this->load->view('template/header_admin');
			$this->load->view('admin/v_input_pegawai');
			$this->load->view('template/footer-script-input');

			$username = $this->session->userdata('username');
        } else {
            //If no session, redirect to login page
            redirect('c_login', 'refresh');
        }
	}

	function input_pegawai(){
		if($this->session->userdata('is_logged_in')){
			$this->load->model('m_admin');
			$password = md5($this->input->post('password'));
			$data = array(
				'id_peg' => $this->input->post('id_peg'),
				'username' => $this->input->post('username'),
				'nama' => $this->input->post('nama'),
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
            $inputPegawai = $this->m_admin->inputPegawai($data);
            if ($inputPegawai){
            	echo"<script>alert('Tambah Data Pegawai Berhasil!');history.go(-2);</script>";
            }
        }
        else {
            //If no session, redirect to login page
            redirect('c_login', 'refresh');
        }
    }

	function lihatDetailPegawai(){
		if ($this->session->userdata('is_logged_in')) {
        	$this->load->library('session');
			$data['username'] = $this->session->userdata('username');

			$id_peg = $this->input->post('lihat');
			$this->load->model('m_admin');
        	$data['tampil_pegawai']=$this->m_admin->getDetailPegawai($id_peg);

			$this->load->view('template/head-css');
			$this->load->view('template/header_admin');
			$this->load->view('admin/v_detail_pegawai', $data);
			$this->load->view('template/footer-js');

			$username = $this->session->userdata('username');
        } else {
            //If no session, redirect to login page
            redirect('c_login', 'refresh');
        }
	}

	function tampilUpdatePegawai(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->library('session');
			$data['username'] = $this->session->userdata('username');

			$id_peg = $this->input->post('ubah');
	        $this->load->model('m_admin');
	        $data['tampil_pegawai']=$this->m_admin->getDetailPegawai($id_peg);
	       
	        $this->load->view('template/head-css');
			$this->load->view('template/header_admin');
			$this->load->view('admin/v_update_pegawai', $data);
			$this->load->view('template/footer-js');
		}
		else {
            //If no session, redirect to login page
            redirect('c_login', 'refresh');
        }
	}

	function update_pegawai(){
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
        $this->load->model('m_admin');
        $updatePegawai = $this->m_admin->updatePegawai($data);
        if ($updatePegawai){
           echo"<script>alert('Update Data Pemohon Berhasil!');history.go(-2);</script>";
		        //redirect ('c_admin/tampil_pegawai');
            }
            else{
            	echo"<script>alert('Update Data Pemohon Gagal!');history.go(-2);</script>";
            }
	}

	function cetakDataPegawai(){
		$this->load->library('cezpdf');
		//Instance
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$pdf = new Cezpdf($paper='A4',$orientation='landscape');
		//header
		$pdf->ezText('<b>Laporan Data Pegawai</b>', 15, array('justification' => 'center'));
		$pdf->ezSetDy(-5);
		$pdf->ezText('<b>KSPS BMT AT-TAQWA</b>', 17, array('justification' => 'center'));
		$pdf->ezSetDy(-5);
		$pdf->ezText('<b>Mesjid AT-TAQWA Jl. Benda Barat, Pamulang  (021)0000001 </b>', 10, array('justification' => 'center'));     
		//garis
		$pdf->line(50, 750, 540, 750);
		//footer
		$pdf->ezStartPageNumbers(750,28,8,'','{PAGENUM}',1);
		$pdf->line(20,60,800,60);
		$pdf->addText(50,32,8,'Dicetak Pada '.date('d-M-Y h:i:s a'));
		$pdf->addText(50,22,8,'Laporan Data Pegawai KSPS BMT AT-TAQWA');
		$pdf->addText(695,150,8, $username);
		$pdf->addText(700,100,8, $level);
		//Data
		$no = 1;
		$no++;
		$this->load->model("m_admin");
		$data['daftar'] = $this->m_admin->laporan();
		$judul = array(
			$no => 'No',
            'id_peg' => 'ID Pegawai',
            'date' => 'Tanggal Bergabung',
            'nama' => 'Nama Pegawai',
            'jenis_kelamin' => 'Jenis Kelamin',
            'level' => 'Jabatan',
            'status' => 'Status',
        );
		$pdf->ezSetDy(-40);
		$pdf->ezTable($data['daftar'], $judul);
		$pdf->ezStream();
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