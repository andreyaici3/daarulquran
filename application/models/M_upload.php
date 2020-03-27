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

	public function slider()
	{
		$query = $this->db->get('web')->row_array();
		$config = [
			'upload_path' => './assets/images/config',
			'allowed_types' => 'jpeg|jpg|png',
			'max_size' => '102048'
		];

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if (!$_FILES['slider1']['error'] == 4) {
			$slider1 = $_FILES['slider1']['name'];
			// unlink(FCPATH . 'assets/images/config/' . $query['slider_1_foto']);
			$this->upload->do_upload('slider1');
			$this->upload->data();		
		} else {
			$slider1 = $query['slider_1_foto'];
		}

		if (!$_FILES['slider2']['error'] == 4) {
			$slider2 = $_FILES['slider2']['name'];
			// unlink(FCPATH . 'assets/images/config/' . $query['slider_2_foto']);
			$this->upload->do_upload('slider2');
			$this->upload->data();		
		} else {
			$slider2 = $query['slider_2_foto'];
		}

		if (!$_FILES['slider3']['error'] == 4) {
			$slider3 = $_FILES['slider3']['name'];
			// unlink(FCPATH . 'assets/images/config/' . $query['slider_2_foto']);
			$this->upload->do_upload('slider3');
			$this->upload->data();		
		} else {
			$slider3 = $query['slider_3_foto'];
		}

		$data = [
			'slider_1_foto' => $slider1,
			'slider_2_foto' => $slider2,
			'slider_3_foto' => $slider3
		];

		$this->db->set($data);
		$this->db->where('id', 1);
		$this->db->update('web');
		
		fSukses('Data Berhasil di ubah!!','setting/slider');
		

		
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