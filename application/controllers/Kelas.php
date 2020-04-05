<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller 
{
	public function index()
	{
		if ($this->session->userdata('level') == 1) {
			$data = [
				'title' => 'Admin',
				'title2' => 'kelas',
				'setup' => setWeb(),
				'list' => $this->M_kelas->getKelas()
			];

			_lib('admin/kelas/list', $data);		
		} else {
			redirect('dashboard');
		}
	}

	public function add()
	{
		if ($this->session->userdata('level') == 1) {
			$data = [
				'title' => 'Admin',
				'title2' => 'Tambah kelas',
				'setup' => setWeb()
			];

			rulesKelas();

			if ($this->form_validation->run() == true) {
				$this->M_kelas->add();
			}

			_lib('admin/kelas/add', $data);		
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
				'title2' => 'Edit kelas',
				'kelas' => $this->db->get_where('tbl_kelas', ['id_kelas' => $id])->row_array(),
				'identity' => urlencode(base64_encode(base64_encode($id))),
				'setup' => setWeb()
			];

			ruleskelas();

			if ($this->form_validation->run() == true) {
				$this->M_kelas->edit();
			}

			_lib('admin/kelas/edit', $data);

		} else {
			redirect('dashboard');
		}
		
	}

	public function delete()
	{
		if ($this->session->userdata('level') == 1) {
			$this->M_kelas->delete();
		} else {
			redirect('dashboard');
		}
	}

}