<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model {
	public function getKelas()
	{
		$this->db->select('*');
		$this->db->from('tbl_kelas');
		$this->db->order_by('kelas','ASC');
		return $this->db->get()->result_array();
	}

	public function add()
	{
		$data = [
			'kelas' => htmlspecialchars($this->input->post('kelas',true))
		];

		$this->db->insert('tbl_kelas',$data);
		fSukses('kelas Berhasil Ditambahkan','kelas');
	}

	public function edit()
	{
		$id = $this->input->post('id',true);
		$data = [
			'kelas' => htmlspecialchars($this->input->post('kelas',true))
		];

		$this->db->set($data);
		$this->db->where('id_kelas',$id);
		$this->db->update('tbl_kelas');
		fSukses('kelas Berhasil Di Edit','kelas');
	}

	public function delete($id)
	{
		$this->db->where('id_kelas',$id);
		$this->db->delete('tbl_kelas');
		fSukses('Data Berhasil Dihapus','kelas');
	}
}