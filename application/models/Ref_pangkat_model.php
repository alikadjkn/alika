<?php

class Ref_pangkat_model extends CI_Model
{
    public function countRefPangkat()
    {
        return $this->db->get('ref_pangkat')->num_rows();
    }

    public function getRefPangkat($id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return $this->db->get('ref_pangkat', $limit, $offset)->result_array();
        } else {
            return $this->db->get_where('ref_pangkat', ['id' => $id])->row_array();
        }
    }

    public function findRefPangkat($keyword = null, $limit = 0, $offset = 0)
    {
        $this->db->like('nama', $keyword);
        $this->db->or_like('kdgapok', $keyword);
        return $this->db->get('ref_pangkat', $limit, $offset)->result_array();
    }

    public function createRefPangkat($data)
    {
        $this->db->insert('ref_pangkat', $data);
        return $this->db->affected_rows();
    }

    public function updateRefPangkat($data, $id)
    {
        $this->db->update('ref_pangkat', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteRefPangkat($id)
    {
        $this->db->delete('ref_pangkat', ['id' => $id]);
        return $this->db->affected_rows();
    }
}
