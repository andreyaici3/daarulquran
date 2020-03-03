<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_Model 
{

	public function add()
	{
		$name = $_FILES['foto_guru']['name'];

		if (file_exists(FCPATH . 'assets/images/guru/' . $name)) {
			$ext = explode('.',$name);
			$ext = end($ext);
			$name = uniqid() . '.' .$ext;
		}

		$config = [
			'upload_path' => './assets/images/guru/',
			'allowed_types' => 'jpg|jpeg|gif|png',
			'file_name' => $name,
			'max_size' => '2048'
		];

		$this->load->library('upload',$config);
		$this->upload->initialize($config);


		if ($this->upload->do_upload('foto_guru')) {
			$data = [
			'nip' => htmlspecialchars($this->input->post('nip',true)),
			'nama_guru' => htmlspecialchars($this->input->post('nama_guru',true)),
			'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir',true)),
			'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir',true)),
			'mata_pelajaran' => htmlspecialchars($this->input->post('mapel',true)),
			'pendidikan' => htmlspecialchars($this->input->post('pendidikan',true)),
			'foto_guru' => $name
		];

			$this->db->insert('tbl_guru',$data);
			fSukses('Data Guru Berhasil Ditambahkan','guru');

		} else {
			fGagal('Data Guru Gagal Ditambahkan','guru');
		}
	}

	public function getGuru($id)
	{
		return $this->db->get_where('tbl_guru', ['id_guru' => $id])->row_array();
	}

	public function edit()
	{
		$foto_lama = $this->input->post('foto_lama');
		$id = $this->input->post('iden');

		if ($_FILES['foto_guru']['error'] == 4) {
			$foto = $this->input->post('foto_lama');
		} else {
			$foto = $_FILES['foto_guru']['name'];

			if (file_exists(FCPATH . 'assets/images/guru/' . $foto)) {
				$ext = explode('.', $foto);
				$ext = end($ext);
				$foto = uniqid() . '.' .$ext;
			}

			$config = [
				'upload_path' => './assets/images/guru/',
				'allowed_types' => 'jpg|jpeg|gif|png',
				'file_name' => $foto,
				'max_size' => '2048'
			];

			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			$this->upload->do_upload('foto_guru');
			if (file_exists(FCPATH . 'assets/images/guru/' . $foto_lama)) {
				unlink(FCPATH . 'assets/images/guru/' . $foto_lama);
			}
			
		}

		$data = [
			'nip' => htmlspecialchars($this->input->post('nip',true)),
			'nama_guru' => htmlspecialchars($this->input->post('nama_guru',true)),
			'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir',true)),
			'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir',true)),
			'mata_pelajaran' => htmlspecialchars($this->input->post('mapel',true)),
			'pendidikan' => htmlspecialchars($this->input->post('pendidikan',true)),
			'foto_guru' => $foto
		];

		$this->db->set($data);
		$this->db->where('id_guru',$id);
		$this->db->update('tbl_guru');
		fSukses('Data Berhasil Di Update','guru');	
		
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$guru = $this->getGuru($id);
		$foto_lama = $guru['foto_guru'];
		if (file_exists(FCPATH . 'assets/images/guru/' . $foto_lama)) {
				unlink(FCPATH . 'assets/images/guru/' . $foto_lama);
		}
		$this->db->where('id_guru',$id);
		$this->db->delete('tbl_guru');
		fSukses('Data Berhasil Dihapus','guru');
	}

}