<?php

class Data_lembur_model extends CI_Model
{
    public function countDataLembur()
    {
        return $this->db->get('data_lembur')->num_rows();
    }

    public function getDataLembur($id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return $this->db->get('data_lembur', $limit, $offset)->result_array();
        } else {
            return $this->db->get_where('data_lembur', ['id' => $id])->row_array();
        }
    }

    public function findDataLembur($keyword1 = null, $keyword2 = null, $limit = 0, $offset = 0)
    {
        $this->db->where('nip', $keyword1);
        $this->db->where('tahun', $keyword2);
        $this->db->order_by('bulan', 'ASC');
        return $this->db->get('data_lembur', $limit, $offset)->result_array();
    }

    public function createDataLembur($data)
    {
        $this->db->insert('data_lembur', $data);
        return $this->db->affected_rows();
    }

    public function updateDataLembur($data, $id)
    {
        $this->db->update('data_lembur', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteDataLembur($id)
    {
        $this->db->delete('data_lembur', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function getTahun($nip)
    {
        return $this->db->query("SELECT DISTINCT tahun FROM data_lembur WHERE nip='$nip' ORDER BY tahun DESC")->result_array();
    }

    public function getLembur($nip, $tahun)
    {
        return $this->db->query("SELECT a.*, b.bulan AS nama_bulan FROM data_lembur a LEFT JOIN ref_bulan b ON a.bulan=b.kode WHERE a.nip='$nip' AND a.tahun='$tahun'")->result_array();
    }

    public function getPph($nip, $tahun)
    {
        return $this->db->query("SELECT nip,tahun, SUM(bruto) AS jumlah_bruto, SUM(pph) AS jumlah_pph FROM data_lembur WHERE nip='$nip' AND tahun='$tahun'")->row_array();
    }

    public function getBulanLembur($nip, $bln, $thn)
    {
        return $this->db->get_where('data_lembur', ['nip' => $nip, 'bulan' => $bln, 'tahun' => $thn,])->row_array();
    }
}
