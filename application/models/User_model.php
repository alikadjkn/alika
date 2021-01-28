<?php

class User_model extends CI_Model
{
    public function getUser($id = null, $limit = 0, $offset = 0)
    {
        if ($id == null) {
            return $this->db->get('users', $limit, $offset)->result_array();
        } else {
            return $this->db->get_where('users', ['id' => $id])->row_array();
        }
    }

    public function findUser($keyword = null, $limit = 0, $offset = 0)
    {
        $this->db->like('nama', $keyword);
        return $this->db->get('users', $limit, $offset)->result_array();
    }

    public function countUser()
    {
        return $this->db->get('users')->num_rows();
    }

    public function createUser($post)
    {
        $this->db->insert('users', $post);
        return $this->db->affected_rows();
    }

    public function updateUser($post, $id)
    {
        $this->db->update('users', $post, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteUser($id)
    {
        $this->db->delete('users', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function signInUser($post)
    {
        $nip = $post['nip'];
        $password = $post['password'];
        $user = $this->db->get_where('users', ['nip' => $nip])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'nip' => $user['nip'],
                    'nama' => $user['nama']
                ];
                $this->session->set_userdata($data);
                redirect('beranda');
            } else {
                $this->session->set_flashdata('pesan', 'Password Anda salah!');
                redirect('sign-in');
            }
        } else {
            $this->session->set_flashdata('pesan', 'NIP Anda belum terdaftar!');
            redirect('sign-in');
        }
    }
}
