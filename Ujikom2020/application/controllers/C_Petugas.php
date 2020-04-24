<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Petugas extends CI_Controller {

    function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("Login"));
		}
	}
    public function index() 
    {
        $data['tpetugas']=$this->MPetugas->getPetugas('petugas');

        $this->load->view('admin/header');
        $this->load->view('admin/admin', $data);
        $this->load->view('petugas/petugas', $data);
        $this->load->view('admin/footer');
    }

    public function home()
    {
        $this->load->view('admin/header');
        $this->load->view('petugas/nav');
        $this->load->view('petugas/home');
        $this->load->view('admin/footer');
    }

    public function profile()
    {
        $this->load->view('petugas/profile');
    }
   
    public function forminput()
    {
        $this->load->view('petugas/i_petugas');
    }

    public function create()
    {   
        $username = $_POST['username'];
        $password =$_POST['password'];
        $nama_petugas =$_POST['nama_petugas'];
        $level= $_POST['level'];

        $data= array ('username'=>$username,'password'=>$password,'nama_petugas'=> $nama_petugas,'level'=>$level);
        $tambah= $this->MPetugas->tambahdata('petugas', $data);

        if($tambah>0){
            redirect('C_petugas/index');
        }else{
            echo "Gagal, silahkan ulangi lagi";
        }
    }

   public function formedit($id)
   {
       $data['dataEdit'] = $this->MPetugas->dataEdit('petugas', $id);     
       $this->load->view('petugas/e_petugas', $data);

   }

   public function update($id)
   {
        $username = $_POST['username'];
        $password =$_POST['password'];
        $nama_petugas =$_POST['nama_petugas'];
        $level= $_POST['level'];;

        $data= array ('username'=>$username,'password'=>$password,'nama_petugas'=> $nama_petugas,'level'=>$level);
        $edit = $this->MPetugas->edit('petugas',$data,$id);
        if($edit>0){
            redirect('C_petugas/index');
        }else{
            echo "Gagal, silahkan ulangi lagi";
        }
   }

   public function delete($id)
   {
        $delete = $this->MPetugas->delete('petugas', $id, 'id_petugas');
            if($delete>0){
                redirect('C_petugas/index');
            }else{
                echo "Gagal, silahkan ulangi lagi";
            }
   }

}