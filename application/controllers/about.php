<?php

class About extends CI_Controller
{
	public function index()
	{
		$data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/header');
		$this->load->view('template/sidebar', $data);
		$this->load->view('about', $data);
		$this->load->view('template/footer');
	}
}
