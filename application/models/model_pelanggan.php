<?php

class Model_pelanggan extends CI_Model
{
    public function tampil_data()
    {
        $result = $this->db->get('order');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
