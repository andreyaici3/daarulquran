<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index(){
		$this->rules->login();
		if ($this->form_validation->run() != true) {
			$data = ['page' => "login", 'title' => "Login" ];
			$this->backend->view('login', $data, TRUE);
		} else {
			$this->auth->login();
		}
		
	}
}