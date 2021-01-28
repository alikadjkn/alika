<?php

class Pembayaran_lainnya extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Data_lain_model', 'data_lain');
    }

    public function index($thn = null, $jns = null)
    {
        if (!isset($thn)) $thn = date('Y');
        if (!isset($jns)) $jns = 'perjadin';
        $nip = $this->session->userdata('nip');
        $data['tahun'] = $this->data_lain->getTahun($nip);
        $data['jenis'] = $this->data_lain->getJenis($nip, $thn);
        $data['thn'] = $thn;
        $data['jns'] = $jns;
        $data['lain'] = $this->data_lain->getLain($nip, $thn, $jns);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pembayaran_lainnya/index', $data);
        $this->load->view('template/footer');
    }

    public function detail($thn = null, $jns = null, $bln = null)
    {
        if (!isset($thn)) $thn = date('Y');
        if (!isset($jns)) $jns = 'perjadin';
        if (!isset($bln)) show_404();
        $nip = $this->session->userdata('nip');
        $data['thn'] = $thn;
        $data['jns'] = $jns;
        $data['bln'] = $bln;
        $data['detail'] = $this->data_lain->getDetail($nip, $bln, $thn, $jns);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pembayaran_lainnya/detail', $data);
        $this->load->view('template/footer');
    }
}
