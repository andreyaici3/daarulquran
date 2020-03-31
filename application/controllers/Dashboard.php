<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		cek_sesi();
	}

	public function admin()
	{
		if ($this->session->userdata('level') == 1) {
			$data = [
				'title' => 'Dashboard',
				'title2' => 'Dashboard',
				'mapel' => $this->db->get('tbl_mapel')->num_rows(),
				'kelas' => $this->db->get('tbl_kelas')->num_rows(),
				'guru' => $this->db->get('tbl_guru')->num_rows(),
				'siswa' => $this->db->get('tbl_siswa')->num_rows(),
				'setup' => $this->db->get_where('web', ['id' => 1])->row_array()
			];

			$this->_lib('admin/index', $data);		
		} else {
			redirect('dashboard');
		}
	}

	public function member()
	{
		if ($this->session->userdata('level') == 2) {
			# code...
		} else {
			redirect('dashboard');
		}
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