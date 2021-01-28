<?php

class Data_perubahan_model extends CI_Model
{
    public function countDataPerubahan()
    {
        return $this->db->get('data_perubahan')->num_rows();
    }

    public function getDataPerubahan($id = null, $limit = 0, $offset = 0)
    {
        if ($id === null) {
            return $this->db->get('data_perubahan', $limit, $offset)->result_array();
        } else {
            return $this->db->get_where('data_perubahan', ['id' => $id])->row_array();
        }
    }

    public function findDataPerubahan($keyword1 = null, $keyword2 = null, $limit = 0, $offset = 0)
    {
        $this->db->where('nip', $keyword1);
        $this->db->where('tahun', $keyword2);
        $this->db->order_by('bulan', 'ASC');
        return $this->db->get('data_perubahan', $limit, $offset)->result_array();
    }

    public function createDataPerubahan($data)
    {
        $this->db->insert('data_perubahan', $data);
        return $this->db->affected_rows();
    }

    public function updateDataPerubahan($data, $id)
    {
        $this->db->update('data_perubahan', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteDataPerubahan($id)
    {
        $this->db->delete('data_perubahan', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function getTahun($nip)
    {
        return $this->db->query("SELECT DISTINCT tahun FROM data_perubahan WHERE nip='$nip' ORDER BY tahun DESC")->result_array();
    }

    public function getPerubahan($nip, $tahun)
    {
        return $this->db->query("SELECT * FROM data_perubahan WHERE nip='$nip' AND tahun='$tahun'")->result_array();
    }
}
