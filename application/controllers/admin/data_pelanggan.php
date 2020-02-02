<?php

class Data_pelanggan extends CI_Controller
{
    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['order'] = $this->model_pelanggan->tampil_data();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/data_pelanggan', $data);
        $this->load->view('templates/footer', $data);
    }
}
