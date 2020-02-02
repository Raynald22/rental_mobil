<?php

class Model_kategori extends CI_Model
{
    public function data_honda()
    {
        return $this->db->get_where("mobil", array('kategori' => 'honda'));
    }

    public function data_nissan()
    {
        return $this->db->get_where("mobil", array('kategori' => 'nissan'));
    }

    public function data_suzuki()
    {
        return $this->db->get_where("mobil", array('kategori' => 'suzuki'));
    }

    public function data_daihatsu()
    {
        return $this->db->get_where("mobil", array('kategori' => 'daihatsu'));
    }
}
