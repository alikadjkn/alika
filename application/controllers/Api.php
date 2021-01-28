<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_gaji_model', 'data_gaji');
        $this->load->model('Data_kurang_model', 'data_kurang');
        $this->load->model('Data_makan_model', 'data_makan');
        $this->load->model('Data_lembur_model', 'data_lembur');
        $this->load->model('Data_pegawai_model', 'data_pegawai');
        $this->load->model('Data_keluarga_model', 'data_keluarga');
        $this->load->model('Data_perubahan_model', 'data_perubahan');
    }

    // -----------------------------------
    // data_gaji (1)
    // -----------------------------------
    public function count_data_gaji_get()
    {
        $data = $this->data_gaji->countDataGaji();
        $this->response($data, 200);
    }

    public function data_gaji_get()
    {
        $id = $this->get('id');
        $keyword1 = $this->get('keyword1');
        $keyword2 = $this->get('keyword2');
        $limit = $this->get('limit');
        $offset = $this->get('offset');
        if ($keyword1) {
            $data = $this->data_gaji->findDataGaji($keyword1, $keyword2, $limit, $offset);
        } else {
            $data = $this->data_gaji->getDataGaji($id, $limit, $offset);
        }
        $this->response($data, 200);
    }

    public function data_gaji_post()
    {
        $data = [
            'kdjns' => $this->post('kdjns'),
            'kdsatker' => $this->post('kdsatker'),
            'kdanak' => $this->post('kdanak'),
            'kdsubanak' => $this->post('kdsubanak'),
            'kdkawin' => $this->post('kdkawin'),
            'kdgapok' => $this->post('kdgapok'),
            'kdjab' => $this->post('kdjab'),
            'bulan' => $this->post('bulan'),
            'tahun' => $this->post('tahun'),
            'nip' => $this->post('nip'),
            'gapok' => $this->post('gapok'),
            'tistri' => $this->post('tistri'),
            'tanak' => $this->post('tanak'),
            'tumum' => $this->post('tumum'),
            'ttambumum' => $this->post('ttambumum'),
            'tstruktur' => $this->post('tstruktur'),
            'tfungsi' => $this->post('tfungsi'),
            'bulat' => $this->post('bulat'),
            'tberas' => $this->post('tberas'),
            'tpajak' => $this->post('tpajak'),
            'pberas' => $this->post('pberas'),
            'tpapua' => $this->post('tpapua'),
            'tpencil' => $this->post('tpencil'),
            'tlain' => $this->post('tlain'),
            'iwp' => $this->post('iwp'),
            'pph' => $this->post('pph'),
            'sewarmh' => $this->post('sewarmh'),
            'tunggakan' => $this->post('tunggakan'),
            'utanglebih' => $this->post('utanglebih'),
            'potlain' => $this->post('potlain'),
            'taperum' => $this->post('taperum'),
            'bpjs' => $this->post('bpjs')
        ];
        if ($this->post('nip') === null | $this->post('nip') === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were added'
            ], 404);
        } else {
            $this->data_gaji->createDataGaji($data);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully added'
            ], 200);
        }
    }

    public function data_gaji_put()
    {
        $id = $this->put('id');
        $data = [
            'kdjns' => $this->put('kdjns'),
            'kdsatker' => $this->put('kdsatker'),
            'kdanak' => $this->put('kdanak'),
            'kdsubanak' => $this->put('kdsubanak'),
            'kdkawin' => $this->put('kdkawin'),
            'kdgapok' => $this->put('kdgapok'),
            'kdjab' => $this->put('kdjab'),
            'bulan' => $this->put('bulan'),
            'tahun' => $this->put('tahun'),
            'nip' => $this->put('nip'),
            'gapok' => $this->put('gapok'),
            'tistri' => $this->put('tistri'),
            'tanak' => $this->put('tanak'),
            'tumum' => $this->put('tumum'),
            'ttambumum' => $this->put('ttambumum'),
            'tstruktur' => $this->put('tstruktur'),
            'tfungsi' => $this->put('tfungsi'),
            'bulat' => $this->put('bulat'),
            'tberas' => $this->put('tberas'),
            'tpajak' => $this->put('tpajak'),
            'pberas' => $this->put('pberas'),
            'tpapua' => $this->put('tpapua'),
            'tpencil' => $this->put('tpencil'),
            'tlain' => $this->put('tlain'),
            'iwp' => $this->put('iwp'),
            'pph' => $this->put('pph'),
            'sewarmh' => $this->put('sewarmh'),
            'tunggakan' => $this->put('tunggakan'),
            'utanglebih' => $this->put('utanglebih'),
            'potlain' => $this->put('potlain'),
            'taperum' => $this->put('taperum'),
            'bpjs' => $this->put('bpjs')
        ];
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were changed'
            ], 404);
        } else {
            $this->data_gaji->updateDataGaji($data, $id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully changed'
            ], 200);
        }
    }

    public function data_gaji_delete()
    {
        $id = $this->delete('id');
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were deleted'
            ], 404);
        } else {
            $this->data_gaji->deleteDataGaji($id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully deleted'
            ], 200);
        }
    }

    // -----------------------------------
    // data_kurang (2)
    // -----------------------------------
    public function count_data_kurang_get()
    {
        $data = $this->data_kurang->countDataKurang();
        $this->response($data, 200);
    }

    public function data_kurang_get()
    {
        $id = $this->get('id');
        $keyword1 = $this->get('keyword1');
        $keyword2 = $this->get('keyword2');
        $limit = $this->get('limit');
        $offset = $this->get('offset');
        if ($keyword1) {
            $data = $this->data_kurang->findDataKurang($keyword1, $keyword2, $limit, $offset);
        } else {
            $data = $this->data_kurang->getDataKurang($id, $limit, $offset);
        }
        $this->response($data, 200);
    }

    public function data_kurang_post()
    {
        $data = [
            'kdjns' => $this->post('kdjns'),
            'kdsatker' => $this->post('kdsatker'),
            'kdanak' => $this->post('kdanak'),
            'kdsubanak' => $this->post('kdsubanak'),
            'kdkawin' => $this->post('kdkawin'),
            'kdgapok' => $this->post('kdgapok'),
            'kdjab' => $this->post('kdjab'),
            'bulan' => $this->post('bulan'),
            'tahun' => $this->post('tahun'),
            'nip' => $this->post('nip'),
            'gapok' => $this->post('gapok'),
            'tistri' => $this->post('tistri'),
            'tanak' => $this->post('tanak'),
            'tumum' => $this->post('tumum'),
            'ttambumum' => $this->post('ttambumum'),
            'tstruktur' => $this->post('tstruktur'),
            'tfungsi' => $this->post('tfungsi'),
            'bulat' => $this->post('bulat'),
            'tberas' => $this->post('tberas'),
            'tpajak' => $this->post('tpajak'),
            'pberas' => $this->post('pberas'),
            'tpapua' => $this->post('tpapua'),
            'tpencil' => $this->post('tpencil'),
            'tlain' => $this->post('tlain'),
            'iwp' => $this->post('iwp'),
            'pph' => $this->post('pph'),
            'sewarmh' => $this->post('sewarmh'),
            'tunggakan' => $this->post('tunggakan'),
            'utanglebih' => $this->post('utanglebih'),
            'potlain' => $this->post('potlain'),
            'taperum' => $this->post('taperum'),
            'bpjs' => $this->post('bpjs')
        ];
        if ($this->post('nip') === null | $this->post('nip') === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were added'
            ], 404);
        } else {
            $this->data_kurang->createDataKurang($data);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully added'
            ], 200);
        }
    }

    public function data_kurang_put()
    {
        $id = $this->put('id');
        $data = [
            'kdjns' => $this->put('kdjns'),
            'kdsatker' => $this->put('kdsatker'),
            'kdanak' => $this->put('kdanak'),
            'kdsubanak' => $this->put('kdsubanak'),
            'kdkawin' => $this->put('kdkawin'),
            'kdgapok' => $this->put('kdgapok'),
            'kdjab' => $this->put('kdjab'),
            'bulan' => $this->put('bulan'),
            'tahun' => $this->put('tahun'),
            'nip' => $this->put('nip'),
            'gapok' => $this->put('gapok'),
            'tistri' => $this->put('tistri'),
            'tanak' => $this->put('tanak'),
            'tumum' => $this->put('tumum'),
            'ttambumum' => $this->put('ttambumum'),
            'tstruktur' => $this->put('tstruktur'),
            'tfungsi' => $this->put('tfungsi'),
            'bulat' => $this->put('bulat'),
            'tberas' => $this->put('tberas'),
            'tpajak' => $this->put('tpajak'),
            'pberas' => $this->put('pberas'),
            'tpapua' => $this->put('tpapua'),
            'tpencil' => $this->put('tpencil'),
            'tlain' => $this->put('tlain'),
            'iwp' => $this->put('iwp'),
            'pph' => $this->put('pph'),
            'sewarmh' => $this->put('sewarmh'),
            'tunggakan' => $this->put('tunggakan'),
            'utanglebih' => $this->put('utanglebih'),
            'potlain' => $this->put('potlain'),
            'taperum' => $this->put('taperum'),
            'bpjs' => $this->put('bpjs')
        ];
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were changed'
            ], 404);
        } else {
            $this->data_kurang->updateDataKurang($data, $id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully changed'
            ], 200);
        }
    }

    public function data_kurang_delete()
    {
        $id = $this->delete('id');
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were deleted'
            ], 404);
        } else {
            $this->data_kurang->deleteDataKurang($id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully deleted'
            ], 200);
        }
    }

    // -----------------------------------
    // data_makan (3)
    // -----------------------------------
    public function count_data_makan_get()
    {
        $data = $this->data_makan->countDataMakan();
        $this->response($data, 200);
    }

    public function data_makan_get()
    {
        $id = $this->get('id');
        $keyword1 = $this->get('keyword1');
        $keyword2 = $this->get('keyword2');
        $limit = $this->get('limit');
        $offset = $this->get('offset');
        if ($keyword1) {
            $data = $this->data_makan->findDataMakan($keyword1, $keyword2, $limit, $offset);
        } else {
            $data = $this->data_makan->getDataMakan($id, $limit, $offset);
        }
        $this->response($data, 200);
    }

    public function data_makan_post()
    {
        $data = [
            'nip' => $this->post('nip'),
            'bulan' => $this->post('bulan'),
            'tahun' => $this->post('tahun'),
            'kdsatker' => $this->post('kdsatker'),
            'kdanak' => $this->post('kdanak'),
            'kdsubanak' => $this->post('kdsubanak'),
            'kdgol' => $this->post('kdgol'),
            'jmlhari' => $this->post('jmlhari'),
            'tarif' => $this->post('tarif'),
            'pph' => $this->post('pph'),
            'bruto' => $this->post('bruto'),
            'netto' => $this->post('netto')
        ];
        if ($this->post('nip') === null | $this->post('nip') === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were added'
            ], 404);
        } else {
            $this->data_makan->createDataMakan($data);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully added'
            ], 200);
        }
    }

    public function data_makan_put()
    {
        $id = $this->put('id');
        $data = [
            'nip' => $this->put('nip'),
            'bulan' => $this->put('bulan'),
            'tahun' => $this->put('tahun'),
            'kdsatker' => $this->put('kdsatker'),
            'kdanak' => $this->put('kdanak'),
            'kdsubanak' => $this->put('kdsubanak'),
            'kdgol' => $this->put('kdgol'),
            'jmlhari' => $this->put('jmlhari'),
            'tarif' => $this->put('tarif'),
            'pph' => $this->put('pph'),
            'bruto' => $this->put('bruto'),
            'netto' => $this->put('netto')
        ];
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were changed'
            ], 404);
        } else {
            $this->data_makan->updateDataMakan($data, $id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully changed'
            ], 200);
        }
    }

    public function data_makan_delete()
    {
        $id = $this->delete('id');
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were deleted'
            ], 404);
        } else {
            $this->data_makan->deleteDataMakan($id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully deleted'
            ], 200);
        }
    }

    // -----------------------------------
    // data_lembur (4)
    // -----------------------------------
    public function count_data_lembur_get()
    {
        $data = $this->data_lembur->countDataLembur();
        $this->response($data, 200);
    }

    public function data_lembur_get()
    {
        $id = $this->get('id');
        $keyword1 = $this->get('keyword1');
        $keyword2 = $this->get('keyword2');
        $limit = $this->get('limit');
        $offset = $this->get('offset');
        if ($keyword1) {
            $data = $this->data_lembur->findDataLembur($keyword1, $keyword2, $limit, $offset);
        } else {
            $data = $this->data_lembur->getDataLembur($id, $limit, $offset);
        }
        $this->response($data, 200);
    }

    public function data_lembur_post()
    {
        $data = [
            'bulan' => $this->post('bulan'),
            'tahun' => $this->post('tahun'),
            'kdsatker' => $this->post('kdsatker'),
            'kdanak' => $this->post('kdanak'),
            'nip' => $this->post('nip'),
            'gol' => $this->post('gol'),
            'lembur' => $this->post('lembur'),
            'makan' => $this->post('makan'),
            'pph' => $this->post('pph'),
            'bruto' => $this->post('bruto'),
            'netto' => $this->post('netto'),
            'keterangan' => $this->post('keterangan'),
            'jhari1' => $this->post('jhari1'),
            'jhari2' => $this->post('jhari2'),
            'jhari3' => $this->post('jhari3'),
            'jhari4' => $this->post('jhari4'),
            'jhari5' => $this->post('jhari5'),
            'jhari6' => $this->post('jhari6'),
            'jhari7' => $this->post('jhari7'),
            'jhari8' => $this->post('jhari8'),
            'jhari9' => $this->post('jhari9'),
            'jhari10' => $this->post('jhari10'),
            'jhari11' => $this->post('jhari11'),
            'jhari12' => $this->post('jhari12'),
            'jhari13' => $this->post('jhari13'),
            'jhari14' => $this->post('jhari14'),
            'jhari15' => $this->post('jhari15'),
            'jhari16' => $this->post('jhari16'),
            'jhari17' => $this->post('jhari17'),
            'jhari18' => $this->post('jhari18'),
            'jhari19' => $this->post('jhari19'),
            'jhari20' => $this->post('jhari20'),
            'jhari21' => $this->post('jhari21'),
            'jhari22' => $this->post('jhari22'),
            'jhari23' => $this->post('jhari23'),
            'jhari24' => $this->post('jhari24'),
            'jhari25' => $this->post('jhari25'),
            'jhari26' => $this->post('jhari26'),
            'jhari27' => $this->post('jhari27'),
            'jhari28' => $this->post('jhari28'),
            'jhari29' => $this->post('jhari29'),
            'jhari30' => $this->post('jhari30'),
            'jhari31' => $this->post('jhari31'),
            'jkerja' => $this->post('jkerja'),
            'jlibur' => $this->post('jlibur'),
            'jmakan' => $this->post('jmakan')
        ];
        if ($this->post('nip') === null | $this->post('nip') === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were added'
            ], 404);
        } else {
            $this->data_lembur->createDataLembur($data);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully added'
            ], 200);
        }
    }

    public function data_lembur_put()
    {
        $id = $this->put('id');
        $data = [
            'bulan' => $this->put('bulan'),
            'tahun' => $this->put('tahun'),
            'kdsatker' => $this->put('kdsatker'),
            'kdanak' => $this->put('kdanak'),
            'nip' => $this->put('nip'),
            'gol' => $this->put('gol'),
            'lembur' => $this->put('lembur'),
            'makan' => $this->put('makan'),
            'pph' => $this->put('pph'),
            'bruto' => $this->put('bruto'),
            'netto' => $this->put('netto'),
            'keterangan' => $this->put('keterangan'),
            'jhari1' => $this->put('jhari1'),
            'jhari2' => $this->put('jhari2'),
            'jhari3' => $this->put('jhari3'),
            'jhari4' => $this->put('jhari4'),
            'jhari5' => $this->put('jhari5'),
            'jhari6' => $this->put('jhari6'),
            'jhari7' => $this->put('jhari7'),
            'jhari8' => $this->put('jhari8'),
            'jhari9' => $this->put('jhari9'),
            'jhari10' => $this->put('jhari10'),
            'jhari11' => $this->put('jhari11'),
            'jhari12' => $this->put('jhari12'),
            'jhari13' => $this->put('jhari13'),
            'jhari14' => $this->put('jhari14'),
            'jhari15' => $this->put('jhari15'),
            'jhari16' => $this->put('jhari16'),
            'jhari17' => $this->put('jhari17'),
            'jhari18' => $this->put('jhari18'),
            'jhari19' => $this->put('jhari19'),
            'jhari20' => $this->put('jhari20'),
            'jhari21' => $this->put('jhari21'),
            'jhari22' => $this->put('jhari22'),
            'jhari23' => $this->put('jhari23'),
            'jhari24' => $this->put('jhari24'),
            'jhari25' => $this->put('jhari25'),
            'jhari26' => $this->put('jhari26'),
            'jhari27' => $this->put('jhari27'),
            'jhari28' => $this->put('jhari28'),
            'jhari29' => $this->put('jhari29'),
            'jhari30' => $this->put('jhari30'),
            'jhari31' => $this->put('jhari31'),
            'jkerja' => $this->put('jkerja'),
            'jlibur' => $this->put('jlibur'),
            'jmakan' => $this->put('jmakan')
        ];
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were changed'
            ], 404);
        } else {
            $this->data_lembur->updateDataLembur($data, $id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully changed'
            ], 200);
        }
    }

    public function data_lembur_delete()
    {
        $id = $this->delete('id');
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were deleted'
            ], 404);
        } else {
            $this->data_lembur->deleteDataLembur($id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully deleted'
            ], 200);
        }
    }

    // -----------------------------------
    // data_pegawai (5)
    // -----------------------------------

    public function count_data_pegawai_get()
    {
        $data = $this->data_pegawai->countDataPegawai();
        $this->response($data, 200);
    }

    public function data_pegawai_get()
    {
        $id = $this->get('id');
        $keyword = $this->get('keyword');
        $limit = $this->get('limit');
        $offset = $this->get('offset');
        if ($keyword) {
            $data = $this->data_pegawai->findDataPegawai($keyword, $limit, $offset);
        } else {
            $data = $this->data_pegawai->getDataPegawai($id, $limit, $offset);
        }
        $this->response($data, 200);
    }

    public function data_pegawai_post()
    {
        $data = [
            'kdsatker' => $this->post('kdsatker'),
            'kdanak' => $this->post('kdanak'),
            'kdsubanak' => $this->post('kdsubanak'),
            'nip' => $this->post('nip'),
            'nmpeg' => $this->post('nmpeg'),
            'kdpeg' => $this->post('kdpeg'),
            'kdduduk' => $this->post('kdduduk'),
            'tempatlhr' => $this->post('tempatlhr'),
            'tgllhr' => $this->post('tgllhr'),
            'kdgol' => $this->post('kdgol'),
            'kdkawin' => $this->post('kdkawin'),
            'kdjab' => $this->post('kdjab'),
            'kdgapok' => $this->post('kdgapok'),
            'rekening' => $this->post('rekening'),
            'kdkelamin' => $this->post('kdkelamin'),
            'alamat' => $this->post('alamat'),
            'npwp' => $this->post('npwp'),
            'nm_bank' => $this->post('nm_bank'),
            'nmrek' => $this->post('nmrek')
        ];
        if ($this->post('nip') === null | $this->post('nip') === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were added'
            ], 404);
        } else {
            $this->data_pegawai->createDataPegawai($data);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully added'
            ], 200);
        }
    }

    public function data_pegawai_put()
    {
        $id = $this->put('id');
        $data = [
            'kdsatker' => $this->put('kdsatker'),
            'kdanak' => $this->put('kdanak'),
            'kdsubanak' => $this->put('kdsubanak'),
            'nip' => $this->put('nip'),
            'nmpeg' => $this->put('nmpeg'),
            'kdpeg' => $this->put('kdpeg'),
            'kdduduk' => $this->put('kdduduk'),
            'tempatlhr' => $this->put('tempatlhr'),
            'tgllhr' => $this->put('tgllhr'),
            'kdgol' => $this->put('kdgol'),
            'kdkawin' => $this->put('kdkawin'),
            'kdjab' => $this->put('kdjab'),
            'kdgapok' => $this->put('kdgapok'),
            'rekening' => $this->put('rekening'),
            'kdkelamin' => $this->put('kdkelamin'),
            'alamat' => $this->put('alamat'),
            'npwp' => $this->put('npwp'),
            'nm_bank' => $this->put('nm_bank'),
            'nmrek' => $this->put('nmrek')
        ];
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were changed'
            ], 404);
        } else {
            $this->data_pegawai->updateDataPegawai($data, $id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully changed'
            ], 200);
        }
    }

    public function data_pegawai_delete()
    {
        $id = $this->delete('id');
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were deleted'
            ], 404);
        } else {
            $this->data_pegawai->deleteDataPegawai($id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully deleted'
            ], 200);
        }
    }

    public function all_data_pegawai_delete()
    {
        $this->data_pegawai->deleteDataPegawaiAll();
        $this->response([
            'status' => true,
            'message' => 'Data was successfully deleted'
        ], 200);
    }

    // -----------------------------------
    // data_keluarga (6)
    // -----------------------------------

    public function count_data_keluarga_get()
    {
        $data = $this->data_keluarga->countDataKeluarga();
        $this->response($data, 200);
    }

    public function data_keluarga_get()
    {
        $id = $this->get('id');
        $keyword = $this->get('keyword');
        $limit = $this->get('limit');
        $offset = $this->get('offset');
        if ($keyword) {
            $data = $this->data_keluarga->findDataKeluarga($keyword, $limit, $offset);
        } else {
            $data = $this->data_keluarga->getDataKeluarga($id, $limit, $offset);
        }
        $this->response($data, 200);
    }

    public function data_keluarga_post()
    {
        $data = [
            'kdsatker' => $this->post('kdsatker'),
            'nip' => $this->post('nip'),
            'nama' => $this->post('nama'),
            'kdkeluarga' => $this->post('kdkeluarga'),
            'tgllhr' => $this->post('tgllhr'),
            'kddapat' => $this->post('kddapat')
        ];
        if ($this->post('nip') === null | $this->post('nip') === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were added'
            ], 404);
        } else {
            $this->data_keluarga->createDataKeluarga($data);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully added'
            ], 200);
        }
    }

    public function data_keluarga_put()
    {
        $id = $this->put('id');
        $data = [
            'kdsatker' => $this->put('kdsatker'),
            'nip' => $this->put('nip'),
            'nama' => $this->put('nama'),
            'kdkeluarga' => $this->put('kdkeluarga'),
            'tgllhr' => $this->put('tgllhr'),
            'kddapat' => $this->put('kddapat')
        ];
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were changed'
            ], 404);
        } else {
            $this->data_keluarga->updateDataKeluarga($data, $id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully changed'
            ], 200);
        }
    }

    public function data_keluarga_delete()
    {
        $id = $this->delete('id');
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were deleted'
            ], 404);
        } else {
            $this->data_keluarga->deleteDataKeluarga($id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully deleted'
            ], 200);
        }
    }

    public function all_data_keluarga_delete()
    {
        $this->data_keluarga->deleteDataKeluargaAll();
        $this->response([
            'status' => true,
            'message' => 'Data was successfully deleted'
        ], 200);
    }

    // -----------------------------------
    // data_perubahan (7)
    // -----------------------------------
    public function count_data_perubahan_get()
    {
        $data = $this->data_perubahan->countDataPerubahan();
        $this->response($data, 200);
    }

    public function data_perubahan_get()
    {
        $id = $this->get('id');
        $keyword1 = $this->get('keyword1');
        $keyword2 = $this->get('keyword2');
        $limit = $this->get('limit');
        $offset = $this->get('offset');
        if ($keyword1) {
            $data = $this->data_perubahan->findDataPerubahan($keyword1, $keyword2, $limit, $offset);
        } else {
            $data = $this->data_perubahan->getDataPerubahan($id, $limit, $offset);
        }
        $this->response($data, 200);
    }

    public function data_perubahan_post()
    {
        $data = [
            'kdsatker' => $this->post('kdsatker'),
            'nip' => $this->post('nip'),
            'tgl' => $this->post('tgl'),
            'no' => $this->post('no'),
            'uraian' => $this->post('uraian'),
            'tmt' => $this->post('tmt'),
            'tglupdate' => $this->post('tglupdate'),
            'kdgapok' => $this->post('kdgapok'),
            'bulan' => $this->post('bulan'),
            'tahun' => $this->post('tahun')
        ];
        if ($this->post('nip') === null | $this->post('nip') === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were added'
            ], 404);
        } else {
            $this->data_perubahan->createDataPerubahan($data);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully added'
            ], 200);
        }
    }

    public function data_perubahan_put()
    {
        $id = $this->put('id');
        $data = [
            'kdsatker' => $this->put('kdsatker'),
            'nip' => $this->put('nip'),
            'tgl' => $this->put('tgl'),
            'no' => $this->put('no'),
            'uraian' => $this->put('uraian'),
            'tmt' => $this->put('tmt'),
            'tglupdate' => $this->put('tglupdate'),
            'kdgapok' => $this->put('kdgapok'),
            'bulan' => $this->put('bulan'),
            'tahun' => $this->put('tahun')
        ];
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were changed'
            ], 404);
        } else {
            $this->data_perubahan->updateDataPerubahan($data, $id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully changed'
            ], 200);
        }
    }

    public function data_perubahan_delete()
    {
        $id = $this->delete('id');
        if ($id === null | $id === "") {
            $this->response([
                'status' => false,
                'message' => 'No data were deleted'
            ], 404);
        } else {
            $this->data_perubahan->deleteDataPerubahan($id);
            $this->response([
                'status' => true,
                'message' => 'Data was successfully deleted'
            ], 200);
        }
    }
}
