<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengumuman extends CI_Model {

	public function add()
	{
		$data = [
			'judul_pengumuman' => htmlspecialchars($this->input->post('judul',true)),
			'isi_pengumuman' => htmlspecialchars($this->input->post('isi',true)),
			'tanggal_pengumuman' => $this->input->post('tanggal',true)
		];

		$this->db->insert('tbl_pengumuman',$data);
		fSukses('Pengumuman Berhasil Ditambahkan','pengumuman');
	}

	public function getPengumuman()
	{
		$this->db->select('*');
		$this->db->from('tbl_pengumuman');
		$this->db->order_by('id_pengumuman','DESC');
		return $this->db->get()->result_array();
	}

	public function edit()
	{
		$id = $this->input->post('id',true);
		$data = [
			'judul_pengumuman' => htmlspecialchars($this->input->post('judul',true)),
			'isi_pengumuman' => htmlspecialchars($this->input->post('isi',true)),
			'tanggal_pengumuman' => $this->input->post('tanggal',true)
		];

		$this->db->set($data);
		$this->db->where('id_pengumuman',$id);
		$this->db->update('tbl_pengumuman');
		fSukses('Pengumuman Berhasil Di Edit','pengumuman');
	}
}