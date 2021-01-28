<?php

class Kekurangan_gaji extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Data_kurang_model', 'data_kurang');
    }

    public function index($thn = null)
    {
        if (!isset($thn)) $thn = date('Y');
        $nip = $this->session->userdata('nip');
        $data['tahun'] = $this->data_kurang->getTahun($nip);
        $data['thn'] = $thn;
        $data['kurang'] = $this->data_kurang->getKurang($nip, $thn);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kurang/index', $data);
        $this->load->view('template/footer');
    }
}
