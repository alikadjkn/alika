<?php

class Dokumen_perubahan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Data_perubahan_model', 'data_perubahan');
    }

    public function index($thn = null)
    {
        if (!isset($thn)) $thn = date('Y');
        $nip = $this->session->userdata('nip');
        $data['tahun'] = $this->data_perubahan->getTahun($nip);
        $data['thn'] = $thn;
        $data['perubahan'] = $this->data_perubahan->getPerubahan($nip, $thn);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dokumen_perubahan/index', $data);
        $this->load->view('template/footer');
    }
}
