<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();

class C_cs extends CI_Controller {

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
			$this->load->view('template/header_cs');
			$this->load->view('cs/v_home');
			$this->load->view('template/footer-js');

			$username = $this->session->userdata('username');
		}
		else{
			redirect('c_login');
		}		
	}

	public function tampilPemohon($offset=0) {
		if($this->session->userdata('is_logged_in')){
			$this->load->library('session');
			$data['username'] = $this->session->userdata('username');
			

			$this->load->model('m_cs');
			$data['getPemohon']=$this->m_cs->getPemohon();
			$this->load->view('template/head-css');
			$this->load->view('template/header_cs');
			$this->load->view('cs/tampil_permohonan_akad', $data);
			$this->load->view('template/footer-js');

			$username = $this->session->userdata('username');
		}
		else{
			redirect('c_login', 'refresh');
		}
	}

	public function tampilRekening($offset=0) {
		if($this->session->userdata('is_logged_in')){
			$this->load->library('session');
			$data['username'] = $this->session->userdata('username');
			

			$this->load->model('m_cs');
			$data['getRekening']=$this->m_cs->getRekening();
			$this->load->view('template/head-css');
			$this->load->view('template/header_cs');
			$this->load->view('cs/tampil_rekening', $data);
			$this->load->view('template/footer-js');

			$username = $this->session->userdata('username');
		}
		else{
			redirect('c_login', 'refresh');
		}
	}

	public function tampilInputPemohon(){
		if($this->session->userdata('is_logged_in')){
			$this->load->library("session");
			$data['username'] = $this->session->userdata('username');
			$username = $this->session->userdata('username');

			$this->load->view('template/head-css');
			$this->load->view('template/header_cs');
			$this->load->view('cs/v_input_pemohon');
			$this->load->view('template/footer-js');
		}
		else{
			redirect('c_login');
		}
	}

	public function tampilInputAnggota(){
		if($this->session->userdata('is_logged_in')){
			$this->load->library("session");
			$data['username'] = $this->session->userdata('username');
			$username = $this->session->userdata('username');

			$this->load->view('template/head-css');
			$this->load->view('template/header_cs');
			$this->load->view('cs/v_input_anggota');
			$this->load->view('template/footer-js');
		}
		else{
			redirect('c_login');
		}
	}

	function input_pemohon(){
		if($this->session->userdata('is_logged_in')){
			$this->load->model('m_cs');

			$now = date('Y-m-d H:i:s');
			$pemohon = array(
				'nama_pemohon' => $this->input->post('nama_pemohon'),
				'date' => $now,
				'no_ktp' => $this->input->post('no_ktp'),
	            'jenkel' => $this->input->post('jenkel'),
	            'pekerjaan_terakhir' => $this->input->post('pekerjaan_terakhir'),
	            'tgl_lahir' => $this->input->post('tgl_lahir'),
	            'tempat_lahir' => $this->input->post ('tempat_lahir'),
	            'status_rumah' => $this->input->post('status_rumah'),
	            'nama_wali' => $this->input->post('nama_wali'),
	            'alamat_wali' => $this->input->post('alamat_wali'),
	            'hubungan_wali' => $this->input->post('hubungan_wali'),
	            'no_telp_wali' => $this->input->post('no_telp_wali'),
	            'no_telp' => $this->input->post('no_telp'),
	            'alamat1' => $this->input->post('alamat1'),
	        );

			$jml_pinjaman = array(
				'jumlah_pinjaman' => $this->input->post('jumlah_pinjaman'));

			$noktp = $pemohon['no_ktp'];
            
            $inputPemohon = $this->m_cs->inputPemohon($pemohon, $noktp, $jml_pinjaman);
            if ($inputPemohon){
            	echo"<script>alert('Tambah Data Pemohon Berhasil!');history.go(-2);</script>";
            }
        }
        else {
            //If no session, redirect to login page
            redirect('c_login', 'refresh');
        }
	}

	public function input_anggota(){
		if($this->session->userdata('is_logged_in')){
			$this->load->model('m_cs');

			$now = date('Y-m-d H:i:s');
			$anggota = array(
				'nama_anggota' => $this->input->post('nama_anggota'),
				'date' => $now,
				'no_ktp' => $this->input->post('no_ktp'),
	            'jenkel' => $this->input->post('jenkel'),
	            'pekerjaan_terakhir' => $this->input->post('pekerjaan_terakhir'),
	            'tgl_lahir' => $this->input->post('tgl_lahir'),
	            'tempat_lahir' => $this->input->post ('tempat_lahir'),
	            'status_rumah' => $this->input->post('status_rumah'),
	            'nama_wali' => $this->input->post('nama_wali'),
	            'alamat_wali' => $this->input->post('alamat_wali'),
	            'hubungan_wali' => $this->input->post('hubungan_wali'),
	            'no_telp_wali' => $this->input->post('no_telp_wali'),
	            'no_telp' => $this->input->post('no_telp'),
	            'alamat1' => $this->input->post('alamat1'),
	            'status_rek' => "Aktif",
	            'saldo' => 'saldo_awal',
	        );
            
            $inputAnggota = $this->m_cs->inputAnggota($anggota);
            if ($inputAnggota){
            	echo"<script>alert('Tambah Data Pemohon Berhasil!');history.go(-2);</script>";
            }
        }
        else {
            //If no session, redirect to login page
            redirect('c_login', 'refresh');
        }
	}

	public function tampilPengajuanAkad(){
		if($this->session->userdata('is_logged_in')){
			$this->load->library("session");
			$data['username'] = $this->session->userdata('username');
			$username = $this->session->userdata('username');

			$no_rek = $this->input->post('pengajuan');
	        $this->load->model('m_cs');
	        $data['tampilRekening']=$this->m_cs->tampilPengajuan($no_rek);
	 
			$this->load->view('template/head-css');
			$this->load->view('template/header_cs');
			$this->load->view('cs/tampil_pengajuan_akad', $data);
			$this->load->view('template/footer-js');
		}
		else{
			redirect('c_login');
		}
	}

	public function input_pengajuan_akad(){
		if($this->session->userdata('is_logged_in')){
			$now = date('Y-m-d H:i:s');
			$p_akad = array(
				'no_rekening' => $this->input->post('no_rekening'),
				'nama_anggota' => $this->input->post('nama_anggota'),
				'jumlah_pinjaman' => $this->input->post('jumlah_pinjaman'),
				'jangka_waktu' => $this->input->post('jangka_waktu'),
				'basil_persen' => $this->input->post('basil_persen'),
				'status_akad' => "Belum Disetujui",
				'penggunaan_pinjaman' => $this->input->post('penggunaan_pinjaman'),
			);

			$administrasi = array(
				'no_rekening' => $this->input->post('no_rekening'),
				'nama_anggota' => $this->input->post('nama_anggota'),
				);

			$this->load->model('m_cs');
			$inputPengajuan = $this->m_cs->inputPengajuan($p_akad, $administrasi);
			if ($inputPengajuan){
            	echo"<script>alert('Tambah Data Pengajuan Berhasil!');history.go(-2);</script>";
            }else{
            	echo"<script>alert('Tambah Data Pengajuan Berhasil!');history.go(-2);</script>";
            }
		}
		else{
			redirect('c_login');
		}
	}

	public function listPengajuanAkad(){
		$this->load->library("session");
			$data['username'] = $this->session->userdata('username');
			$username = $this->session->userdata('username');

			$no_rek = $this->input->post('pengajuan');
	        $this->load->model('m_cs');
	        $data['getAkad']=$this->m_cs->getAkad();
	 
			$this->load->view('template/head-css');
			$this->load->view('template/header_cs');
			$this->load->view('cs/list_akad', $data);
			$this->load->view('template/footer-js');
	}

	public function pengajuan_akad(){
		if($this->session->userdata('is_logged_in')){
			$this->load->library("session");
			$data['username'] = $this->session->userdata('username');
			$username = $this->session->userdata('username');

			$this->load->view('template/head-css');
			$this->load->view('template/header_cs');
			$this->load->view('cs/tampil_pengajuan_pemohon');
			$this->load->view('template/footer-js');
		}
		else{
			redirect('c_login');
		}
	}

	public function tampilDetailPemohon(){
		if($this->session->userdata('is_logged_in')){
			$this->load->library("session");
			$data['username'] = $this->session->userdata('username');
			$username = $this->session->userdata('username');

			$this->load->view('template/head-css');
			$this->load->view('template/header_cs');
			$this->load->view('cs/tampil_detail_pemohon');
			$this->load->view('template/footer-js');
		}
		else{
			redirect('c_login');
		}
	}

	public function tampilUpdatePemohon(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->library('session');
			$data['username'] = $this->session->userdata('username');
			
			$id_pemohon = $this->input->post('ubah');
	        $this->load->model('m_cs');
	        $data['tampilPemohon']=$this->m_cs->getDetailPemohon($id_pemohon);
	       
	        $this->load->view('template/head-css');
			$this->load->view('template/header_cs');
			$this->load->view('cs/tampil_update_pemohon', $data);
			$this->load->view('template/footer-js');
		}
		else {
            //If no session, redirect to login page
            redirect('c_login', 'refresh');
        }
	}

	public function update_pemohon(){
			$now = date('Y-m-d H:i:s');
			$data = array(
				'id_pemohon' => $this->input->post('id_pemohon'),
				'nama_pemohon' => $this->input->post('nama_pemohon'),
				'date' => $this->input->post('date'),
				'no_ktp' => $this->input->post('no_ktp'),
	            'jenkel' => $this->input->post('jenkel'),
	            'pekerjaan_terakhir' => $this->input->post('pekerjaan_terakhir'),
	            'tgl_lahir' => $this->input->post('tgl_lahir'),
	            'tempat_lahir' => $this->input->post ('tempat_lahir'),
	            'status_rumah' => $this->input->post('status_rumah'),
	            'terbilang' => $this->input->post('terbilang'),
	            'jangka_waktu' => $this->input->post('jangka_waktu'),
	            'penggunaan_pinjaman' => $this->input->post('penggunaan_pinjaman'),
	            'nama_wali' => $this->input->post('nama_wali'),
	            'alamat_wali' => $this->input->post('alamat_wali'),
	            'hubungan_wali' => $this->input->post('hubungan_wali'),
	            'no_telp_wali' => $this->input->post('no_telp_wali'),
	            'no_telp' => $this->input->post('no_telp'),
	            'alamat1' => $this->input->post('alamat1'),
	            //'status_akad' => $this->input->post('status_akad'),
	        );

			$jml_pinjaman = array(
				'jumlah_pinjaman' => $this->input->post('jumlah_pinjaman'));
            
            $this->load->model('m_cs');
		    $updatePemohon = $this->m_cs->updatePemohon($data, $jml_pinjaman);
		    
		    if ($updatePemohon){
		    	echo"<script>alert('Update Data Pemohon Berhasil!');history.go(-2);</script>";
		        //redirect ('c_admin/tampil_pegawai');
            }
           else{
            	echo"<script>alert('Update Data Pemohon Gagal!');history.go(-2);</script>";
            }
       
	}

	public function tampilAdministrasi($offset=0) {
		if($this->session->userdata('is_logged_in')){
			$this->load->library('session');
			$data['username'] = $this->session->userdata('username');
			

			$this->load->model('m_cs');
			$data['getAdministrasi']=$this->m_cs->getAdministrasi();

			$this->load->view('template/head-css');
			$this->load->view('template/header_cs');
			$this->load->view('cs/pembayaran_administrasi', $data);
			$this->load->view('template/footer-js');

			$username = $this->session->userdata('username');
		}
		else{
			redirect('c_login', 'refresh');
		}
	}

	public function tampilDetAdmin(){
		if($this->session->userdata('is_logged_in')){
			$this->load->library('session');
			$data['username'] = $this->session->userdata('username');
			

			$this->load->model('m_cs');
			$data['getDetailPemohon']=$this->m_cs->getDetailPemohon();

			$username = $this->session->userdata('username');
		}
		else{
			redirect('c_login', 'refresh');
		}
	}

	public function tampilBayarAdministrasi($offset=0) {
		if ($this->session->userdata('is_logged_in')) {
			$this->load->library('session');
			$data['username'] = $this->session->userdata('username');
			
			$no_rekening = $this->input->post('adm');
	        $this->load->model('m_cs');
	        $data['tampilAdministrasi']=$this->m_cs->getDetailAdministrasi($no_rekening);
	       
	        $this->load->view('template/head-css');
			$this->load->view('template/header_cs');
			$this->load->view('cs/tampil_bayar_administrasi', $data);
			$this->load->view('template/footer-js');
		}
		else {
            //If no session, redirect to login page
            redirect('c_login', 'refresh');
        }
	}

	public function update_administrasi(){
			$now = date('Y-m-d H:i:s');
			$data = array(
				'no_rekening' => $this->input->post('no_rekening'),
				'id_administrasi' => $this->input->post('id_administrasi'),
				'date' => $now,
				'biaya_pokok' => $this->input->post('biaya_pokok'),
				'biaya_sertifikat' => $this->input->post('biaya_sertifikat'),
				'status_adm' => $this->input->post('status_adm'),
	            //'status_akad' => $this->input->post('status_akad'),
	        );
            
            $this->load->model('m_cs');

		    $updateAdministrasi = $this->m_cs->updateAdministrasi($data);

		    
		    
		    if ($updateAdministrasi){
		    	echo"<script>alert('Pembayaran Administrasi Berhasil!');history.go(-2);</script>";
		        //redirect ('c_admin/tampil_pegawai');
            }
           else{
            	echo"<script>alert('PEmbayaran Administrasi Berhasil!');history.go(-2);</script>";
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