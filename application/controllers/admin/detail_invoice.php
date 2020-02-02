<?php

class Detail_invoice extends CI_Controller
{
    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['order'] = $this->model_invoice->tampil_data();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/detail_invoice', $data);
        $this->load->view('templates/footer', $data);
    }

    public function detail($id_invoice)
    {
        $data['order'] = $this->model_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/detail_invoice', $data);
        $this->load->view('templates/footer', $data);
    }

    public function cetak_laporan()
    {
        $data['pesanan'] = $this->model_invoice->get_data('pesanan')->result();
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/detail_invoice', $data);
        $this->load->view('templates/footer', $data);
    }
}
