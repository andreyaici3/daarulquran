<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	public function index()
	{
		if ($this->session->userdata('level') == 1) {
			$data = initCi('Admin','Data Siswa','tbl_siswa');
			$data['datas'] = siswaJoinKelas();
			_lib('admin/siswa/list', $data);
		} else {
			redirect('dashboard');
		}
	}

	public function detail($id)
	{
		if ($this->session->userdata('level') == 1) {
			$data = [
				'title' => 'Admin',
				'title2' => 'Detail Siswa',
				'guru'	=> detailSiswaJoinKelas($id),
				'setup' => setWeb()
			];

			_lib('admin/siswa/detail', $data);

		} else {
			redirect('dashboard');
		}
		
	}

	public function add()
	{
		if ($this->session->userdata('level') == 1) {
			$data = initCi('Admin','Add Data Siswa','tbl_siswa');
			$data['kelas'] = queryAll('tbl_kelas');
			_lib('admin/siswa/add', $data);

			rulesSiswa();

			if ($this->form_validation->run() == true ) {
				$this->M_siswa->add();
			}
			
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
				'siswa'	=> $this->M_siswa->getSiswa($id),
				'kelas'	=> queryAll('tbl_kelas'),
				'identity' => urlencode(base64_encode(base64_encode($id))),
				'setup' => setWeb()
			];

			rulesSiswa();

			if ($this->form_validation->run() == true) {
				$this->M_siswa->edit();
			}

			_lib('admin/siswa/edit', $data);

		} else {
			redirect('dashboard');
		}
		
	}

	public function delete()
	{
		if ($this->session->userdata('level') == 1) {
			$this->M_siswa->delete();
		} else {
			redirect('dashboard');
		}
	}


}