<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pdf extends CI_Controller {

    function __construct(){
        parent::__construct();
        require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
    }

    public function index() {
        $data['pembayaran'] = $this->MPdf->join_table('pembayaran');
        $this->load->view('Admin/report_pdf', $data);
    }

    public function pdf() {

        $dompdf = new Dompdf();

		$data['pembayaran'] = $this->MPdf->join_table('pembayaran');

		$html =$this->load->view('Admin/report_pdf',$data,true);

		$dompdf->load_html($html);

		$dompdf->set_paper('A4','potrait');

		$dompdf->render();

		$pdf = $dompdf->output();

		$dompdf->stream("DATA-PDF.pdf", array("Attachment" => false));


	}



}