<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msiswa extends CI_Model {


	public function join_table(){
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->join('siswa','siswa.id_kelas= kelas.id_kelas');
        $this->db->join('spp','spp.id_spp=siswa.id_spp');
        $query = $this->db->get();
        return $query->result_array();
    }
	public function tambahdata($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}
	public function edit($table_name,$data,$nisn){
		$this->db->where('nisn',$nisn);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}
	public function delete($table_name,$nisn){
		$this->db->where('nisn',$nisn);
		$delete = $this->db->delete($table_name);
		return $delete;
	}
	public function dataEdit($table_name,$nisn){
		$this->db->where('nisn',$nisn);
		$get_siswa = $this->db->get($table_name);
		return $get_siswa->row();
    }
	

	public function Home($nisn){

		$this->db->where('nisn', $nisn);
		return $this->db->get('pembayaran')->result_array();
	}

	public function data_pembayaran_spp($nisn, $bulan, $tahun){
		$this->db->where('nisn', $nisn);
		$this->db->where('bulan_bayar', $bulan);
		$this->db->where('tahun_bayar', $tahun);
		return $this->db->get('pembayaran')->row();
	}
}