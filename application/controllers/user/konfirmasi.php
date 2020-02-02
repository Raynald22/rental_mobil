<?php

class Konfirmasi extends CI_Controller
{
    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['mobil'] = $this->model_mobil->tampil_data()->result();
        $this->load->view('templates/user_header');
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('user/konfirmasi', $data);
        $this->load->view('templates/user_footer');
    }
}
