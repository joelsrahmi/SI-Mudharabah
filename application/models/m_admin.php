<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function getPegawai() {
        $this->db->select('*');
		$this->db->from('pegawai');
		$data = $this->db->get();

		return $getPegawai = $data->result();
    }

    function getDetailPegawai($id_peg){
    	$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->where('id_peg', $id_peg);
		$data = $this->db->get();

		return $tampil_pegawai = $data->result();
    }

    public function laporan(){
    	$this->db->select('*');
		$this->db->from('pegawai');
		$q = $this->db->get();

        if ($q->num_rows() > 0){ // Jika datanya lebih dari 0
            foreach    ($q->result_array() as $row){
                $data[] = $row;
            }
        }
        $q->free_result();
        return $data;
    }

    public function updatePegawai($data){
    	$id_peg = $this->input->post('id_peg');
		$this->db->where('id_peg', $id_peg);
		$query = $this->db->update('pegawai', $data);
		//$error = $this->db->error();
		
		if ($query) 
		{
		return true;
		}
		else
		{
		return false;
		}
    }

    public function inputPegawai($data){
    	$query = $this->db->insert('pegawai', $data);

		if ($query) 
		{
		return true;
		}
		else
		{
		return false;
		}
    }
}
