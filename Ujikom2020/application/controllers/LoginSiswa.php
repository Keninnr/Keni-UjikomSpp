<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginSiswa extends CI_Controller {

    public function index()
	{
		$this->load->view('siswa/LoginSiswa');
    }

    public function pass()
    {
        $this->load->view('admin/header');
        $this->load->view('siswa/ubah_password');
        $this->load->view('admin/footer');
    }

    public function HomeSiswa()
	{

        if(empty($this->session->userdata('nis'))){
			redirect('LoginSiswa');
		}else{
			$nisn = $this->session->userdata('nisn');

            $data['pembayaran'] = $this->Msiswa->Home($nisn);

            for ($i=1; $i < 13; $i++) { 

                    $data['spp_tahun1'][]	= $this->Msiswa->data_pembayaran_spp($nisn, $bulan = $i, $tahun = 1);
					$data['spp_tahun2'][]	= $this->Msiswa->data_pembayaran_spp($nisn, $bulan = $i, $tahun = 2);
					$data['spp_tahun3'][]	= $this->Msiswa->data_pembayaran_spp($nisn, $bulan = $i, $tahun = 3);
			}
            
            $this->load->view('admin/header');
            $this->load->view('Siswa/HomeSiswa', $data);
            $this->load->view('admin/footer');
	    }
	}
  
    public function proses_login() {

        if(isset($_POST['login'])) {
            $nis = $this->input->post('nis', true);
            $password = $this->input->post('password', true);
            $test = $this->MLoginSiswa->proseslogin($nis,$password);
            $hasil = count($test);
            if ($hasil > 0) {

                $data_session= [
                    'nisn' => $test->nisn,
                    'nis' => $test->nis,
                    'nama' => $test->nama,
                    'status' => login
                ];
                $this->session->set_userdata($data_session);
                redirect('LoginSiswa/HomeSiswa');

            }else{
                redirect('LoginSiswa');
                }
            }

        }

        public function Profile(){
            $nis = $this->session->userdata('nis');
            if(empty($nis)){
                redirect('LoginSiswa');
            }else{
                $data['profile'] = $this->MLoginSiswa->Profile($nis);
                $this->load->view('admin/header');
                $this->load->view('siswa/profile_siswa', $data);
            }
        }

        public function ubah_password(){
            $nis = $this->session->userdata('nis');
    
            $last_pass  = $this->input->post('last_pass', true);
            $new_pass  = $this->input->post('new_pass', true);
            $new_pass2 = $this->input->post('new_pass2', true);
    
            $ambil = $this->db->get_where('siswa', ['nis' => $nis, 'password' => $last_pass])->row();
            $test   = count($ambil);
            if($test > 0){
                if($new_pass == $new_pass2){
                    $data = ['password' => $new_pass];
                    $update = $this->MLoginSiswa->ubah_password($nis, $data);
                    if($update){
                        redirect('LoginSiswa/HomeSiswa');
                    }else{
                        echo "Gagal Mengubah Password!";
                    }
                }else{
                    echo "Password Tidak Cocok";
                }
            }else{
                echo "Password Salah, Silahkan Isi Lagi";
            }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('LoginSiswa');
    }
}
