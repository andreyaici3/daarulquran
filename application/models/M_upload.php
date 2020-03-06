<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_upload extends CI_Model {

	public function add()
	{
		$config = [
			'upload_path' => './assets/file/',
			'allowed_types' => 'pdf|docx',
			'max_size' => '102048'
		];

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('doc')) {
			$file = $_FILES['doc']['name'];
		} else {
			$this->upload->display_errors('<p>', '</p>');
			fGagal('File Gagal Upload','upload');
		}

		$data = [
			'nama_file' => $file,
			'ket_file' => $this->input->post('ket'),
			'author' => $this->session->userdata('id_user'),
			'waktu_upload' => time()
		];

		$this->db->insert('tbl_file',$data);
		fSukses('Data Berhasil Di Upload','upload');
	}

	public function edit()
	{
		$file_lama = $this->input->post('file_lama');
		$id = base64_decode(base64_decode($this->input->post('iden')));

		$config = [
			'upload_path' => './assets/file/',
			'allowed_types' => 'pdf|docx',
			'max_size' => '102048'
		];

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('doc')) {
			$file = $_FILES['doc']['name'];
			unlink(FCPATH . 'assets/file/' . $file_lama);
		} else {
			$file = $file_lama;
		}

		$data = [
			'nama_file' => $file,
			'ket_file' => $this->input->post('ket'),
			'author' => $this->session->userdata('id_user'),
			'waktu_upload' => time()
		];

		$this->db->set($data);
		$this->db->where('id_file', $id);
		$this->db->update('tbl_file');
		fSukses('Data Berhasil Di Ubah','upload');
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$file = $this->db->get_where('tbl_file',['id_file' => $id])->row_array();
		$file_name = $file['nama_file'];
		unlink(FCPATH . 'assets/file/' . $file_name);
		$this->db->where('id_file',$id);
		$this->db->delete('tbl_file');
		fSukses('Data Berhasil Dihapus','upload');
	}

}