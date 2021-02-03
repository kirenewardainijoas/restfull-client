<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Crud', 'action');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index()
	{
		$data['data'] = $this->action->read();
		$this->load->view('header');
		$this->load->view('home', $data);
		$this->load->view('footer');
	}
	public function add_data()
	{
		$this->form_validation->set_rules('FirstName', 'FirstName', 'required');
		$this->form_validation->set_rules('LastName', 'LastName', 'required');
		$this->form_validation->set_rules('Email', 'Email', 'required');
		

		$data = [
			"first_name" => $this->input->post('FirstName'),
			"last_name" => $this->input->post('LastName'),
			"email" => $this->input->post('Email')
			
		];
		$this->action->add($data);
		$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">
					Data Berhasil Ditambahkan </div>');
		redirect('Admin');
		# code...
	}

	public function edit_data($id)
	{
		$data['data'] = $this->action->getById($id);

		$this->form_validation->set_rules('FirstName', 'FirstName', 'required');
		$this->form_validation->set_rules('LastName', 'LastName', 'required');
		$this->form_validation->set_rules('Email', 'Email', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('header');
			$this->load->view('edit', $data);
			$this->load->view('footer');
		} else {
			$this->action->update();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('Salon/data_salon');
		}
		redirect('Admin');
		# code...
	}
}
