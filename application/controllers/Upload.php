<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function getListFile()
	{
		$this->db->select('*');
		$this->db->from('tbl_file');
		$this->db->join('tbl_user','tbl_file.author = tbl_user.id','left');
		return $this->db->get()->result_array();
	}

	public function index()
	{
		if ($this->session->userdata('level') == 1) {
			$data = [
				'title' => 'Admin',
				'title2' => 'List Document',
				'setup' => setWeb(),
				'file' => $this->getListFile()
			];

			_lib('admin/document/list', $data);		
		} else {
			redirect('dashboard');
		}
	}

	public function add()
	{
		if ($this->session->userdata('level') == 1) {
			$data = [
				'title' => 'Admin',
				'title2' => 'Upload Document',
				'setup' => setWeb()
			];

			$this->form_validation->set_rules('ket','Keterangan','required');

			if ($this->form_validation->run() == true) {
				$this->M_upload->add();
			}

			_lib('admin/document/add', $data);		
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
				'title2' => 'Edit Data',
				'file' => $this->db->get_where('tbl_file',['id_file'=>$id])->row_array(),
				'identity' => urlencode(base64_encode(base64_encode($id))),
				'setup' => setWeb()
			];

			$this->form_validation->set_rules('ket','Keterangan','required');

			if ($this->form_validation->run() == true) {
				$this->M_upload->edit();
			}

			_lib('admin/document/edit', $data);

		} else {
			redirect('dashboard');
		}
		
	}

	public function delete()
	{
		if ($this->session->userdata('level') == 1) {
			$this->M_upload->delete();
		} else {
			redirect('dashboard');
		}
	}
}