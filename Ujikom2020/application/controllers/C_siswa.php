<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_siswa extends CI_Controller {

    function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("Login"));
		}
	}

    public function index() {

        $data['tsiswa']=$this->Msiswa->join_table('siswa');
        
        $this->load->view('admin/header');
        $this->load->view('admin/admin', $data);
        $this->load->view('Siswa/siswa', $data);
        $this->load->view('admin/footer');
        
    }

    public function forminput()
    {
        $this->load->view('siswa/i_siswa');
    }

    public function create()
    {
        $nisn =$_POST['nisn'];
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $alamat= $_POST['alamat'];
        $no_telp= $_POST['no_telp'];
        $id_kelas = $_POST['id_kelas'];
        $id_spp = $_POST['id_spp'];
        $password = $_POST['password'];

        $data= array ('nisn'=>$nisn,'nis'=>$nis, 'nama' => $nama, 'alamat'=> $alamat, 'no_telp'=> $no_telp, 'id_kelas'=>$id_kelas, 'id_spp'=>$id_spp, 'password'=>$password);
        $tambah= $this->Msiswa->tambahdata('siswa', $data, $nisn);

        if($tambah>0){
            redirect('C_siswa/index');
        }else{
            echo "Gagal, silahkan ulangi lagi";
        }
    }

   public function formedit($id)
   {
       $data['dataEdit'] = $this->Msiswa->dataEdit('siswa', $id);     
       $this->load->view('siswa/e_siswa', $data);

   }

   public function update($id)
   {
        $nisn =$_POST['nisn'];
        $nis= $_POST['nis'];
        $nama = $_POST['nama'];
        $alamat= $_POST['alamat'];
        $no_telp= $_POST['no_telp'];
        $id_kelas = $_POST['id_kelas'];
        $id_spp = $_POST['id_spp'];
        $password = $_POST['password'];

        $data= ['nisn'=> $nisn,'nis'=>$nis, 'nama' => $nama, 'alamat'=> $alamat, 'no_telp'=> $no_telp, 'id_kelas'=>$id_kelas, 'id_spp'=>$id_spp, 'password'=>$password];
        $edit = $this->Msiswa->edit('siswa',$data,$id);
        if($edit>0){
            redirect('C_siswa/index');
        }else{
            echo "Gagal, silahkan ulangi lagi";
        }
   }

   public function delete($id)
   {
        $delete = $this->Msiswa->delete('siswa', $id, 'id_siswa');
            if($delete>0){
                redirect('C_siswa/index');
            }else{
                echo "Gagal, silahkan ulangi lagi";
            }
   }


}
