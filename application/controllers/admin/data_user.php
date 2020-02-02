<?php

class Data_user extends CI_Controller
{
    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->model_user->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sideebar', $data);
        $this->load->view('admin/data_user', $data);
        $this->load->view('templates/footer');
    }
    public function edit($id)

    {
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['users'] = $this->model_user->edit_user($where, 'users')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sideebar', $data);
        $this->load->view('admin/edit_user', $data);
        $this->load->view('templates/footer');
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
            'email'   => $email,
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'image'     => $image
        );

        $where = array(
            'id' => $id
        );

        $this->model_user->update_data($where, $data, 'users');
        redirect('admin/data_user/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_user->hapus_data($where, 'users');
        redirect('admin/data_user');
    }
}
