<?php

use Spipu\Html2Pdf\Html2Pdf;

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Data_pegawai_model', 'data_pegawai');
        $this->load->model('Data_keluarga_model', 'data_keluarga');
        $this->load->model('Data_satker_model', 'satker');
        $this->load->model('Data_unit_pegawai_model', 'unit');
        $this->load->model('Data_gaji_model', 'gaji');
        $this->load->model('Data_profil_model', 'profil');
    }

    public function index()
    {
        $nip = $this->session->userdata('nip');

        $data['pegawai'] = $this->data_pegawai->getPegawai($nip);
        $data['keluarga'] = $this->data_keluarga->getKeluarga($nip);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('beranda/index', $data);
        $this->load->view('template/footer');
    }

    public function kp4()
    {
        $bln = date('m');
        $thn = date('Y');
        $nip = $this->session->userdata('nip');
        $kdsatker = $this->unit->getPegawai($nip)['kdsatker'];

        $data['satker'] = $this->satker->getSatker($kdsatker);
        $data['pegawai'] = $this->data_pegawai->getPegawai($nip);
        $data['gaji'] = $this->gaji->getBulanGaji($nip, $bln, $thn);
        $data['keluarga'] = $this->data_keluarga->getKeluarga($nip);
        $data['profil'] = $this->profil->getProfil($kdsatker, $thn);

        ob_start();
        $this->load->view('beranda/kp4', $data);
        $html = ob_get_clean();

        $html2pdf = new Html2Pdf('P', 'A4', 'en', false, 'UTF-8', array(20, 10, 20, 10));
        $html2pdf->addFont('Arial');
        $html2pdf->pdf->SetTitle('KP4');
        $html2pdf->writeHTML($html);
        $html2pdf->output('kp4-' . $nip . '.pdf', 'D');
    }
}
