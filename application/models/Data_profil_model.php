<?php

class Data_profil_model extends CI_Model
{
    public function countDataProfil()
    {
        return $this->db->get('data_profil')->num_rows();
    }

    public function getDataProfil($id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return $this->db->get('data_profil', $limit, $offset)->result_array();
        } else {
            return $this->db->get_where('data_profil', ['id' => $id])->row_array();
        }
    }

    public function findDataProfil($keyword = null, $limit = 0, $offset = 0)
    {
        $this->db->like('kdsatker', $keyword);
        return $this->db->get('data_profil', $limit, $offset)->result_array();
    }

    public function createDataProfil($data)
    {
        $this->db->insert('data_profil', $data);
        return $this->db->affected_rows();
    }

    public function updateDataProfil($data, $id)
    {
        $this->db->update('data_profil', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteDataProfil($id)
    {
        $this->db->delete('data_profil', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function getProfil($kdsatker, $thn)
    {
        return $this->db->get_where('data_profil', ['kdsatker' => $kdsatker, 'tahun' => $thn])->row_array();
    }
}
