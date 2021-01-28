<?php

class Ref_bulan_model extends CI_Model
{
    public function getRefBulan($id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return $this->db->get('ref_bulan', $limit, $offset)->result_array();
        } else {
            return $this->db->get_where('ref_bulan', ['id' => $id])->row_array();
        }
    }

    public function findRefBulan($keyword = null, $limit = 0, $offset = 0)
    {
        $this->db->like('bulan', $keyword);
        return $this->db->get('ref_bulan', $limit, $offset)->result_array();
    }

    public function createRefBulan($data)
    {
        $this->db->insert('ref_bulan', $data);
        return $this->db->affected_rows();
    }

    public function updateRefBulan($data, $id)
    {
        $this->db->update('ref_bulan', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteRefBulan($id)
    {
        $this->db->delete('ref_bulan', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function getBulan($bln)
    {
        return $this->db->get_where('ref_bulan', ['kode' => $bln])->row_array();
    }
}
