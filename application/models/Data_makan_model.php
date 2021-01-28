<?php

class Data_makan_model extends CI_Model
{
    public function countDataMakan()
    {
        return $this->db->get('data_makan')->num_rows();
    }

    public function getDataMakan($id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return $this->db->get('data_makan', $limit, $offset)->result_array();
        } else {
            return $this->db->get_where('data_makan', ['id' => $id])->row_array();
        }
    }

    public function findDataMakan($keyword1 = null, $keyword2 = null, $limit = 0, $offset = 0)
    {
        $this->db->where('nip', $keyword1);
        $this->db->where('tahun', $keyword2);
        $this->db->order_by('bulan', 'ASC');
        return $this->db->get('data_makan', $limit, $offset)->result_array();
    }

    public function createDataMakan($data)
    {
        $this->db->insert('data_makan', $data);
        return $this->db->affected_rows();
    }

    public function updateDataMakan($data, $id)
    {
        $this->db->update('data_makan', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteDataMakan($id)
    {
        $this->db->delete('data_makan', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function getTahun($nip)
    {
        return $this->db->query("SELECT DISTINCT tahun FROM data_makan WHERE nip='$nip' ORDER BY tahun DESC")->result_array();
    }

    public function getMakan($nip, $tahun)
    {
        return $this->db->query("SELECT a.*, b.bulan AS nama_bulan FROM data_makan a LEFT JOIN ref_bulan b ON a.bulan=b.kode WHERE a.nip='$nip' AND a.tahun='$tahun'")->result_array();
    }

    public function getPph($nip, $tahun)
    {
        return $this->db->query("SELECT nip,tahun, SUM(bruto) AS jumlah_bruto, SUM(pph) AS jumlah_pph FROM data_makan WHERE nip='$nip' AND tahun='$tahun'")->row_array();
    }

    public function getBulanMakan($nip, $bln, $thn)
    {
        return $this->db->get_where('data_makan', ['nip' => $nip, 'bulan' => $bln, 'tahun' => $thn,])->row_array();
    }
}
