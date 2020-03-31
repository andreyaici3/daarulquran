<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	public function slider(){
		if ($this->session->userdata('level') == 1) {
			$data = [
				'title' => 'Admin',
				'title2' => 'images',
				'setup' => setWeb()
			];

			_lib('admin/setting/slider', $data);		
		} else {
			redirect('dashboard');
		}
	}

	public function upload(){
		if ($this->session->userdata('level') == 1) {
			$this->M_upload->slider();
		} else {
			redirect('dashboard');
		}	
		
	}

	public function hahay(){
		if ($this->session->userdata('level') == 1) {
			$this->M_upload->headerC();
		} else {
			redirect('dashboard');
		}	
		
	}

	public function headerC(){
		if ($this->session->userdata('level') == 1) {
			$data = [
				'title' => 'Admin',
				'title2' => 'header',
				'setup' => setWeb()
			];

			_lib('admin/setting/header', $data);		
		} else {
			redirect('dashboard');
		}
	}


}