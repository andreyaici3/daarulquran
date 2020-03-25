<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model {

	public function add()
	{
		
		$config = [
			'upload_path' => './assets/images/berita/',
			'allowed_types' => 'jpg|jpeg|gif|png',
			'max_size' => '2048'
		];

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('gambar')) {
			$gambar_berita = $_FILES['gambar']['name'];
		} else {
			$gambar_berita = 'default.jpg';
		}

		$data = [
			'judul_berita' => htmlspecialchars($this->input->post('judul',true)),
			'slug_berita' => date('Y/d/') . 'berita/' . url_title($this->input->post('judul'),'dash',true),
			'isi_berita' => $this->input->post('isi'),
			'gambar_berita' => $gambar_berita,
			'tanggal_berita' => time(),
			'terakhir_diupdate' => time(),
			'id_user' => $this->session->userdata('id_user')
		];

		$this->db->insert('tbl_berita',$data);
		fSukses('Berita Berhasil Ditambahkan','berita');
	}

	public function edit()
	{
		$gambar_lama = $this->input->post('gambar_lama');
		$id = $this->input->post('iden');
		$berita = $this->db->get_where('tbl_berita',['id_berita' => $id])->row_array();

		$config = [
			'upload_path' => './assets/images/berita/',
			'allowed_types' => 'jpg|jpeg|gif|png',
			'max_size' => '2048'
		];

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('gambar')) {
			$gambar_berita = $_FILES['gambar']['name'];
			if (file_exists(FCPATH . 'assets/images/berita/' . $gambar_lama) && $berita['gambar_berita'] != "default.jpg") {
				unlink(FCPATH . 'assets/images/berita/' . $gambar_lama);
			}
		} else {
			$gambar_berita = 'default.jpg';
		}

		$data = [
			'judul_berita' => htmlspecialchars($this->input->post('judul',true)),
			'slug_berita' => date('Y/d/') . '/' . url_title($this->input->post('judul'),'dash',true),
			'isi_berita' => $this->input->post('isi'),
			'gambar_berita' => $gambar_berita,
			'terakhir_diupdate' => time(),
			'id_user' => $this->session->userdata('id_user')
		];

		$this->db->set($data);
		$this->db->where('id_berita',$id);
		$this->db->update('tbl_berita');
		fSukses('Data Berhasil Di Update','berita');	
		
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$this->db->where('id_berita',$id);
		$this->db->delete('tbl_berita');
		fSukses('Data Berhasil Dihapus','berita');
	}

	public function getDetailBerita($tahun,$bulan,$slug)
	{
		$url = $tahun . '/' . $bulan . '/' . $slug;
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('tbl_user','tbl_berita.id_user = tbl_user.id','left');
		$this->db->where('slug_berita',$url);
		return $this->db->get()->row_array();
	}

	public function _totalBerita()
	{
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('tbl_user','tbl_user.id = tbl_berita.id_user','left');
		$this->db->order_by('id_berita','DESC');
		return $this->db->get()->result_array(); 		
	}

	public function latestBerita()
	{
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->order_by('id_berita','DESC');
		$this->db->limit(10);
		return $this->db->get()->result_array(); 		
	}

}