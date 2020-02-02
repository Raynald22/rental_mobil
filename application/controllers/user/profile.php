<?php

class Profile extends CI_Controller
{

    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('templates/user_footer', $data);
    }
    public function edit()

    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('templates/user_footer');
    }
    public function update()
    {
        $id          = $this->input->post('id');
        $name        = $this->input->post('name');
        $email    = $this->input->post('email');
        $password        = $this->input->post('password');
        $image  = $this->input->post('image');

        $data = array(
            'name'       => $name,
            'email'      => $email,
            'password'   => $password,
            'image'      => $image

        );

        $where = array(
            'id' => $id
        );

        $this->model_user->update_data($where, $data, 'users');
        redirect('user/profile/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_user->hapus_data($where, 'users');
        redirect('user/profile');
    }
}
