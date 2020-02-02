<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Harus Login Untuk Mengakses Halaman Admin!</div>');
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Halo,';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/footer', $data);
    }

    public function detail($id_mobil)
    {
        $data['mobil'] = $this->model_mobil->detail_mobil($id_mobil);
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('detail_mobil', $data);
        $this->load->view('templates/footer', $data);
    }
}
