<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_Model 
{

	public function add()
	{
		$config = [
			'upload_path' => './assets/images/guru/',
			'allowed_types' => 'jpg|jpeg|gif|png',
			'file_name' => uniqid() . '.jpg',
			'max_size' => '2048'
		];

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('foto_guru')) {
			$name = $config['file_name'];

		} else {
			$name = "default.jpg";
		}

		$data = [
			'nip' => htmlspecialchars($this->input->post('nip',true)),
			'nama_guru' => htmlspecialchars($this->input->post('nama_guru',true)),
			'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir',true)),
			'tanggal_lahir' => strtotime($this->input->post('tanggal_lahir')),
			'mata_pelajaran' => htmlspecialchars($this->input->post('mapel',true)),
			'pendidikan' => htmlspecialchars($this->input->post('pendidikan',true)),
			'foto_guru' => $name
			];

		$this->db->insert('tbl_guru',$data);
		fSukses('Data Guru Berhasil Ditambahkan','guru');
		
	}

	public function getGuru($id)
	{
		return $this->db->get_where('tbl_guru', ['id_guru' => $id])->row_array();
	}

	public function join($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_guru');
		$this->db->join('tbl_mapel', 'tbl_guru.mata_pelajaran = tbl_mapel.id','left');
		$this->db->where('id_guru',$id);
		return $this->db->get()->row_array();
		
	}

	public function edit()
	{
		$foto_lama = $this->input->post('foto_lama');
		$id = $this->input->post('iden');
		

		if ($_FILES['foto_guru']['error'] == 4) {
			$foto = $this->input->post('foto_lama');
		} else {
			$foto = $_FILES['foto_guru']['name'];

			if ($foto_lama != 'default.jpg') {
				if (file_exists(FCPATH . 'assets/images/guru/' . $foto)) {
					$ext = explode('.', $foto);
					$ext = end($ext);
					$foto = uniqid() . '.' .$ext;
				}
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
			if ($guru['foto_guru'] != 'default.jpg') {
				if (file_exists(FCPATH . 'assets/images/guru/' . $foto_lama)) {
					unlink(FCPATH . 'assets/images/guru/' . $foto_lama);
				}
			}
			
		}

		$data = [
			'nip' => htmlspecialchars($this->input->post('nip',true)),
			'nama_guru' => htmlspecialchars($this->input->post('nama_guru',true)),
			'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir',true)),
			'tanggal_lahir' => strtotime($this->input->post('tanggal_lahir')),
			'mata_pelajaran' => htmlspecialchars($this->input->post('mapel',true)),
			'pendidikan' => htmlspecialchars($this->input->post('pendidikan',true)),
			'foto_guru' => $foto
		];

		$this->db->set($data);
		$this->db->where('id_guru',$id);
		$this->db->update('tbl_guru');
		fSukses('Data Berhasil Di Update','guru');	
		
	}

	public function delete($id)
	{
		// $id = $this->input->post('id');
		$guru = $this->getGuru($id);
		$foto_lama = $guru['foto_guru'];
		if ($foto_lama != 'default.jpg') {
			if (file_exists(FCPATH . 'assets/images/guru/' . $foto_lama)) {
				unlink(FCPATH . 'assets/images/guru/' . $foto_lama);
			}	
		}
		
		$this->db->where('id_guru',$id);
		$this->db->delete('tbl_guru');
		fSukses('Data Berhasil Dihapus','guru');
	}

}