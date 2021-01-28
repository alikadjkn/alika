<?php

class Sign_in extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('nip')) {
            redirect('beranda');
        }

        $rules = [
            [
                'field' => 'nip',
                'label' => 'NIP',
                'rules' => 'required|trim|exact_length[18]'
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|trim'
            ]
        ];

        $post = [
            'nip' => htmlspecialchars($this->input->post('nip', true)),
            'password' => htmlspecialchars($this->input->post('password', true))
        ];

        $validation = $this->form_validation->set_rules($rules);
        if ($validation->run()) {
            $this->user->signInUser($post);
            redirect('beranda');
        }
        $this->load->view('sign_in');
    }
}
