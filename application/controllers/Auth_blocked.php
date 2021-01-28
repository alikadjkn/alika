<?php

class Auth_blocked extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('auth_blocked');
    }
}
