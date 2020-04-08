<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_setting extends CI_Model {
	
	public function fotoPimp()
	{
		$query = $this->db->get_where('web',['id' => 1])->row_array();
		$config = [
			'upload_path' => './assets/images/config/',
			'allowed_types' => 'jpg|png|bmp|jpeg',
			'file_name' => uniqid() . '.jpg',
			'max_size' => '102048'
		];

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('pimp')) {
			$file = $config['file_name'];
		} 

		$data = [
			'foto_pimp' => $file
		];

		unlink(FCPATH . 'assets/images/config/' . $query['foto_pimp']);

		$this->db->set($data);
		$this->db->where('id',1);
		$this->db->update('web');
	}

	public function fotoRa()
	{
		$query = $this->db->get_where('web',['id' => 1])->row_array();
		$config = [
			'upload_path' => './assets/images/config/',
			'allowed_types' => 'jpg|png|bmp|jpeg',
			'file_name' => uniqid() . '.jpg',
			'max_size' => '102048'
		];

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('ra')) {
			$file = $config['file_name'];
		} 

		$data = [
			'foto_kepala_ra' => $file
		];

		unlink(FCPATH . 'assets/images/config/' . $query['foto_kepala_ra']);

		$this->db->set($data);
		$this->db->where('id',1);
		$this->db->update('web');
	}

	public function fotoMts()
	{
		$query = $this->db->get_where('web',['id' => 1])->row_array();
		$config = [
			'upload_path' => './assets/images/config/',
			'allowed_types' => 'jpg|png|bmp|jpeg',
			'file_name' => uniqid() . '.jpg',
			'max_size' => '102048'
		];

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('mts')) {
			$file = $config['file_name'];
		} 

		$data = [
			'foto_kepala_mts' => $file
		];

		unlink(FCPATH . 'assets/images/config/' . $query['foto_kepala_mts']);

		$this->db->set($data);
		$this->db->where('id',1);
		$this->db->update('web');
	}

	public function fotoMa()
	{
		$query = $this->db->get_where('web',['id' => 1])->row_array();
		$config = [
			'upload_path' => './assets/images/config/',
			'allowed_types' => 'jpg|png|bmp|jpeg',
			'file_name' => uniqid() . '.jpg',
			'max_size' => '102048'
		];

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('ma')) {
			$file = $config['file_name'];
		} 

		$data = [
			'foto_kepala_ma' => $file
		];

		unlink(FCPATH . 'assets/images/config/' . $query['foto_kepala_ma']);

		$this->db->set($data);
		$this->db->where('id',1);
		$this->db->update('web');
	}
}