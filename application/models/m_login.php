<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

	function __construct(){
		parent::__construct();
		//$this->load->database();
	}

	public function can_log_in()
	{
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',md5($this->input->post('password')));
		$query=$this->db->get('pegawai');
		if($query->num_rows()==1){
			$id_peg = $this->input->post('username');
			$sql = "SELECT id_peg FROM pegawai where username = ?";
			$query = $this->db->query($sql, array($id_peg));
			foreach($query->result_array() as $row){
				$id_peg = $row['id_peg'];
			}
			date_default_timezone_set('Asia/Jakarta');
			$now = date('Y-m-d H:i:s');
			$keterangan = "Berhasil login $id_peg";
			$audit = array('id_peg' => $id_peg,
				'keterangan' => $keterangan,
				'tanggal' => $now);
			$this->db->insert('audit', $audit);
			return true;
		}
		else{
			return false;
		}

		/*if($sql_login->num_rows==1)
		{
			return $sql_login->result_array();
		}*/

	}

	public function getLevel($name)
	{
		$sql = "SELECT level from pegawai where username = ?";
		$query = $this->db->query($sql, array($name));
		foreach ($query->result_array() as $row) 
		{
			$level = $row['level'];

		}
		return $name = $level;
	}

	public function audit_logout($username){
		$sql = "SELECT id_peg FROM pegawai where username = ?";
		$query = $this->db->query($sql, array($username));
		foreach ($query->result_array() as $row){
			$id_peg = $row['id_peg'];
		}
		date_default_timezone_set('Asia/Jakarta');
		$now = date('Y-m-d H:i:s');
		$keterangan = "Berhasil logout $id_peg";
		$audit = array('id_peg' => $id_peg, 'keterangan' => $keterangan, 'tanggal' => $now);
		$audit = $this->db->insert('audit', $audit);
		if($audit){
			return true;
		}
		else{
			return false;
		}
	}
}

?>