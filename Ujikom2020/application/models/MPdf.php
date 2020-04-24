<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPdf extends CI_Model {


	public function join_table(){
		$this->db->select('*');
		$this->db->from('pembayaran');
		$this->db->join('siswa', 'siswa.nisn = pembayaran.nisn');
        $this->db->join('petugas', 'petugas.id_petugas = pembayaran.id_petugas');
        $this->db->order_by('id_pembayaran', 'DESC');
		return $this->db->get()->result_array();
	}
}