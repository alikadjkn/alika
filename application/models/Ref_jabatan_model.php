<?php

class Ref_jabatan_model extends CI_Model
{
    public function countRefJabatan()
    {
        return $this->db->get('ref_jabatan')->num_rows();
    }

    public function getRefJabatan($id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return $this->db->get('ref_jabatan', $limit, $offset)->result_array();
        } else {
            return $this->db->get_where('ref_jabatan', ['id' => $id])->row_array();
        }
    }

    public function findRefJabatan($keyword = null, $limit = 0, $offset = 0)
    {
        $this->db->like('nama', $keyword);
        return $this->db->get('ref_jabatan', $limit, $offset)->result_array();
    }

    public function createRefJabatan($data)
    {
        $this->db->insert('ref_jabatan', $data);
        return $this->db->affected_rows();
    }

    public function updateRefJabatan($data, $id)
    {
        $this->db->update('ref_jabatan', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteRefJabatan($id)
    {
        $this->db->delete('ref_jabatan', ['id' => $id]);
        return $this->db->affected_rows();
    }
}
