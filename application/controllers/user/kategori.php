<?php

class Kategori extends CI_Controller
{
    public function honda()
    {
        $data['title'] = 'Selamat Datang,';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['honda'] = $this->model_kategori->data_honda()->result();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('user/honda', $data);
        $this->load->view('templates/user_footer');
    }

    public function nissan()
    {
        $data['title'] = 'Selamat Datang,';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['nissan'] = $this->model_kategori->data_nissan()->result();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('user/nissan', $data);
        $this->load->view('templates/user_footer');
    }

    public function suzuki()
    {
        $data['title'] = 'Selamat Datang,';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['suzuki'] = $this->model_kategori->data_suzuki()->result();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('user/suzuki', $data);
        $this->load->view('templates/user_footer');
    }

    public function daihatsu()
    {
        $data['title'] = 'Selamat Datang,';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['daihatsu'] = $this->model_kategori->data_daihatsu()->result();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('user/daihatsu', $data);
        $this->load->view('templates/user_footer');
    }
}
