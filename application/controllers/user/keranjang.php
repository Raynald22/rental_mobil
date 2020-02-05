<?php

class Keranjang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Harus Login Terlebih Dahulu!</div>');
            redirect('auth');
        }
    }
    public function index()
    {
        $data['order'] = $this->model_mobil->tampil_data()->result();
        $this->load->view('templates/user_header');
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('user/keranjang', $data);
        $this->load->view('templates/user_footer');
    }
}
