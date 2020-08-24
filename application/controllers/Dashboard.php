<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{

	public function index(){
		$this->auth->redirect();
	}


	private function _lib($view, $data)
	{
		$this->load->view('templates/back/head',$data);
		$this->load->view('admin/layout/toplink');
		$this->load->view('admin/layout/sidebar');
		$this->load->view($view);
		$this->load->view('admin/layout/footer');
		$this->load->view('templates/back/footer');
	}
}