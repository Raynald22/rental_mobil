<?php

class Keranjang extends CI_Controller
{
    public function index()
    {
        $data['order'] = $this->model_mobil->tampil_data()->result();
        $this->load->view('templates/user_header');
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('user/keranjang', $data);
        $this->load->view('templates/user_footer');
    }
}
