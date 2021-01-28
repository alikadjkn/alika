<?php

class Sso extends CI_Controller
{
    public function index()
    {
        if ($_GET['code']) {
            $code = $_GET['code'];
            $source_1 = file_get_contents("https://sso.djkn.kemenkeu.go.id/via/sso/remote/get_access_token?client_id=portalkeuangan&code=$code");
            $token = json_decode($source_1, true);
            $token = $token['access_token'];
            $source_2 = file_get_contents("https://sso.djkn.kemenkeu.go.id/via/sso/remote/get_user_data?client_id=portalkeuangan&client_secret=kudsayfiu3f3u97fhaiuewfkhgfoi&access_token=$token");
            $data = json_decode($source_2, true);
            $newdata = [
                'nama' => $data['nama'],
                'nip' => $data['nip']
            ];
            $this->session->set_userdata($newdata);
            redirect('beranda');
        } else {
            redirect('welcome');
        }
    }
}
