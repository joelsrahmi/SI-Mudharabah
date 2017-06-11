<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_manajer extends CI_Model {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function listPegawai() {
        $this->db->select('*');
		$this->db->from('pegawai');
		$data = $this->db->get();

		return $listPegawai = $data->result();
    }

    function lihatStatusPegawai($id_peg){
    	$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->where('id_peg', $id_peg);
		$data = $this->db->get();

		return $tampil_daftar_pegawai = $data->result();
    }

    public function getDetailPersetujuan($id_akad){
    	$this->db->select('*');
		$this->db->from('tb_akad');
		$this->db->where('id_akad', $id_akad);


		$data = $this->db->get();

		
		return $getDetailPersetujuan = $data->result();
    }

    public function updateStatPegawai($data){
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

    public function updateStatPemohon($akad, $transaksi, $rek){
    	$this->db->where('no_rekening', $rek);
		$q = $this->db->update('tb_akad', $akad);
		$x = $this->db->query('SELECT status_akad FROM tb_akad WHERE status_akad="Disetujui"');
		
		if($q){
			if($x){
				//$query = 
				$this->db->insert('tb_transaksi', $transaksi);
				/*if ($query)
				{
					date_default_timezone_set('Asia/Jakarta');
					$now = date('Y-m-d H:i:s');
					$inv = "investasi akad mudharabah";
					$kas = "kas";
					$piutang = "piutang";
					$kode_i = "1-3000";
					$kode_k = "1-1000";
					$kode_p = "2-1000";
					$data_setoran1 = array(
						'id_jurnal' => "JUR001",
						'id_transaksi' => $this->input->post('id_transaksi'),
						'tgl' => $now,
						'kode_akun' => $kode_k,
						'keterangan' => $kas,
						'debet' => $data['jumlah_setoran']
						);
					$data_setoran2 = array(
						'id_jurnal' => "JUR001",
						'id_transaksi' => $this->input->post('id_transaksi'),
						'tgl' => $now,
						'kode_akun' => $kode_p,
						'keterangan' => $piutang,
						'kredit' => $data['jumlah_setoran']
						);
					$jurnal = $this->db->insert('tb_jurnal', $data_setoran1);
					$jurnal = $this->db->insert('tb_jurnal', $data_setoran2);
					return true;
				}*/

				return true;
			}
			else{
				return false;
			}
		}else{
			return false;
		}

		//$error = $this->db->error();
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
