<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkelas extends CI_Model {
	public function getKelas($table_name){
		$get_kelas =$this->db->get($table_name);
		return $get_kelas->result_array();
	}
	public function tambahdata($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}
	public function edit($table_name,$data,$id){
		$this->db->where('id_kelas',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}
	public function delete($table_name,$id){
		$this->db->where('id_kelas',$id);
		$delete = $this->db->delete($table_name);
		return $delete;
	}
	public function dataEdit($table_name,$id){
		$this->db->where('id_kelas',$id);
		$get_kelas = $this->db->get($table_name);
		return $get_kelas->row();
	}

}