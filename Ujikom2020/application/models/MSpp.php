<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSpp extends CI_Model {
	public function getSpp($table_name){
		$get_spp =$this->db->get($table_name);
		return $get_spp->result_array();
	}
	public function tambahdata($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}
	public function edit($table_name,$data,$id){
		$this->db->where('id_spp',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}
	public function delete($table_name,$id){
		$this->db->where('id_spp',$id);
		$delete = $this->db->delete($table_name);
		return $delete;
	}
	public function dataEdit($table_name,$id){
		$this->db->where('id_spp',$id);
		$get_spp = $this->db->get($table_name);
		return $get_spp->row();
	}

}