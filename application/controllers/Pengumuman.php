<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller 
{
	public function index()
	{
		if ($this->session->userdata('level') == 1) {
			$data = [
				'title' => 'Admin',
				'title2' => 'Pengumuman',
				'setup' => setWeb(),
				'list' => $this->M_pengumuman->getPengumuman()
			];

			_lib('admin/pengumuman/list', $data);		
		} else {
			redirect('dashboard');
		}
	}

	public function add()
	{
		if ($this->session->userdata('level') == 1) {
			$data = [
				'title' => 'Admin',
				'title2' => 'Tambah Pengumuman',
				'setup' => setWeb()
			];

			rulesPengumuman();

			if ($this->form_validation->run() == true) {
				$this->M_pengumuman->add();
			}

			_lib('admin/pengumuman/add', $data);		
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
				'title2' => 'Edit Pengumuman',
				'pengumuman' => $this->db->get_where('tbl_pengumuman', ['id_pengumuman' => $id])->row_array(),
				'identity' => urlencode(base64_encode(base64_encode($id))),
				'setup' => setWeb()
			];

			rulesPengumuman();

			if ($this->form_validation->run() == true) {
				$this->M_pengumuman->edit();
			}

			_lib('admin/pengumuman/edit', $data);

		} else {
			redirect('dashboard');
		}
		
	}

}