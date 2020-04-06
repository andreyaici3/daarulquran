<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_galery extends CI_Model {

	public function getAlbum()
	{
		$this->db->select('tbl_album.*,count(tbl_foto.id_album) as jml');
		$this->db->from('tbl_album');
		$this->db->join('tbl_foto','tbl_foto.id_album = tbl_album.id_album','left');
		$this->db->group_by('tbl_album.id_album');
		$this->db->order_by('tbl_album.judul_album','ASC');
		return $this->db->get()->result_array();
	}

	public function add()
	{

		$config = [
			'upload_path' => './assets/images/galery/',
			'allowed_types' => 'jpg|jpeg|gif|png',
			'file_name' => date('Ym', time()) . '-' . uniqid() . '.jpg',
			'max_size' => '2048'
		];

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('sampul')) {
			$sampul = $config['file_name'];
		} else {
			$sampul = 'default.jpg';
		}

		$data = [
			'sampul' => $sampul,
			'judul_album' => htmlspecialchars($this->input->post('judul',true))
		];

		$this->db->insert('tbl_album', $data);
		fSukses('Album Berhasil Ditambahkan','galery');
	}

	public function edit()
	{
		$sampul_lama = $this->input->post('sampul_lama');
		$id = $this->input->post('iden');

		if ($_FILES['sampul']['error'] == 4) {
			$sampul = $sampul_lama;
		} else {
			$sampul = $_FILES['sampul']['name'];

			if (file_exists(FCPATH . 'assets/images/galery/' . $sampul)) {
				$ext = explode('.', $sampul);
				$ext = end($ext);
				$sampul = uniqid() . '.' .$ext;
			}

			$config = [
				'upload_path' => './assets/images/galery/',
				'allowed_types' => 'jpg|jpeg|gif|png',
				'file_name' => $sampul,
				'max_size' => '2048'
			];

			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			$this->upload->do_upload('sampul');

			if (file_exists(FCPATH . 'assets/images/galery/' . $sampul_lama)) {
				unlink(FCPATH . 'assets/images/galery/' . $sampul_lama);
			}
			
		}
		
		$data = [
			'judul_album' => htmlspecialchars($this->input->post('judul',true)),
			'sampul' => $sampul
		];

		$this->db->set($data);
		$this->db->where('id_album',$id);
		$this->db->update('tbl_album');
		fSukses('album Berhasil Di Edit','galery');
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$query = $this->db->get_where('tbl_album',['id_album' => $id])->row_array();
		$id_foto  = $this->db->get_where('tbl_foto',['id_album' => $id])->result_array();

		foreach ($id_foto as $foto) {
			unlink(FCPATH . 'assets/images/galery/' . $foto['foto']);
		}

		if ($query['sampul'] != 'default.jpg') {
			unlink(FCPATH . 'assets/images/galery/' . $query['sampul']);
		}

		$this->db->where('id_album',$id);
		$this->db->delete('tbl_album');
		fSukses('Data Berhasil Dihapus','galery');
	}

	public function hapusFoto($id)
	{
		$album = $this->db->get_where('tbl_foto',['id_foto' => $id])->row_array();
		$sampul_lama = $album['foto'];
		if (file_exists(FCPATH . 'assets/images/galery/' . $sampul_lama)) {
			unlink(FCPATH . 'assets/images/galery/' . $sampul_lama);
		}
		$this->db->where('id_foto',$id);
		$this->db->delete('tbl_foto');
		fSukses('Foto Berhasil Dihapus','galery/foto/' . $album['id_album']);
	}

	public function foto()
	{
		$config = [
			'upload_path' => './assets/images/galery/',
			'allowed_types' => 'jpg|jpeg|gif|png',
			'file_name' => date('Ym', time()) . urlencode($_FILES['foto']['name']),
			'max_size' => '2048'
		];

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('foto')) {
			$foto = $config['file_name'];
		} else {
			$foto = 'default.jpg';
		}

		$data = [
			'ket_foto' => htmlspecialchars($this->input->post('ket',true)),
			'id_album' => $this->input->post('iden'),
			'foto' => $foto
		];

		$this->db->insert('tbl_foto',$data);
		fSukses('Foto Berhasil Ditambahkan','galery/foto/' . $this->input->post('iden'));

	}

	public function joinFoto($id){
		$this->db->select('*');
		$this->db->from('tbl_foto');
		$this->db->join('tbl_album','tbl_foto.id_album = tbl_album.id_album');
		return $this->db->get()->result_array();

	}


	
}