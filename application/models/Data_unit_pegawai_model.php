<?php

class Data_unit_pegawai_model extends CI_Model
{
    public function countDataUnitPegawai()
    {
        return $this->db->get('data_unit_pegawai')->num_rows();
    }

    public function getDataUnitPegawai($id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return $this->db->get('data_unit_pegawai', $limit, $offset)->result_array();
        } else {
            return $this->db->get_where('data_unit_pegawai', ['id' => $id])->row_array();
        }
    }

    public function findDataUnitPegawai($keyword = null, $limit = 0, $offset = 0)
    {
        $this->db->like('nama', $keyword);
        $this->db->or_like('nip', $keyword);
        return $this->db->get('data_unit_pegawai', $limit, $offset)->result_array();
    }

    public function createDataUnitPegawai($data)
    {
        $this->db->insert('data_unit_pegawai', $data);
        return $this->db->affected_rows();
    }

    public function updateDataUnitPegawai($data, $id)
    {
        $this->db->update('data_unit_pegawai', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteDataUnitPegawai($id)
    {
        $this->db->delete('data_unit_pegawai', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function getPegawai($nip)
    {
        return $this->db->get_where('data_unit_pegawai', ['nip' => $nip])->row_array();
    }
}
