<?php

class Model_invoice extends CI_Model
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');
        $gambar = $this->input->post('gambar');
        $tgl_pesan = $this->input->post('tgl_pesan');
        $tgl_kembali = $this->input->post('tgl_kembali');
        $tgl_pengembalian = $this->input->post('tgl_pengembalian');

        $order = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'no_telp' => $no_telp,
            'gambar' => $gambar,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'tgl_kembali' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
            'tgl_pengembalian' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 2, date('Y'))),
        );
        $this->db->insert('order', $order);
        $id_invoice = $this->db->insert_id();

        foreach ($this->cart->contents() as $item) {
            $data = array(
                'id' => $id_invoice,
                'id_mobil' => $item['id'],
                'nama' => $item['name'],
                'jumlah' => $item['qty'],
                'harga' => $item['price'],
            );
            $this->db->insert('pesanan', $data);
        }
        return TRUE;
    }

    public function tampil_data()
    {
        $result = $this->db->get('order');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function ambil_id_invoice($id_invoice)
    {
        $result = $this->db->where('id', $id_invoice)->limit(1)->get('order');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function ambil_id_pesanan($id_invoice)
    {
        $result = $this->db->where('id', $id_invoice)->get('pesanan');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
