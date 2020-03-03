<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('level') == 1) {
			$data = [
				'title' => 'Admin',
				'title2' => 'Data Berita',
				'setup' => setWeb(),
				'berita' => beritaJoinUser()
			];

			_lib('admin/berita/list', $data);		
		} else {
			redirect('dashboard');
		}
	}

	public function add()
	{
		if ($this->session->userdata('level') == 1) {
			$data = [
				'title' => 'Admin',
				'title2' => 'Tambah Berita',
				'setup' => setWeb()
			];

			rulesBerita();

			if ($this->form_validation->run() == true) {
				$this->M_berita->add();
			}

			_lib('admin/berita/add', $data);		
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
				'title2' => 'Edit Berita',
				'berita'	=> $this->db->get_where('tbl_berita',['id_berita' => $id])->row_array(),
				'identity' => urlencode(base64_encode(base64_encode($id))),
				'setup' => setWeb()
			];

			rulesBerita();

			if ($this->form_validation->run() == true) {
				$this->M_berita->edit();
			}

			_lib('admin/berita/edit', $data);

		} else {
			redirect('dashboard');
		}
		
	}

	public function delete()
	{
		if ($this->session->userdata('level') == 1) {
			$this->M_guru->delete();
		} else {
			redirect('dashboard');
		}
	}

}