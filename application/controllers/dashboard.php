<?php

class Dashboard extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Selamat Datang,';
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['mobil'] = $this->model_mobil->tampil_data()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('template/footer');
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
        redirect('dashboard');
    }

    public function detail_keranjang()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/header');
        $this->load->view('template/sidebar', $data);
        $this->load->view('keranjang');
        $this->load->view('template/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('dashboard');
    }

    public function konfirmasi()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/header');
        $this->load->view('template/sidebar', $data);
        $this->load->view('konfirmasi');
        $this->load->view('template/footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->model_invoice->index();
        if ($is_processed) {
            $this->cart->destroy();
            $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template/header');
            $this->load->view('template/sidebar', $data);
            $this->load->view('proses_pesanan');
            $this->load->view('template/footer');
        } else {
            echo "Maaf,Pesanan Anda Gagal Diproses";
        }
    }

    public function detail($id_mobil)
    {

        $data['mobil'] = $this->model_mobil->detail_mobil($id_mobil);
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/header');
        $this->load->view('template/sidebar', $data);
        $this->load->view('detail_mobil');
        $this->load->view('template/footer');
    }
}
