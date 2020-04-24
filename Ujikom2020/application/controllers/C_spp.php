<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Spp extends CI_Controller {

    function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("Login"));
		}
	}
    public function index() 
    {
        $data['tspp']=$this->MSpp->getSpp('spp');
        $this->load->view('admin/header');
        $this->load->view('admin/admin', $data);
        $this->load->view('Spp/spp', $data);
        $this->load->view('admin/footer');
    }

   
    public function forminput()
    {
        $this->load->view('Spp/i_spp');
    }

    public function create()
    {
        $tahun =$_POST['tahun'];
        $nominal= $_POST['nominal'];

        $data= array ('tahun'=> $tahun,'nominal'=>$nominal);
        $tambah= $this->MSpp->tambahdata('spp', $data);

        if($tambah>0){
            redirect('C_spp/index');
        }else{
            echo "Gagal, silahkan ulangi lagi";
        }
    }

   public function formedit($id)
   {
       $data['dataEdit'] = $this->MSpp->dataEdit('spp', $id);     
       $this->load->view('Spp/e_spp', $data);

   }

   public function update($id)
   {
        $tahun =$_POST['tahun'];
        $nominal= $_POST['nominal'];

        $data= ['tahun'=> $tahun,'nominal'=>$nominal];
        $edit = $this->MSpp->edit('spp',$data,$id);
        if($edit>0){
            redirect('C_spp/index');
        }else{
            echo "Gagal, silahkan ulangi lagi";
        }
   }

   public function delete($id)
   {
        $delete = $this->MSpp->delete('spp', $id, 'id_spp');
            if($delete>0){
                redirect('C_spp/index');
            }else{
                echo "Gagal, silahkan ulangi lagi";
            }
   }

}
