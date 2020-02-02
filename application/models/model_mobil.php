<?php

class Model_mobil extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('mobil');
    }

    public function tambah_mobil($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function edit_mobil($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id)
    {
        $result = $this->db->where('id_mobil', $id)
            ->limit(1)
            ->get('mobil');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
    public function detail_mobil($id_mobil)
    {
        $result = $this->db->where('id_mobil', $id_mobil)->get('mobil');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function get_mobil_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('mobil');
        $this->db->like('nama', $keyword);
        $this->db->or_like('harga', $keyword);
        return $this->db->get()->result();
    }
}
