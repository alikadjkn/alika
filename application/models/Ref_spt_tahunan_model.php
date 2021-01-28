<?php

class Ref_spt_tahunan_model extends CI_Model
{
    public function countRefSptTahunan()
    {
        return $this->db->get('ref_spt_tahunan')->num_rows();
    }

    public function getRefSptTahunan($id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return $this->db->get('ref_spt_tahunan', $limit, $offset)->result_array();
        } else {
            return $this->db->get_where('ref_spt_tahunan', ['id' => $id])->row_array();
        }
    }

    public function findRefSptTahunan($keyword = null, $limit = 0, $offset = 0)
    {
        $this->db->like('tahun', $keyword);
        return $this->db->get('ref_spt_tahunan', $limit, $offset)->result_array();
    }

    public function createRefSptTahunan($data)
    {
        $this->db->insert('ref_spt_tahunan', $data);
        return $this->db->affected_rows();
    }

    public function updateRefSptTahunan($data, $id)
    {
        $this->db->update('ref_spt_tahunan', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteRefSptTahunan($id)
    {
        $this->db->delete('ref_spt_tahunan', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function getTarif($thn)
    {
        return $this->db->get_where('ref_spt_tahunan', ['tahun' => $thn])->row_array();
    }
}
