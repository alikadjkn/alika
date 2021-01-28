<?php

class Uang_lembur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Data_lembur_model', 'data_lembur');
    }

    public function index($thn = null)
    {
        if (!isset($thn)) $thn = date('Y');
        $nip = $this->session->userdata('nip');
        $data['tahun'] = $this->data_lembur->getTahun($nip);
        $data['thn'] = $thn;
        $data['lembur'] = $this->data_lembur->getLembur($nip, $thn);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('uang_lembur/index', $data);
        $this->load->view('template/footer');
    }
}
