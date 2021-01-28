<?php

class Data_tukin_model extends CI_Model
{
    public function countDataTukin()
    {
        return $this->db->get('data_tukin')->num_rows();
    }

    public function getDataTukin($id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return $this->db->get('data_tukin', $limit, $offset)->result_array();
        } else {
            return $this->db->get_where('data_tukin', ['id' => $id])->row_array();
        }
    }

    public function findDataTukin($keyword1 = null, $keyword2 = null, $limit = 0, $offset = 0)
    {
        $this->db->where('nip', $keyword1);
        $this->db->where('tahun', $keyword2);
        $this->db->order_by('bulan', 'ASC');
        return $this->db->get('data_tukin', $limit, $offset)->result_array();
    }

    public function createDataTukin($data)
    {
        $this->db->insert('data_tukin', $data);
        return $this->db->affected_rows();
    }

    public function updateDataTukin($data, $id)
    {
        $this->db->update('data_tukin', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteDataTukin($id)
    {
        $this->db->delete('data_tukin', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function getTahun($nip)
    {
        return $this->db->query("SELECT DISTINCT tahun FROM data_tukin WHERE nip='$nip' ORDER BY tahun DESC")->result_array();
    }

    public function getTukin($nip, $tahun)
    {
        return $this->db->query("SELECT a.*, b.bulan AS nama_bulan FROM data_tukin a LEFT JOIN ref_bulan b ON a.bulan=b.kode WHERE a.nip='$nip' AND a.tahun='$tahun'")->result_array();
    }

    public function getBulanTukin($nip, $bln, $thn)
    {
        return $this->db->get_where('data_tukin', ['nip' => $nip, 'bulan' => $bln, 'tahun' => $thn,])->row_array();
    }
}
