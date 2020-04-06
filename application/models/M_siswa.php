<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {
	public function add()
	{
		$name = $_FILES['foto_siswa']['name'];

		if (file_exists(FCPATH . 'assets/images/siswa/' . $name)) {
			$ext = explode('.',$name);
			$ext = end($ext);
			$name = uniqid() . '.' .$ext;
		}

		$config = [
			'upload_path' => './assets/images/siswa/',
			'allowed_types' => 'jpg|jpeg|gif|png',
			'file_name' => $name,
			'max_size' => '2048'
		];

		$this->load->library('upload',$config);
		$this->upload->initialize($config);


		if ($this->upload->do_upload('foto_siswa')) {
			$data = [
			'nis' => htmlspecialchars($this->input->post('nis',true)),
			'nama_siswa' => htmlspecialchars($this->input->post('nama_siswa',true)),
			'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir',true)),
			'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir',true)),
			'id_kelas' => htmlspecialchars($this->input->post('id_kelas',true)),
			'quote' => htmlspecialchars($this->input->post('quote',true)),
			'foto_siswa' => $name
		];

			$this->db->insert('tbl_siswa',$data);
			fSukses('Data siswa Berhasil Ditambahkan','siswa');

		} else {
			fGagal('Data siswa Gagal Ditambahkan','siswa');
		}
	}

	public function getSiswa($id)
	{
		return $this->db->get_where('tbl_siswa', ['id_siswa' => $id])->row_array();
	}

	public function edit()
	{
		$foto_lama = $this->input->post('foto_lama');
		$id = $this->input->post('iden');

		if ($_FILES['foto_siswa']['error'] == 4) {
			$foto = $this->input->post('foto_lama');
		} else {
			$foto = $_FILES['foto_siswa']['name'];

			if (file_exists(FCPATH . 'assets/images/siswa/' . $foto)) {
				$ext = explode('.', $foto);
				$ext = end($ext);
				$foto = uniqid() . '.' .$ext;
			}

			$config = [
				'upload_path' => './assets/images/siswa/',
				'allowed_types' => 'jpg|jpeg|gif|png',
				'file_name' => $foto,
				'max_size' => '2048'
			];

			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			$this->upload->do_upload('foto_siswa');
			if (file_exists(FCPATH . 'assets/images/siswa/' . $foto_lama)) {
				unlink(FCPATH . 'assets/images/siswa/' . $foto_lama);
			}
			
		}

		
		$data = [
			'nis' => htmlspecialchars($this->input->post('nis',true)),
			'nama_siswa' => htmlspecialchars($this->input->post('nama_siswa',true)),
			'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir',true)),
			'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir',true)),
			'id_kelas' => htmlspecialchars($this->input->post('id_kelas',true)),
			'quote' => htmlspecialchars($this->input->post('quote',true)),
			'foto_siswa' => $foto
		];

		$this->db->set($data);
		$this->db->where('id_siswa',$id);
		$this->db->update('tbl_siswa');
		fSukses('Data Berhasil Di Update','siswa');	
		
	}

	public function delete($id)
	{
		$siswa = $this->getSiswa($id);
		$foto_lama = $siswa['foto_siswa'];
		if (file_exists(FCPATH . 'assets/images/siswa/' . $foto_lama)) {
				unlink(FCPATH . 'assets/images/siswa/' . $foto_lama);
		}
		$this->db->where('id_siswa',$id);
		$this->db->delete('tbl_siswa');
		fSukses('Data Berhasil Dihapus','siswa');
	}
}