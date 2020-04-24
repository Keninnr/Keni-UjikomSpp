<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin extends CI_Model {

    Public function prosesLogin($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('petugas')->row();
    }

    public function ubah_password($id_petugas, $data){
        $this->db->where('id_petugas', $id_petugas);
		return $this->db->update('petugas', $data);
    }

}