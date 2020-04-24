<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLoginSiswa extends CI_Model {

    Public function prosesLogin($nis,$password) {
        $this->db->where('nis', $nis);
        $this->db->where('password', $password);
        return $this->db->get('siswa')->row();
    }

    public function ubah_password($nis, $data){
        $this->db->where('nis', $nis);
		return $this->db->update('siswa', $data);
    }

    public function profile($nis){
        $this->db->where('siswa.nis', $nis);
        $this->db->from('kelas');
        $this->db->join('siswa', 'siswa.id_kelas = kelas.id_kelas');
        return $this->db->get()->row();
        
    }

}