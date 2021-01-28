<?php

class Data_keluarga_model extends CI_Model
{
    public function countDataKeluarga()
    {
        return $this->db->get('data_keluarga')->num_rows();
    }

    public function getDataKeluarga($id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return $this->db->get('data_keluarga', $limit, $offset)->result_array();
        } else {
            return $this->db->get_where('data_keluarga', ['id' => $id])->row_array();
        }
    }

    public function findDataKeluarga($keyword = null, $limit = 0, $offset = 0)
    {
        $this->db->like('nama', $keyword);
        $this->db->or_like('nip', $keyword);
        return $this->db->get('data_keluarga', $limit, $offset)->result_array();
    }

    public function createDataKeluarga($data)
    {
        $this->db->insert('data_keluarga', $data);
        return $this->db->affected_rows();
    }

    public function updateDataKeluarga($data, $id)
    {
        $this->db->update('data_keluarga', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteDataKeluarga($id)
    {
        $this->db->delete('data_keluarga', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteDataKeluargaAll()
    {
        $this->db->query("DELETE FROM data_keluarga");
        return $this->db->affected_rows();
    }

    public function getKeluarga($nip)
    {
        $this->db->order_by('tgllhr', 'ASC');
        return $this->db->get_where('data_keluarga', ['nip' => $nip])->result_array();
    }
}
