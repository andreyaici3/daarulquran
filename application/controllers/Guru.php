<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('level') == 1) {
			$data = [
				'title' => 'Admin',
				'title2' => 'Data Guru',
				'setup' => setWeb(),
				'guru' => guruJoinMapel()
			];

			_lib('admin/guru/list', $data);		
		} else {
			redirect('dashboard');
		}
	}

	public function add()
	{
		if ($this->session->userdata('level') == 1) {
			$data = [
				'title' => 'Admin',
				'title2' => 'Add New Guru',
				'mapel'	=> $this->M_mapel->lists(),
				'setup' => setWeb()
			];

			rulesGuru();

			if ($this->form_validation->run() == true) {
				$this->M_guru->add();
			}

			_lib('admin/guru/add', $data);		
		} else {
			redirect('dashboard');
		}
	}

	public function edit($id)
	{
		if ($this->session->userdata('level') == 1) {
			$id = urldecode(base64_decode(base64_decode($id)));
			$data = [
				'title' => 'Admin',
				'title2' => 'Edit Guru',
				'guru'	=> $this->M_guru->getGuru($id),
				'mapel'	=> $this->M_mapel->lists(),
				'identity' => urlencode(base64_encode(base64_encode($id))),
				'setup' => setWeb()
			];

			rulesGuru();

			if ($this->form_validation->run() == true) {
				$this->M_guru->edit();
			}

			_lib('admin/guru/edit', $data);

		} else {
			redirect('dashboard');
		}
		
	}

	public function delete($id)
	{
		if ($this->session->userdata('level') == 1) {
			$this->M_guru->delete($id);
		} else {
			redirect('dashboard');
		}
	}

	public function detail($id)
	{
		if ($this->session->userdata('level') == 1) {
			$data = [
				'title' => 'Admin',
				'title2' => 'Detail Guru',
				'guru'	=> $this->M_guru->join($id),
				'setup' => setWeb()
			];

			_lib('admin/guru/detail', $data);

		} else {
			redirect('dashboard');
		}
		
	}

}