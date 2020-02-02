<?php

class Mobil extends CI_Controller
{
    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['mobil'] = $this->model_mobil->tampil_data()->result();
        $this->load->view('templates/user_header');
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('user/mobil', $data);
        $this->load->view('templates/user_footer');
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
        redirect('user/mobil');
    }

    public function detail_keranjang()
    {
        $this->load->view('templates/user_header');
        $this->load->view('templates/user_sidebar');
        $this->load->view('user/keranjang');
        $this->load->view('templates/user_footer');
    }
}
