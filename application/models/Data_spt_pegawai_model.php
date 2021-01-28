<?php

class Data_spt_pegawai_model extends CI_Model
{
    public function countDataSptPegawai()
    {
        return $this->db->get('data_spt_pegawai')->num_rows();
    }

    public function getDataSptPegawai($id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return $this->db->get('data_spt_pegawai', $limit, $offset)->result_array();
        } else {
            return $this->db->get_where('data_spt_pegawai', ['id' => $id])->row_array();
        }
    }

    public function findDataSptPegawai($keyword = null, $limit = 0, $offset = 0)
    {
        $this->db->where('nip', $keyword);
        $this->db->order_by('tahun', 'ASC');
        return $this->db->get('data_spt_pegawai', $limit, $offset)->result_array();
    }



    public function createDataSptPegawai($data)
    {
        $this->db->insert('data_spt_pegawai', $data);
        return $this->db->affected_rows();
    }

    public function updateDataSptPegawai($data, $id)
    {
        $this->db->update('data_spt_pegawai', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteDataSptPegawai($id)
    {
        $this->db->delete('data_spt_pegawai', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function getTahun($nip)
    {
        return $this->db->query("SELECT DISTINCT tahun FROM data_spt_pegawai WHERE nip='$nip' ORDER BY tahun DESC")->result_array();
    }

    public function getSptPegawai($nip, $thn)
    {
        return $this->db->query(" SELECT a.*,b.nmpeg,c.nama AS nama_gol,d.nama AS nama_jab FROM data_spt_pegawai a LEFT JOIN data_pegawai b ON a.nip=b.nip LEFT JOIN ref_pangkat c ON a.kdgol=c.kdgol LEFT JOIN ref_jabatan d ON a.kdjab=d.kode WHERE a.nip='$nip' AND a.tahun='$thn'")->row_array();
    }

    public function getViewGaji($nip, $thn)
    {
        return $this->db->get_where('view_pajak_gaji', ['tahun' => $thn, 'nip' => $nip])->row_array();
    }

    public function getViewKurang($nip, $thn)
    {
        return $this->db->get_where('view_pajak_kurang', ['tahun' => $thn, 'nip' => $nip])->row_array();
    }

    public function getViewTukin($nip, $thn)
    {
        return $this->db->query("SELECT tahun,nip,SUM(netto) AS netto,SUM(potongan) AS potongan FROM view_tukin WHERE tahun='$thn' AND nip='$nip'")->row_array();
    }

    public function getViewRapel($nip, $thn)
    {
        return $this->db->query("SELECT tahun,nip,SUM(netto) AS netto, SUM(pph) AS pph FROM data_lain WHERE tahun='$thn' AND nip='$nip' AND jenis='rapel-tukin'")->row_array();
    }

    public function getRapel($nip, $bln, $thn)
    {
        return $this->db->query("SELECT bulan,tahun,nip, SUM(bruto) AS bruto, SUM(pph) AS pph, SUM(netto) AS netto FROM data_lain WHERE bulan='$bln' AND tahun='$thn' AND nip='$nip' AND jenis='rapel-tukin'")->row_array();
    }
}
