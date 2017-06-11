<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_teller extends CI_Model {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function getPemohon1() {
		$disetujui = 'Disetujui';
        $this->db->select('*');
		$this->db->from('tb_transaksi');
        $this->db->join('tb_akad', 'tb_akad.id_akad = tb_transaksi.id_akad');
		$data = $this->db->get();

		return $getPemohon = $data->result();
    }



    public function hitung($id_transaksi){
    	

        $sql1 = "SELECT id_akad, cicilan_ke, status_cicilan from tb_transaksi where id_transaksi = ?";
        $h = $this->db->query($sql1, array($id_transaksi));
        $i = $h->result_array();
        foreach($i AS $row){
            
            $f = $row['id_akad'];
            $g = $row['cicilan_ke'];
            $p = $row['status_cicilan'];
            
        }


        $sql2 = "SELECT jumlah_pinjaman, id_akad, basil_persen from tb_akad where id_akad = ?";
    	$a = $this->db->query($sql2, array($f));
    	$b = $a->result_array();
    	foreach($b AS $row){
    		$c = $row['jumlah_pinjaman'];
    		$d = $row['id_akad'];
            $e = $row['basil_persen'];
    	}
        
        
        $cicilan = $c/10;
        if ($g == 0) {
            $totalangsuranke = 1;
            $sisapinjaman = $c-($cicilan*1);
            $bagihasil = ($c*$e)/100;
        } else {
            $angsuranke = $g;
            $x = $c-($cicilan*($angsuranke));
            $sisapinjaman = $c-($cicilan*($angsuranke+1));
            $bagihasil = ($x*$e)/100;
            $totalangsuranke =$g + 1;
        }
        

        $jumlahsetoran = $bagihasil + $cicilan;
        $postjmlsetoran = $this->input->post('jumlah_setoran');



       if ($p == 'Belum Lunas') {

            if ($jumlahsetoran == $postjmlsetoran) {
                $data = array(
                    'setoran_cicilan' => $cicilan,
                    'jumlah_setoran' => $jumlahsetoran,
                    'basil' => $bagihasil,
                    'sisa_pinjaman' => $sisapinjaman,
                    'cicilan_ke ' => $totalangsuranke,
                    );
                $this->db->where('id_akad', $d);
                $querytransaksi = $this->db->update('tb_transaksi', $data);

                if ($querytransaksi) {
                    $sql3 = "SELECT id_akad, cicilan_ke from tb_transaksi where id_transaksi = ?";
                    $j = $this->db->query($sql3, array($id_transaksi));
                    $k = $j->result_array();
                    foreach($k AS $row){
                        $l = $row['cicilan_ke'];
                    }

                    if ($l == 10) {
                        $ket = 'Lunas';
                        $dataket = array('status_cicilan' => $ket, );
                        $this->db->where('id_akad', $d);
                        $this->db->update('tb_transaksi', $dataket);
                        return true;
                    } else {
                        return true;
                    }
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
        else {
            return false;
        }


    }

    public function lihatTransaksi($id_transaksi){
        
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_akad', 'tb_akad.id_akad = tb_transaksi.id_akad');
        $this->db->where('tb_transaksi.id_transaksi',$id_transaksi);
        $data = $this->db->get();

        return $getTransaksi = $data->result();
    }


	public function updateTransaksi($id_pemohon){
    	$this->db->select('*');
		$this->db->where('id_pemohon', $id_pemohon);
		$query = $this->db->update('tb_akad', $data);

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

    public function list_jurnal()
    {
        $this->db->select('*');
        $this->db->from('tb_jurnal');
        $data = $this->db->get();

        return $list_anggota = $data->result();
    }
    

}
