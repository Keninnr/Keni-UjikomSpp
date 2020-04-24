<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPembayaran extends CI_Model {


	public function join_table($data_cari){
		// $this->db->order_by('pembayaran.tgl_bayar','pembayaran.tahun_bayar', 'desc');
		$this->db->like($data_cari);
		$this->db->select('*');
		$this->db->from('pembayaran');
		$this->db->join('siswa', 'siswa.nisn = pembayaran.nisn');
		$this->db->join('petugas', 'petugas.id_petugas = pembayaran.id_petugas');
		return $this->db->get()->result_array();
    }

	public function data_pembayaran($bulan, $tahun, $nisn){
		$this->db->where('nisn', $nisn);
		$this->db->where('bulan_bayar', $bulan);
		$this->db->where('tahun_bayar', $tahun);
		return $this->db->get('pembayaran')->row();
	}

	public function data_pembayaran_status($bulan, $tahun, $nisn, $status){
		$this->db->where('nisn', $nisn);
		$this->db->where('bulan_bayar', $bulan);
		$this->db->where('tahun_bayar', $tahun);
		return $this->db->get('pembayaran')->row();
	}

	public function search_data_siswa($nis){
		$this->db->where('siswa.nis', $nis);
		$this->db->select('*');
		$this->db->from('kelas', 'spp');
		$this->db->join('siswa', 'siswa.id_kelas = kelas.id_kelas');
		$this->db->join('spp', 'spp.id_spp = siswa.id_spp');
		return $this->db->get('')->row();
	}

	//Model Melakukan Pembayaran 

	public function menghitung_pembayaran($nisn, $id_spp){
		$this->db->where('nisn', $nisn);
		$this->db->where('tahun_bayar', $id_spp);
		return $this->db->get('pembayaran')->num_rows();
	}

	public function Update_Siswa($nisn, $data_update){
		$this->db->where('nisn', $nisn);
		return $this->db->update('siswa', $data_update);
	}

	//
	public function ambil_siswa($nis){
		$this->db->where('nis', $nis);
		return $this->db->get('siswa')->row();
	}

	public function Jumlah_Bayar($nisn){
		$this->db->like('nisn', $nisn);
		$this->db->select_sum('bulan_bayar');
		return $this->db->get('pembayaran')->row();
	}

	public function Update_ID_SPP($nisn, $data_update){
		$this->db->where('nisn', $nisn);
		return $this->db->update('siswa', $data_update);
	}  	
}