<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api2 extends RestController
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_tukin_model', 'data_tukin'); //1
        $this->load->model('Data_lain_model', 'data_lain'); //2
        $this->load->model('Data_satker_model', 'data_satker'); //3
        $this->load->model('Data_profil_model', 'data_profil'); //4
        $this->load->model('Data_spt_pegawai_model', 'data_spt_pegawai'); //5
        $this->load->model('Data_unit_pegawai_model', 'data_unit_pegawai'); //6
        $this->load->model('Ref_spt_tahunan_model', 'ref_spt_tahunan'); //7
        $this->load->model('Ref_jabatan_model', 'ref_jabatan'); //8
        $this->load->model('Ref_pangkat_model', 'ref_pangkat'); //9
        $this->load->model('User_model', 'user'); //10
    }

    // -----------------------------------
    // data_tukin (1)
    // -----------------------------------

    public function count_data_tukin_get()
    {
        $data = $this->data_tukin->countDataTukin();
        $this->response($data, 200);
    }

    public function data_tukin_get()
    {
        $id = $this->get('id');
        $keyword1 = $this->get('keyword1');
        $keyword2 = $this->get('keyword2');
        $limit = $this->get('limit');
        $offset = $this->get('offset');
        if ($keyword1) {
            $data = $this->data_tukin->findDataTukin($keyword1, $keyword2, $limit, $offset);
        } else {
            $data = $this->data_tukin->getDataTukin($id, $limit, $offset);
        }
        $this->response($data, 200);
    }

    public function data_tukin_post()
    {
        $data = [
            'bulan' => $this->post('bulan'),
            'tahun' => $this->post('tahun'),
            'kdsatker' => $this->post('kdsatker'),
            'nip' => $this->post('nip'),
            'grade' => $this->post('grade'),
            'tjpokok' => $this->post('tjpokok'),
            'tjtamb' => $this->post('tjtamb'),
            'abspotr' => $this->post('abspotr'),
            'abspotp' => $this->post('abspotp'),
            'tkpph' => $this->post('tkpph'),
            'p1' => $this->post('p1'),
            'p2' => $this->post('p2'),
            'p3' => $this->post('p3'),
            'p4' => $this->post('p4'),
            'p5' => $this->post('p5'),
            'p6' => $this->post('p6'),
            'p7' => $this->post('p7'),
            'p8' => $this->post('p8'),
            'p9' => $this->post('p9'),
            'p10' => $this->post('p10'),
            'p11' => $this->post('p11'),
            'p12' => $this->post('p12'),
            'p13' => $this->post('p13'),
            'p14' => $this->post('p14'),
            'p15' => $this->post('p15'),
            'p16' => $this->post('p16'),
            'p17' => $this->post('p17'),
            'p18' => $this->post('p18'),
            'p19' => $this->post('p19'),
            'p20' => $this->post('p20'),
            'p21' => $this->post('p21'),
            'p22' => $this->post('p22')
        ];
        if ($this->post('nip') === null | $this->post('nip') === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were added'
            ], 404);
        } else {
            $this->data_tukin->createDataTukin($data);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully added'
            ], 200);
        }
    }

    public function data_tukin_put()
    {
        $id = $this->put('id');
        $data = [
            'bulan' => $this->put('bulan'),
            'tahun' => $this->put('tahun'),
            'kdsatker' => $this->put('kdsatker'),
            'nip' => $this->put('nip'),
            'grade' => $this->put('grade'),
            'tjpokok' => $this->put('tjpokok'),
            'tjtamb' => $this->put('tjtamb'),
            'abspotr' => $this->put('abspotr'),
            'abspotp' => $this->put('abspotp'),
            'tkpph' => $this->put('tkpph'),
            'p1' => $this->put('p1'),
            'p2' => $this->put('p2'),
            'p3' => $this->put('p3'),
            'p4' => $this->put('p4'),
            'p5' => $this->put('p5'),
            'p6' => $this->put('p6'),
            'p7' => $this->put('p7'),
            'p8' => $this->put('p8'),
            'p9' => $this->put('p9'),
            'p10' => $this->put('p10'),
            'p11' => $this->put('p11'),
            'p12' => $this->put('p12'),
            'p13' => $this->put('p13'),
            'p14' => $this->put('p14'),
            'p15' => $this->put('p15'),
            'p16' => $this->put('p16'),
            'p17' => $this->put('p17'),
            'p18' => $this->put('p18'),
            'p19' => $this->put('p19'),
            'p20' => $this->put('p20'),
            'p21' => $this->put('p21'),
            'p22' => $this->put('p22')
        ];
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were changed'
            ], 404);
        } else {
            $this->data_tukin->updateDataTukin($data, $id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully changed'
            ], 200);
        }
    }

    public function data_tukin_delete()
    {
        $id = $this->delete('id');
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were deleted'
            ], 404);
        } else {
            $this->data_tukin->deleteDataTukin($id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully deleted'
            ], 200);
        }
    }

    // -----------------------------------
    // data_lain (2)
    // -----------------------------------

    public function count_data_lain_get()
    {
        $data = $this->data_lain->countDataLain();
        $this->response($data, 200);
    }

    public function data_lain_get()
    {
        $id = $this->get('id');
        $keyword1 = $this->get('keyword1');
        $keyword2 = $this->get('keyword2');
        $limit = $this->get('limit');
        $offset = $this->get('offset');
        if ($keyword1) {
            $data = $this->data_lain->findDataLain($keyword1, $keyword2, $limit, $offset);
        } else {
            $data = $this->data_lain->getDataLain($id, $limit, $offset);
        }
        $this->response($data, 200);
    }

    public function data_lain_post()
    {
        $data = [
            'bulan' => $this->post('bulan'),
            'tahun' => $this->post('tahun'),
            'kdsatker' => $this->post('kdsatker'),
            'nip' => $this->post('nip'),
            'bruto' => $this->post('bruto'),
            'pph' => $this->post('pph'),
            'netto' => $this->post('netto'),
            'jenis' => $this->post('jenis'),
            'uraian' => $this->post('uraian'),
            'tanggal' => $this->post('tanggal'),
            'nospm' => $this->post('nospm')
        ];
        if ($this->post('nip') === null | $this->post('nip') === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were added'
            ], 404);
        } else {
            $this->data_lain->createDataLain($data);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully added'
            ], 200);
        }
    }

    public function data_lain_put()
    {
        $id = $this->put('id');
        $data = [
            'bulan' => $this->put('bulan'),
            'tahun' => $this->put('tahun'),
            'kdsatker' => $this->put('kdsatker'),
            'nip' => $this->put('nip'),
            'bruto' => $this->put('bruto'),
            'pph' => $this->put('pph'),
            'netto' => $this->put('netto'),
            'jenis' => $this->put('jenis'),
            'uraian' => $this->put('uraian'),
            'tanggal' => $this->put('tanggal'),
            'nospm' => $this->put('nospm')
        ];
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were changed'
            ], 404);
        } else {
            $this->data_lain->updateDataLain($data, $id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully changed'
            ], 200);
        }
    }

    public function data_lain_delete()
    {
        $id = $this->delete('id');
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were deleted'
            ], 404);
        } else {
            $this->data_lain->deleteDataLain($id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully deleted'
            ], 200);
        }
    }

    // -----------------------------------
    // data_satker (3)
    // -----------------------------------

    public function count_data_satker_get()
    {
        $data = $this->data_satker->countDataSatker();
        $this->response($data, 200);
    }

    public function data_satker_get()
    {
        $id = $this->get('id');
        $keyword = $this->get('keyword');
        $limit = $this->get('limit');
        $offset = $this->get('offset');
        if ($keyword) {
            $data = $this->data_satker->findDataSatker($keyword, $limit, $offset);
        } else {
            $data = $this->data_satker->getDataSatker($id, $limit, $offset);
        }
        $this->response($data, 200);
    }

    public function data_satker_post()
    {
        $data = [
            'kdsatker' => $this->post('kdsatker'),
            'nmsatker' => $this->post('nmsatker'),
            'header1' => $this->post('header1'),
            'header2' => $this->post('header2'),
            'subheader1' => $this->post('subheader1'),
            'subheader2' => $this->post('subheader2'),
            'subheader3' => $this->post('subheader3')
        ];
        if ($this->post('kdsatker') === null | $this->post('kdsatker') === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were added'
            ], 404);
        } else {
            $this->data_satker->createDataSatker($data);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully added'
            ], 200);
        }
    }

    public function data_satker_put()
    {
        $id = $this->put('id');
        $data = [
            'kdsatker' => $this->put('kdsatker'),
            'nmsatker' => $this->put('nmsatker'),
            'header1' => $this->put('header1'),
            'header2' => $this->put('header2'),
            'subheader1' => $this->put('subheader1'),
            'subheader2' => $this->put('subheader2'),
            'subheader3' => $this->put('subheader3')
        ];
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were changed'
            ], 404);
        } else {
            $this->data_satker->updateDataSatker($data, $id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully changed'
            ], 200);
        }
    }

    public function data_satker_delete()
    {
        $id = $this->delete('id');
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were deleted'
            ], 404);
        } else {
            $this->data_satker->deleteDataSatker($id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully deleted'
            ], 200);
        }
    }

    // -----------------------------------
    // data_profil (4)
    // -----------------------------------

    public function count_data_profil_get()
    {
        $data = $this->data_profil->countDataProfil();
        $this->response($data, 200);
    }

    public function data_profil_get()
    {
        $id = $this->get('id');
        $keyword = $this->get('keyword');
        $limit = $this->get('limit');
        $offset = $this->get('offset');
        if ($keyword) {
            $data = $this->data_profil->findDataProfil($keyword, $limit, $offset);
        } else {
            $data = $this->data_profil->getDataProfil($id, $limit, $offset);
        }
        $this->response($data, 200);
    }

    public function data_profil_post()
    {
        $data = [
            'tahun' => $this->post('tahun'),
            'kdsatker' => $this->post('kdsatker'),
            'no_skp' => $this->post('no_skp'),
            'nama_ttd_skp' => $this->post('nama_ttd_skp'),
            'nip_ttd_skp' => $this->post('nip_ttd_skp'),
            'jab_ttd_skp' => $this->post('jab_ttd_skp'),
            'nama_ttd_kp4' => $this->post('nama_ttd_kp4'),
            'nip_ttd_kp4' => $this->post('nip_ttd_kp4'),
            'jab_ttd_kp4' => $this->post('jab_ttd_kp4'),
            'npwp_bendahara' => $this->post('npwp_bendahara'),
            'nama_bendahara' => $this->post('nama_bendahara'),
            'nip_bendahara' => $this->post('nip_bendahara'),
            'tgl_spt' => $this->post('tgl_spt'),
            'file' => $this->post('file')
        ];
        if ($this->post('kdsatker') === null | $this->post('kdsatker') === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were added'
            ], 404);
        } else {
            $this->data_profil->createDataProfil($data);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully added'
            ], 200);
        }
    }

    public function data_profil_put()
    {
        $id = $this->put('id');
        $data = [
            'tahun' => $this->put('tahun'),
            'kdsatker' => $this->put('kdsatker'),
            'no_skp' => $this->put('no_skp'),
            'nama_ttd_skp' => $this->put('nama_ttd_skp'),
            'nip_ttd_skp' => $this->put('nip_ttd_skp'),
            'jab_ttd_skp' => $this->put('jab_ttd_skp'),
            'nama_ttd_kp4' => $this->put('nama_ttd_kp4'),
            'nip_ttd_kp4' => $this->put('nip_ttd_kp4'),
            'jab_ttd_kp4' => $this->put('jab_ttd_kp4'),
            'npwp_bendahara' => $this->put('npwp_bendahara'),
            'nama_bendahara' => $this->put('nama_bendahara'),
            'nip_bendahara' => $this->put('nip_bendahara'),
            'tgl_spt' => $this->put('tgl_spt'),
            'file' => $this->put('file')
        ];
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were changed'
            ], 404);
        } else {
            $this->data_profil->updateDataProfil($data, $id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully changed'
            ], 200);
        }
    }

    public function data_profil_delete()
    {
        $id = $this->delete('id');
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were deleted'
            ], 404);
        } else {
            $this->data_profil->deleteDataProfil($id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully deleted'
            ], 200);
        }
    }

    // -----------------------------------
    // data_spt_pegawai (5)
    // -----------------------------------

    public function count_data_spt_pegawai_get()
    {
        $data = $this->data_spt_pegawai->countDataSptPegawai();
        $this->response($data, 200);
    }

    public function data_spt_pegawai_get()
    {
        $id = $this->get('id');
        $keyword = $this->get('keyword');
        $limit = $this->get('limit');
        $offset = $this->get('offset');
        if ($keyword) {
            $data = $this->data_spt_pegawai->findDataSptPegawai($keyword, $limit, $offset);
        } else {
            $data = $this->data_spt_pegawai->getDataSptPegawai($id, $limit, $offset);
        }
        $this->response($data, 200);
    }

    public function data_spt_pegawai_post()
    {
        $data = [
            'kdsatker' => $this->post('kdsatker'),
            'tahun' => $this->post('tahun'),
            'nip' => $this->post('nip'),
            'npwp' => $this->post('npwp'),
            'kdgol' => $this->post('kdgol'),
            'alamat' => $this->post('alamat'),
            'kdkawin' => $this->post('kdkawin'),
            'kdjab' => $this->post('kdjab'),
            'nourut' => $this->post('nourut')
        ];
        if ($this->post('kdsatker') === null | $this->post('kdsatker') === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were added'
            ], 404);
        } else {
            $this->data_spt_pegawai->createDataSptPegawai($data);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully added'
            ], 200);
        }
    }

    public function data_spt_pegawai_put()
    {
        $id = $this->put('id');
        $data = [
            'kdsatker' => $this->put('kdsatker'),
            'tahun' => $this->put('tahun'),
            'nip' => $this->put('nip'),
            'npwp' => $this->put('npwp'),
            'kdgol' => $this->put('kdgol'),
            'alamat' => $this->put('alamat'),
            'kdkawin' => $this->put('kdkawin'),
            'kdjab' => $this->put('kdjab'),
            'nourut' => $this->put('nourut')
        ];
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were changed'
            ], 404);
        } else {
            $this->data_spt_pegawai->updateDataSptPegawai($data, $id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully changed'
            ], 200);
        }
    }

    public function data_spt_pegawai_delete()
    {
        $id = $this->delete('id');
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were deleted'
            ], 404);
        } else {
            $this->data_spt_pegawai->deleteDataSptPegawai($id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully deleted'
            ], 200);
        }
    }

    // -----------------------------------
    // data_unit_pegawai (6)
    // -----------------------------------

    public function count_data_unit_pegawai_get()
    {
        $data = $this->data_unit_pegawai->countDataUnitPegawai();
        $this->response($data, 200);
    }

    public function data_unit_pegawai_get()
    {
        $id = $this->get('id');
        $keyword = $this->get('keyword');
        $limit = $this->get('limit');
        $offset = $this->get('offset');
        if ($keyword) {
            $data = $this->data_unit_pegawai->findDataUnitPegawai($keyword, $limit, $offset);
        } else {
            $data = $this->data_unit_pegawai->getDataUnitPegawai($id, $limit, $offset);
        }
        $this->response($data, 200);
    }

    public function data_unit_pegawai_post()
    {
        $data = [
            'kdsatker' => $this->post('kdsatker'),
            'nip' => $this->post('nip'),
            'nama' => $this->post('nama')
        ];
        if ($this->post('kdsatker') === null | $this->post('kdsatker') === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were added'
            ], 404);
        } else {
            $this->data_unit_pegawai->createDataUnitPegawai($data);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully added'
            ], 200);
        }
    }

    public function data_unit_pegawai_put()
    {
        $id = $this->put('id');
        $data = [
            'kdsatker' => $this->put('kdsatker'),
            'nip' => $this->put('nip'),
            'nama' => $this->put('nama')
        ];
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were changed'
            ], 404);
        } else {
            $this->data_unit_pegawai->updateDataUnitPegawai($data, $id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully changed'
            ], 200);
        }
    }

    public function data_unit_pegawai_delete()
    {
        $id = $this->delete('id');
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were deleted'
            ], 404);
        } else {
            $this->data_unit_pegawai->deleteDataUnitPegawai($id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully deleted'
            ], 200);
        }
    }

    // -----------------------------------
    // ref_spt_tahunan (7)
    // -----------------------------------

    public function count_ref_spt_tahunan_get()
    {
        $data = $this->ref_spt_tahunan->countRefSptTahunan();
        $this->response($data, 200);
    }

    public function ref_spt_tahunan_get()
    {
        $id = $this->get('id');
        $keyword = $this->get('keyword');
        $limit = $this->get('limit');
        $offset = $this->get('offset');
        if ($keyword) {
            $data = $this->ref_spt_tahunan->findRefSptTahunan($keyword, $limit, $offset);
        } else {
            $data = $this->ref_spt_tahunan->getRefSptTahunan($id, $limit, $offset);
        }
        $this->response($data, 200);
    }

    public function ref_spt_tahunan_post()
    {
        $data = [
            'tahun' => $this->post('tahun'),
            'ptkp_wp' => $this->post('ptkp_wp'),
            'ptkp_istri' => $this->post('ptkp_istri'),
            'ptkp_anak' => $this->post('ptkp_anak'),
            'iuran_pensiun' => $this->post('iuran_pensiun'),
            'biaya_jabatan' => $this->post('biaya_jabatan'),
            'biaya_jabatan_maks' => $this->post('biaya_jabatan_maks'),
            'pph_tarif_1' => $this->post('pph_tarif_1'),
            'pph_tarif_2' => $this->post('pph_tarif_2'),
            'pph_tarif_3' => $this->post('pph_tarif_3'),
            'pph_tarif_4' => $this->post('pph_tarif_4'),
            'pph_limit_1' => $this->post('pph_limit_1'),
            'pph_limit_2' => $this->post('pph_limit_2'),
            'pph_limit_3' => $this->post('pph_limit_3')
        ];
        if ($this->post('tahun') === null | $this->post('tahun') === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were added'
            ], 404);
        } else {
            $this->ref_spt_tahunan->createRefSptTahunan($data);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully added'
            ], 200);
        }
    }

    public function ref_spt_tahunan_put()
    {
        $id = $this->put('id');
        $data = [
            'tahun' => $this->put('tahun'),
            'ptkp_wp' => $this->put('ptkp_wp'),
            'ptkp_istri' => $this->put('ptkp_istri'),
            'ptkp_anak' => $this->put('ptkp_anak'),
            'iuran_pensiun' => $this->put('iuran_pensiun'),
            'biaya_jabatan' => $this->put('biaya_jabatan'),
            'biaya_jabatan_maks' => $this->put('biaya_jabatan_maks'),
            'pph_tarif_1' => $this->put('pph_tarif_1'),
            'pph_tarif_2' => $this->put('pph_tarif_2'),
            'pph_tarif_3' => $this->put('pph_tarif_3'),
            'pph_tarif_4' => $this->put('pph_tarif_4'),
            'pph_limit_1' => $this->put('pph_limit_1'),
            'pph_limit_2' => $this->put('pph_limit_2'),
            'pph_limit_3' => $this->put('pph_limit_3')
        ];
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were changed'
            ], 404);
        } else {
            $this->ref_spt_tahunan->updateRefSptTahunan($data, $id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully changed'
            ], 200);
        }
    }

    public function ref_spt_tahunan_delete()
    {
        $id = $this->delete('id');
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were deleted'
            ], 404);
        } else {
            $this->ref_spt_tahunan->deleteRefSptTahunan($id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully deleted'
            ], 200);
        }
    }

    // -----------------------------------
    // ref_jabatan (8)
    // -----------------------------------

    public function count_ref_jabatan_get()
    {
        $data = $this->ref_jabatan->countRefJabatan();
        $this->response($data, 200);
    }

    public function ref_jabatan_get()
    {
        $id = $this->get('id');
        $keyword = $this->get('keyword');
        $limit = $this->get('limit');
        $offset = $this->get('offset');
        if ($keyword) {
            $data = $this->ref_jabatan->findRefJabatan($keyword, $limit, $offset);
        } else {
            $data = $this->ref_jabatan->getRefJabatan($id, $limit, $offset);
        }
        $this->response($data, 200);
    }

    public function ref_jabatan_post()
    {
        $data = [
            'kode' => $this->post('kode'),
            'nama' => $this->post('nama')
        ];
        if ($this->post('nama') === null | $this->post('nama') === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were added'
            ], 404);
        } else {
            $this->ref_jabatan->createRefJabatan($data);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully added'
            ], 200);
        }
    }

    public function ref_jabatan_put()
    {
        $id = $this->put('id');
        $data = [
            'kode' => $this->put('kode'),
            'nama' => $this->put('nama')
        ];
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were changed'
            ], 404);
        } else {
            $this->ref_jabatan->updateRefJabatan($data, $id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully changed'
            ], 200);
        }
    }

    public function ref_jabatan_delete()
    {
        $id = $this->delete('id');
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were deleted'
            ], 404);
        } else {
            $this->ref_jabatan->deleteRefJabatan($id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully deleted'
            ], 200);
        }
    }

    // -----------------------------------
    // ref_pangkat (9)
    // -----------------------------------

    public function count_ref_pangkat_get()
    {
        $data = $this->ref_pangkat->countRefPangkat();
        $this->response($data, 200);
    }

    public function ref_pangkat_get()
    {
        $id = $this->get('id');
        $keyword = $this->get('keyword');
        $limit = $this->get('limit');
        $offset = $this->get('offset');
        if ($keyword) {
            $data = $this->ref_pangkat->findRefPangkat($keyword, $limit, $offset);
        } else {
            $data = $this->ref_pangkat->getRefPangkat($id, $limit, $offset);
        }
        $this->response($data, 200);
    }

    public function ref_pangkat_post()
    {
        $data = [
            'kdgol' => $this->post('kdgol'),
            'nmgol' => $this->post('nmgol'),
            'kdgapok' => $this->post('kdgapok'),
            'nama' => $this->post('nama')
        ];
        if ($this->post('nama') === null | $this->post('nama') === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were added'
            ], 404);
        } else {
            $this->ref_pangkat->createRefPangkat($data);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully added'
            ], 200);
        }
    }

    public function ref_pangkat_put()
    {
        $id = $this->put('id');
        $data = [
            'kdgol' => $this->put('kdgol'),
            'nmgol' => $this->put('nmgol'),
            'kdgapok' => $this->put('kdgapok'),
            'nama' => $this->put('nama')
        ];
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were changed'
            ], 404);
        } else {
            $this->ref_pangkat->updateRefPangkat($data, $id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully changed'
            ], 200);
        }
    }

    public function ref_pangkat_delete()
    {
        $id = $this->delete('id');
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were deleted'
            ], 404);
        } else {
            $this->ref_pangkat->deleteRefPangkat($id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully deleted'
            ], 200);
        }
    }

    // -----------------------------------
    // ref_user (10)
    // -----------------------------------

    public function count_user_get()
    {
        $data = $this->user->countUser();
        $this->response($data, 200);
    }

    public function user_get()
    {
        $id = $this->get('id');
        $keyword = $this->get('keyword');
        $limit = $this->get('limit');
        $offset = $this->get('offset');
        if ($keyword) {
            $data = $this->user->findUser($keyword, $limit, $offset);
        } else {
            $data = $this->user->getUser($id, $limit, $offset);
        }
        $this->response($data, 200);
    }

    public function user_post()
    {
        $data = [
            'nip' => $this->post('nip'),
            'nama' => $this->post('nama'),
            'email' => $this->post('email'),
            'password' => $this->post('password'),
            'is_active' => $this->post('is_active'),
            'date_created' => $this->post('date_created')
        ];
        if ($this->post('nip') === null | $this->post('nip') === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were added'
            ], 404);
        } else {
            $this->user->createUser($data);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully added'
            ], 200);
        }
    }

    public function user_put()
    {
        $id = $this->put('id');
        $data = [
            'nip' => $this->put('nip'),
            'nama' => $this->put('nama'),
            'email' => $this->put('email'),
            'password' => $this->put('password'),
            'is_active' => $this->put('is_active'),
            'date_created' => $this->put('date_created')
        ];
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were changed'
            ], 404);
        } else {
            $this->user->updateUser($data, $id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully changed'
            ], 200);
        }
    }

    public function user_delete()
    {
        $id = $this->delete('id');
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were deleted'
            ], 404);
        } else {
            $this->user->deleteUser($id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully deleted'
            ], 200);
        }
    }
}
