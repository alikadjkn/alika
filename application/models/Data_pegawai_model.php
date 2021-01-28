<?php

class Data_pegawai_model extends CI_Model
{
    public function countDataPegawai()
    {
        return $this->db->get('data_pegawai')->num_rows();
    }

    public function getDataPegawai($id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return $this->db->get('data_pegawai', $limit, $offset)->result_array();
        } else {
            return $this->db->get_where('data_pegawai', ['id' => $id])->row_array();
        }
    }

    public function findDataPegawai($keyword = null, $limit = 0, $offset = 0)
    {
        $this->db->like('nmpeg', $keyword);
        $this->db->or_like('nip', $keyword);
        return $this->db->get('data_pegawai', $limit, $offset)->result_array();
    }

    public function createDataPegawai($data)
    {
        $this->db->insert('data_pegawai', $data);
        return $this->db->affected_rows();
    }

    public function updateDataPegawai($data, $id)
    {
        $this->db->update('data_pegawai', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteDataPegawai($id)
    {
        $this->db->delete('data_pegawai', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteDataPegawaiAll()
    {
        $this->db->query("DELETE FROM data_pegawai");
        return $this->db->affected_rows();
    }

    public function getPegawai($nip)
    {
        return $this->db->query("SELECT a.*, b.nama AS nama_pangkat, c.nama AS nama_jabatan FROM data_pegawai a LEFT JOIN ref_pangkat b ON a.kdgol=b.kdgol LEFT JOIN ref_jabatan c ON a.kdjab=c.kode WHERE a.nip='$nip'")->row_array();
    }
}
