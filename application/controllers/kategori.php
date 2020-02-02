<?php

class Kategori extends CI_Controller
{
    public function honda()
    {
        $data['title'] = 'Selamat Datang,';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['honda'] = $this->model_kategori->data_honda()->result();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('honda', $data);
        $this->load->view('template/footer');
    }

    public function nissan()
    {
        $data['title'] = 'Selamat Datang,';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['nissan'] = $this->model_kategori->data_nissan()->result();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('nissan', $data);
        $this->load->view('template/footer');
    }

    public function suzuki()
    {
        $data['title'] = 'Selamat Datang,';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['suzuki'] = $this->model_kategori->data_suzuki()->result();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('suzuki', $data);
        $this->load->view('template/footer');
    }

    public function daihatsu()
    {
        $data['title'] = 'Selamat Datang,';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['daihatsu'] = $this->model_kategori->data_daihatsu()->result();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('daihatsu', $data);
        $this->load->view('template/footer');
    }
}
