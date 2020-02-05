<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {

        $this->load->view('templates/user_header');
        $this->load->view('home');
        $this->load->view('templates/user_footer');
    }

    public function tambah_ke_keranjang($id)
    {
        $mobil = $this->model_mobil->find($id);

        $data = array(
            'id' => $mobil->id_mobil,
            'qty' => 1,
            'price' => $mobil->harga,
            'name' => $mobil->nama
        );

        $this->cart->insert($data);
        redirect('user/keranjang');
    }

    public function detail_keranjang()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/user_header');
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('user/keranjang');
        $this->load->view('templates/user_footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('user/dashboard');
    }

    public function konfirmasi()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/user_header');
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('user/konfirmasi');
        $this->load->view('templates/user_footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->model_invoice->index();
        if ($is_processed) {
            $this->cart->destroy();
            $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('templates/user_header');
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('user/proses_pesanan');
            $this->load->view('templates/user_footer');
        } else {
            echo "Maaf,Pesanan Anda Gagal Diproses";
        }
    }

    public function detail($id_mobil)
    {

        $data['mobil'] = $this->model_mobil->detail_mobil($id_mobil);
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/user_header');
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('user/detail_mobil');
        $this->load->view('templates/user_footer');
    }
}
