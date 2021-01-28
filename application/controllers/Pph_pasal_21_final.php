<?php

use Spipu\Html2Pdf\Html2Pdf;

class Pph_pasal_21_final extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Data_spt_pegawai_model', 'spt');
        $this->load->model('Data_makan_model', 'makan');
        $this->load->model('Data_lembur_model', 'lembur');
        $this->load->model('Data_lain_model', 'lain');
        $this->load->model('Data_unit_pegawai_model', 'unit');
        $this->load->model('Data_profil_model', 'profil');
        $this->load->model('Data_satker_model', 'satker');
    }

    public function index($thn = null)
    {
        if (!isset($thn)) $thn = date('Y') - 1;
        $nip = $this->session->userdata('nip');
        $data['tahun'] = $this->spt->getTahun($nip);
        $data['thn'] = $thn;
        $data['spt'] = $this->spt->getSptPegawai($nip, $thn);
        $data['makan'] = $this->makan->getPph($nip, $thn);
        $data['lembur'] = $this->lembur->getPph($nip, $thn);
        $data['lain'] = $this->lain->getPph($nip, $thn);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pph_pasal_21_final/index', $data);
        $this->load->view('template/footer');
    }

    public function download_sentralisasi($thn = null)
    {
        if (!isset($thn)) $thn = date('Y');
        $nip = $this->session->userdata('nip');
        $kdsatker = '411792';

        $data['nip'] = $nip;
        $data['peg'] = $this->spt->getSptPegawai($nip, $thn);
        $data['makan'] = $this->makan->getPph($nip, $thn);
        $data['lembur'] = $this->lembur->getPph($nip, $thn);
        $data['profil'] = $this->profil->getProfil($kdsatker, $thn);
        $data['satker'] = $this->satker->getSatker($kdsatker);

        ob_start();
        $this->load->view('pph_pasal_21_final/download_sentralisasi', $data);
        $html = ob_get_clean();

        $html2pdf = new Html2Pdf('P', 'A4', 'en', false, 'UTF-8', array(10, 10, 10, 10));
        $html2pdf->addFont('Arial');
        $html2pdf->pdf->SetTitle('Form 1721-VII');
        $html2pdf->writeHTML($html);
        $html2pdf->output('1721VIISentralisasi-' . $nip . '.pdf', 'D');
    }

    public function download($thn = null)
    {
        if (!isset($thn)) $thn = date('Y');
        $nip = $this->session->userdata('nip');
        $kdsatker = $this->unit->getPegawai($nip)['kdsatker'];

        $data['nip'] = $nip;
        $data['lain'] = $this->lain->getPph($nip, $thn);
        $data['peg'] = $this->spt->getSptPegawai($nip, $thn);
        $data['profil'] = $this->profil->getProfil($kdsatker, $thn);
        $data['satker'] = $this->satker->getSatker($kdsatker);

        ob_start();
        $this->load->view('pph_pasal_21_final/download', $data);
        $html = ob_get_clean();

        $html2pdf = new Html2Pdf('P', 'A4', 'en', false, 'UTF-8', array(10, 10, 10, 10));
        $html2pdf->addFont('Arial');
        $html2pdf->pdf->SetTitle('Form 1721-VII');
        $html2pdf->writeHTML($html);
        $html2pdf->output('1721VII-' . $nip . '.pdf', 'D');
    }
}
