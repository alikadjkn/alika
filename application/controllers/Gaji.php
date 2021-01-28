<?php

class Gaji extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Data_gaji_model', 'data_gaji');
    }

    public function index($thn = null)
    {
        if (!isset($thn)) $thn = date('Y');
        $nip = $this->session->userdata('nip');
        $data['tahun'] = $this->data_gaji->getTahun($nip);
        $data['thn'] = $thn;
        $data['gaji'] = $this->data_gaji->getGaji($nip, $thn);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('gaji/index', $data);
        $this->load->view('template/footer');
    }
}
