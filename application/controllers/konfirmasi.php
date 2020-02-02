<?php

class Konfirmasi extends CI_Controller
{
    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['mobil'] = $this->model_mobil->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar', $data);
        $this->load->view('konfirmasi', $data);
        $this->load->view('template/footer');
    }
}
