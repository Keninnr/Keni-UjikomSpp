<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
	{
      
        $this->load->view('login');
     
    }

    public function pass()
    {
        $this->load->view('admin/header');
        $this->load->view('petugas/nav');
        $this->load->view('profile/ubah_password');
        $this->load->view('admin/footer');
    }
    
  
    public function proses_login() {

        if(isset($_POST['login'])) {
            $username = $this->input->post('username', true);
            $password = $this->input->post('password', true);
            $test = $this->MLogin->proseslogin($username,$password);
            $hasil = count($test);

            if ($hasil > 0) {
                $login = $this->db->get_where('petugas', ['username'=> $username, 'password'=>$password])->row();
                if($login->level == 'admin') {
                    $data_session = [
                        'id_petugas' => $test->id_petugas,
                        'username' => $test->username,
                        'nama_petugas' => $test->nama_petugas,
                        'level' => $test->level,
                        'status' => "login"
                    ];
                    $this->session->set_userdata($data_session);
                    redirect('Login/profile');
                }else if ($login->level == 'petugas') {
                    $data_session = [
                        'id_petugas' => $test->id_petugas,
                        'username' => $test->username,
                        'nama_petugas' => $test->nama_petugas,
                        'level' => $test->level,
                        'status' => "login"
                    ];
                    $this->session->set_userdata($data_session);
                    redirect('C_petugas/home');

            }else{
                echo 'gagal Login'; 
                }
            }
        }
    }

    public function profile(){
        $id_petugas = $this->session->userdata('id_petugas');

		if($this->session->userdata('level') == 'admin'){

			$data['profile'] = $this->db->get_where('petugas', array('id_petugas' => $id_petugas))->row();
			
            $this->load->view('admin/header');
            $this->load->view('admin/admin');
            $this->load->view('Profile/admin', $data);
            $this->load->view('admin/footer');

		}else if($this->session->userdata('level') == 'petugas'){

            $data['profile'] = $this->db->get_where('petugas', array('id_petugas' => $id_petugas))->row();
            $this->load->view('admin/header');
            $this->load->view('petugas/nav');
            $this->load->view('Profile/admin', $data);
            $this->load->view('admin/footer');
            

		}else{
			redirect('C_Petugas');
		}
	}
    
        public function Logout(){
            $this->session->sess_destroy();
            redirect('Welcome');
        }

    public function ubah_password(){
            $id_petugas = $this->session->userdata('id_petugas');
    
            $last_pass  = $this->input->post('last_pass', true);
            $new_pass  = $this->input->post('new_pass', true);
            $new_pass2 = $this->input->post('new_pass2', true);
    
            $ambil = $this->db->get_where('petugas', ['id_petugas' => $id_petugas, 'password' => $last_pass])->row();
            $test   = count($ambil);
            if($test > 0){
                if($new_pass == $new_pass2){
                    $data = ['password' => $new_pass];
                    $update = $this->MLogin->ubah_password($id_petugas, $data);
                    if($update){
                        redirect('Login/Profile');
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

}

