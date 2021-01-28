<?php

class Uang_makan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Data_makan_model', 'data_makan');
    }

    public function index($thn = null)
    {
        if (!isset($thn)) $thn = date('Y');
        $nip = $this->session->userdata('nip');
        $data['tahun'] = $this->data_makan->getTahun($nip);
        $data['thn'] = $thn;
        $data['makan'] = $this->data_makan->getMakan($nip, $thn);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('uang_makan/index', $data);
        $this->load->view('template/footer');
    }
}
