<?php

class Mobil extends CI_Controller
{
    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['mobil'] = $this->model_mobil->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar', $data);
        $this->load->view('mobil', $data);
        $this->load->view('template/footer');
    }
    public function tambah_keranjang($id)
    {
        $mobil = $this->model_mobil->find($id);

        $data = array(
            'id'    => $mobil->id_mobil,
            'qty'   => 1,
            'price' => $mobil->harga,
            'name'  => $mobil->nama
        );

        $this->cart->insert($data);
        redirect('mobil');
    }

    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }
}
