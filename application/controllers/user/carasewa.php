<?php

class Carasewa extends CI_Controller
{
    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/user_header');
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('user/carasewa', $data);
        $this->load->view('templates/user_footer');
    }
}
