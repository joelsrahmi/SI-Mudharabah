<?php defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller
{
	function __construct(){
		parent::__construct();//dia akan ototmatis memanggil/eksekusi terus
		$this->load->model('m_login');
		$this->load->library('session');
	}

	public function index() {
		$this->load->view('v_login');
	}

	public function cek_login() {
		$this->load->library('session');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', '', 'required|trim|callback_username_check');
        $this->form_validation->set_rules('password', '', 'required|md5|trim');

        if($this->form_validation->run())
        {
            $data= array(
                'username' =>$this->input->post('username'), 'is_logged_in'=>1);
            $this->session->set_userdata($data);
            redirect('c_login/menu_utama');
        }
        else
        {
            echo"<script>alert('Gagal login: Cek Username dan Password!');history.go(-1);</script>";
        }
	}

	public function username_check(){
		$this->load->library('session');
		$this->load->model('m_login');
        if ($this->m_login->can_log_in())
        {
            return true;
        }
        else
        {
            return false;
        }
	}

	public function menu_utama()
	{
		if ($this->session->userdata('is_logged_in')) 
		{
			$this->load->library('session');
            $name = $this->session->userdata('username');
            $this->load->model('m_login');
            $level = $this->m_login->getLevel($name);
            $data['level'] = $level;
            if ($level == 'Admin') {
				redirect('c_admin');
			}
			if ($level == 'CS') {
				redirect('c_cs');
			}
			if ($level == 'Teller') {
				redirect('c_teller');
			}
			if ($level == 'Manajer') {
				redirect('c_manajer');
			}
			else{
				echo "<script>alert('Gagal login: Anda Tidak Punya Hak Akses!');history.go(-1);</script>";
			}    
		}
		else{
			echo "<script>alert('Gagal login: cek Username dan Password!');history.go(-1);</script>";
		}
	}

	public function is_logged_in()
    {
    	$this->load->library('session');
        $is_logged_in=$this->session->userdata('is_logged_in');
        if(!isset($is_logged_in)||$is_logged_in!= true) 
        {
            redirect('c_login');
        } 
    }
}

?>