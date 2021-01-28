<?php

class Data_satker_model extends CI_Model
{
    public function countDataSatker()
    {
        return $this->db->get('data_satker')->num_rows();
    }

    public function getDataSatker($id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return $this->db->get('data_satker', $limit, $offset)->result_array();
        } else {
            return $this->db->get_where('data_satker', ['id' => $id])->row_array();
        }
    }

    public function findDataSatker($keyword = null, $limit = 0, $offset = 0)
    {
        $this->db->like('nmsatker', $keyword);
        return $this->db->get('data_satker', $limit, $offset)->result_array();
    }

    public function createDataSatker($data)
    {
        $this->db->insert('data_satker', $data);
        return $this->db->affected_rows();
    }

    public function updateDataSatker($data, $id)
    {
        $this->db->update('data_satker', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteDataSatker($id)
    {
        $this->db->delete('data_satker', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function getSatker($kdsatker)
    {
        return $this->db->get_where('data_satker', ['kdsatker' => $kdsatker])->row_array();
    }
}
