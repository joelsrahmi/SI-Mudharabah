<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cs extends CI_Model {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function getPemohon() {
        /*$this->db->select('*');
		$this->db->from('pemohon');*/

		$this->db->select('*');
		$this->db->from('pemohon');
		$this->db->join('tb_akad','tb_akad.id_pemohon = pemohon.id_pemohon');
		$data = $this->db->get();

		return $getPemohon = $data->result();
    }

    public function getAdministrasi() {
        /*$this->db->select('*');
		$this->db->from('pemohon');*/

		$this->db->select('*');
		$this->db->from('tb_administrasi');
		$data = $this->db->get();
		
		return $getAdministrasi = $data->result();
    }

    public function getRekening(){
    	$this->db->select('*');
		$this->db->from('tb_rekening');
		$data = $this->db->get();

		return $getRekening = $data->result();
    } 


    public function getDetailPemohon($id_pemohon){
    	$this->db->select('*');
		$this->db->from('pemohon');
		$this->db->where('pemohon.id_pemohon', $id_pemohon);
		$this->db->join('tb_akad','tb_akad.id_pemohon = pemohon.id_pemohon');
		
		$data = $this->db->get();

		return $getDetailPemohon = $data->result();
    }

    public function tampilPengajuan($no_rek){
    	$this->db->select('*');
		$this->db->from('tb_rekening');
		$this->db->where('no_rekening', $no_rek);
		
		$data = $this->db->get();

		return $tampilPengajuan = $data->result();
    }

    public function getDetailAdministrasi($no_rekening){
    	$this->db->select('*');
		$this->db->from('tb_administrasi');
		$this->db->where('no_rekening', $no_rekening);


		$data = $this->db->get();

		
		return $tampilAdministrasi = $data->result();
    }

    

    public function inputPemohon($pemohon, $noktp, $jml_pinjaman){
		$a = $this->db->insert('pemohon', $pemohon);

		$this->db->select('id_pemohon');
		$this->db->from('pemohon');
		$this->db->where('no_ktp', $noktp);
		$query_idpemohon = $this->db->get();

		$dt_idpemohon = $query_idpemohon->result_array();
		$idpemohon = $dt_idpemohon[0]['id_pemohon'];

		$dt_akad_admin = array(
			'id_pemohon' => $idpemohon);

		$c = $this->db->insert('tb_akad', $dt_akad_admin, $jml_pinjaman);

		$d = $this->db->insert('tb_administrasi', $dt_akad_admin);

		if ($a and $c and $d){
			return true;
		}
		
		else
		{
		return false;
		}
    }

    public function updateAdministrasi($data){

    	$id_administrasi = $this->input->post('id_administrasi');
		$this->db->where('id_administrasi', $id_administrasi);
		$query = $this->db->update('tb_administrasi', $data);
		

		if ($query) 
		{
		return true;
		}
		else
		{
		return false;
		}
    }

    public function inputAnggota($anggota){

		$q = $this->db->insert('tb_rekening', $anggota);

		if ($q){
			return true;
		}
		
		else
		{
		return false;
		}
    }

    public function updatePemohon($data, $jml_pinjaman){
    	$id_pemohon = $this->input->post('id_pemohon');
		$idpemohon = $this->db->where('id_pemohon', $id_pemohon);
		$pemohon = $this->db->update('pemohon', $data);

		$idpemohon_akad = $this->db->where('id_pemohon', $id_pemohon);
		$akad = $this->db->update('tb_akad', $jml_pinjaman);

		
		if ($pemohon and $akad) 
		{
		return true;
		}
		else
		{
		return false;
		}
    }

    public function getAkad(){
    	$this->db->select('*');
		$this->db->from('tb_akad');
		
		$data = $this->db->get();

		return $getAkad = $data->result();
    }

    public function inputPengajuan($p_akad, $administrasi){
    	$a = $this->db->insert('tb_akad', $p_akad);

    	$b = $this->db->insert('tb_administrasi', $administrasi);

    	if($a and $b){
    		return true;
    	}
    	else{
    		return false;}
    }

    

    
}
