<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller{

    function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("Login"));
		}
	}

    public function index(){
		$this->load->view('Admin/admin');
		
    }
}
