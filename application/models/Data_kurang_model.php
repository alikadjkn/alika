<?php

class Data_kurang_model extends CI_Model
{
    public function countDataKurang()
    {
        return $this->db->get('data_kurang')->num_rows();
    }

    public function getDataKurang($id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return $this->db->get('data_kurang', $limit, $offset)->result_array();
        } else {
            return $this->db->get_where('data_kurang', ['id' => $id])->row_array();
        }
    }

    public function findDataKurang($keyword1 = null, $keyword2 = null, $limit = 0, $offset = 0)
    {
        $this->db->where('nip', $keyword1);
        $this->db->where('tahun', $keyword2);
        $this->db->order_by('bulan', 'ASC');
        return $this->db->get('data_kurang', $limit, $offset)->result_array();
    }

    public function createDataKurang($data)
    {
        $this->db->insert('data_kurang', $data);
        return $this->db->affected_rows();
    }

    public function updateDataKurang($data, $id)
    {
        $this->db->update('data_kurang', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteDataKurang($id)
    {
        $this->db->delete('data_kurang', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function getTahun($nip)
    {
        return $this->db->query("SELECT DISTINCT tahun FROM view_data_kurang WHERE nip='$nip' ORDER BY tahun DESC")->result_array();
    }

    public function getKurang($nip, $thn)
    {
        return $this->db->query("SELECT a.*, b.bulan AS nama_bulan FROM view_data_kurang a LEFT JOIN ref_bulan b ON a.bulan=b.kode WHERE a.nip='$nip' AND a.tahun='$thn'")->result_array();
    }

    public function getBulanKurang($nip, $bln, $thn)
    {
        return $this->db->get_where('view_data_kurang', ['nip' => $nip, 'bulan' => $bln, 'tahun' => $thn,])->row_array();
    }
}
