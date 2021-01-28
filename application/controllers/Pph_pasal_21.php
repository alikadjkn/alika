<?php

use Spipu\Html2Pdf\Html2Pdf;

class Pph_pasal_21 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Data_spt_pegawai_model', 'spt');
        $this->load->model('Ref_spt_tahunan_model', 'refSpt');
        $this->load->model('Data_profil_model', 'profil');
        $this->load->model('Data_unit_pegawai_model', 'unit');
        $this->load->model('Data_satker_model', 'satker');
    }

    public function index($thn = null)
    {
        if (!isset($thn)) $thn = date('Y') - 1;
        $nip = $this->session->userdata('nip');

        $data['tahun'] = $this->spt->getTahun($nip);
        $data['thn'] = $thn;
        $data['nip'] = $nip;
        $data['peg'] = $this->spt->getSptPegawai($nip, $thn);
        $data['gaji'] = $this->spt->getViewGaji($nip, $thn);
        $data['kurang'] = $this->spt->getViewKurang($nip, $thn);
        $data['tukin'] = $this->spt->getViewTukin($nip, $thn);
        $data['rapel'] = $this->spt->getViewRapel($nip, $thn);
        $data['tarif'] = $this->refSpt->getTarif($thn);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pph_pasal_21/index', $data);
        $this->load->view('template/footer');
    }

    public function download($thn = null)
    {
        if (!isset($thn)) $thn = date('Y');
        $nip = $this->session->userdata('nip');
        $kdsatker = $this->unit->getPegawai($nip)['kdsatker'];

        $data['tahun'] = $this->spt->getTahun($nip);
        $data['thn'] = $thn;
        $data['nip'] = $nip;
        $data['peg'] = $this->spt->getSptPegawai($nip, $thn);
        $data['gaji'] = $this->spt->getViewGaji($nip, $thn);
        $data['kurang'] = $this->spt->getViewKurang($nip, $thn);
        $data['tukin'] = $this->spt->getViewTukin($nip, $thn);
        $data['rapel'] = $this->spt->getViewRapel($nip, $thn);
        $data['tarif'] = $this->refSpt->getTarif($thn);
        $data['profil'] = $this->profil->getProfil($kdsatker, $thn);
        $data['satker'] = $this->satker->getSatker($kdsatker);

        ob_start();
        $this->load->view('pph_pasal_21/download', $data);
        $html = ob_get_clean();

        $html2pdf = new Html2Pdf('P', 'A4', 'en', false, 'UTF-8', array(10, 10, 10, 10));
        $html2pdf->addFont('Arial');
        $html2pdf->pdf->SetTitle('Form 1721-A2');
        $html2pdf->writeHTML($html);
        $html2pdf->output('1721A2-' . $nip . '.pdf', 'D');
    }
}
