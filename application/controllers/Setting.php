<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	public function slider(){
		if ($this->session->userdata('level') == 1) {
			$data = [
				'title' => 'Admin',
				'title2' => 'Slider',
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
}