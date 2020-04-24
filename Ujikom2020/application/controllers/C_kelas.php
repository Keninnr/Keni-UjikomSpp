<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kelas extends CI_Controller {

    public function index() 
    {
        $data['tkelas']=$this->Mkelas->getKelas('kelas');
        $this->load->view('admin/header');
        $this->load->view('admin/admin', $data);
        $this->load->view('Kelas/kelas', $data);
        $this->load->view('admin/footer');

    }

    public function forminput()
    {
        $this->load->view('Kelas/i_kelas');
    }

    public function create()
    {
        $nama_kelas =$_POST['nama_kelas'];
        $kompetensi_keahlian= $_POST['kompetensi_keahlian'];

        $data= array ('nama_kelas'=> $nama_kelas,'kompetensi_keahlian'=>$kompetensi_keahlian);
        $tambah= $this->Mkelas->tambahdata('kelas', $data);

        if($tambah>0){
            redirect('C_kelas/index');
        }else{
            echo "Gagal, silahkan ulangi lagi";
        }
    }

   public function formedit($id)
   {
       $data['dataEdit'] = $this->Mkelas->dataEdit('kelas', $id);     
       $this->load->view('kelas/e_kelas', $data);

   }

   public function update($id)
   {
        $nama_kelas =$_POST['nama_kelas'];
        $kompetensi_keahlian= $_POST['kompetensi_keahlian'];

        $data= ['nama_kelas'=> $nama_kelas,'kompetensi_keahlian'=>$kompetensi_keahlian];
        $edit = $this->Mkelas->edit('kelas',$data,$id);
        if($edit>0){
            redirect('C_kelas/index');
        }else{
            echo "Gagal, silahkan ulangi lagi";
        }
   }

   public function delete($id)
   {
        $delete = $this->Mkelas->delete('kelas', $id, 'id_kelas');
            if($delete>0){
                redirect('C_kelas/index');
            }else{
                echo "Gagal, silahkan ulangi lagi";
            }
   }

}
