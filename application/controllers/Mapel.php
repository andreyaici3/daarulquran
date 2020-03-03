<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('level') == 1) {
			$data = [
				'title' => 'Admin',
				'title2' => 'Mata Pelajaran',
				'setup' => setWeb(),
				'mapel' => $this->M_mapel->lists()
			];

			$this->_lib('admin/mapel', $data);		
		} else {
			redirect('dashboard');
		}
	}

	public function add()
	{
		$this->form_validation->set_rules('kode','Kode','required');
		$this->form_validation->set_rules('mapel','Mapel','required');

		if ($this->form_validation->run() == true) {
			$this->M_mapel->add();
		} else {
			redirect('mapel');
		}
	}

	public function delete()
	{
		$this->M_mapel->delete();
	}


	public function edit()
	{
		$this->form_validation->set_rules('kode','Kode','required');
		$this->form_validation->set_rules('mapel','Mapel','required');

		if ($this->form_validation->run() == true) {
			$this->M_mapel->edit();
		} else {
			redirect('mapel');
		}
	}

	public function getEdit()
	{ 
		$id = $_POST['id'];
		echo json_encode($this->db->get_where('tbl_mapel', ['id' => $id])->row_array());
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