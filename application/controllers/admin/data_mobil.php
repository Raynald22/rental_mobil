<?php

class Data_mobil extends CI_Controller
{
    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['mobil'] = $this->model_mobil->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/data_mobil', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $nama       = $this->input->post('nama');
        $kategori   = $this->input->post('kategori');
        $status       = $this->input->post('status');
        $harga      = $this->input->post('harga');
        $gambar  = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './assets/uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Diupload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama'       => $nama,
            'kategori'   => $kategori,
            'status'       => $status,
            'harga'      => $harga,
            'gambar'     => $gambar
        );

        $this->model_mobil->tambah_mobil($data, 'mobil');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan!</div>');
        redirect('admin/data_mobil');
    }

    public function edit($id)

    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id_mobil' => $id);
        $data['mobil'] = $this->model_mobil->edit_mobil($where, 'mobil')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/edit_mobil', $data);
        $this->load->view('templates/footer');
    }
    public function update()
    {
        $id          = $this->input->post('id_mobil');
        $nama        = $this->input->post('nama');
        $kategori    = $this->input->post('kategori');
        $status        = $this->input->post('status');
        $harga       = $this->input->post('harga');
        $gambar  = $this->input->post('gambar');
        $data = array(
            'nama'       => $nama,
            'kategori'   => $kategori,
            'status'       => $status,
            'harga'      => $harga,
            'gambar'     => $gambar

        );

        $where = array(
            'id_mobil' => $id
        );

        $this->model_mobil->update_data($where, $data, 'mobil');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
        redirect('admin/data_mobil/index');
    }

    public function hapus($id)
    {
        $where = array('id_mobil' => $id);
        $this->model_mobil->hapus_data($where, 'mobil');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect('admin/data_mobil');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['mobil'] = $this->model_mobil->get_mobil_keyword($keyword);
        $this->load->view('search', $data);
    }
}
