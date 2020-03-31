<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{

		$this->form_validation->set_rules('email','Email','required|valid_email|trim');
		$this->form_validation->set_rules('password','Password','required|trim');

		if ($this->form_validation->run() == true) {
			$this->login();
		}
		
		$this->_lib('v_login','Login');
	}

	public function registration()
	{
		redirect('auth');
		$this->form_validation->set_rules('name','Name','required|trim');
		$this->form_validation->set_rules('email','Email','required|valid_email|trim');
		$this->form_validation->set_rules('password1','Password','required|min_length[5]|matches[password2]|trim');
		$this->form_validation->set_rules('password2','Password','required|matches[password1]|trim');

		if ($this->form_validation->run() == true) {
			$this->M_auth->reg();				
		} 
		$this->_lib('v_reg','Registration New Member');
	}

	public function login()
	{
		$this->M_auth->login();
	}

	public function logout()
	{
		$this->M_auth->logout();	
	}


	private function _lib($view, $judul)
	{
		$data = [
			'title' => $judul
		];

		$this->load->view('templates/back/head',$data);
		$this->load->view($view);
		$this->load->view('templates/back/footer');
	}
}