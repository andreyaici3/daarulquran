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
			unlink(FCPATH . 'assets/images/config/' . $query['slider_1_foto']);
			$this->upload->do_upload('slider1');
			$this->upload->data();		
		} else {
			$slider1 = $query['slider_1_foto'];
		}

		if (!$_FILES['slider2']['error'] == 4) {
			$slider2 = $_FILES['slider2']['name'];
			unlink(FCPATH . 'assets/images/config/' . $query['slider_2_foto']);
			$this->upload->do_upload('slider2');
			$this->upload->data();		
		} else {
			$slider2 = $query['slider_2_foto'];
		}

		if (!$_FILES['slider3']['error'] == 4) {
			$slider3 = $_FILES['slider3']['name'];
			unlink(FCPATH . 'assets/images/config/' . $query['slider_3_foto']);
			$this->upload->do_upload('slider3');
			$this->upload->data();		
		} else {
			$slider3 = $query['slider_3_foto'];
		}

		if (!$_FILES['logo_ponpes']['error'] == 4) {
			$logo_ponpes = $_FILES['logo_ponpes']['name'];
			unlink(FCPATH . 'assets/images/config/' . $query['slider_3_foto']);
			$this->upload->do_upload('logo_ponpes');
			$this->upload->data();		
		} else {
			$logo_ponpes = $query['logo_ponpes'];
		}

		if (!$_FILES['logo_ra']['error'] == 4) {
			$logo_ra = $_FILES['logo_ra']['name'];
			unlink(FCPATH . 'assets/images/config/' . $query['slider_3_foto']);
			$this->upload->do_upload('logo_ra');
			$this->upload->data();		
		} else {
			$logo_ra = $query['logo_ra'];
		}

		if (!$_FILES['logo_mts']['error'] == 4) {
			$logo_mts = $_FILES['logo_mts']['name'];
			// unlink(FCPATH . 'assets/images/config/' . $query['slider_3_foto']);
			$this->upload->do_upload('logo_mts');
			$this->upload->data();		
		} else {
			$logo_mts = $query['logo_mts'];
		}

		if (!$_FILES['logo_ma']['error'] == 4) {
			$logo_ma = $_FILES['logo_ma']['name'];
			// unlink(FCPATH . 'assets/images/config/' . $query['slider_3_foto']);
			$this->upload->do_upload('logo_ma');
			$this->upload->data();		
		} else {
			$logo_ma = $query['logo_ma'];
		}

		$data = [
			'slider_1_foto' => $slider1,
			'slider_1_judul' => htmlspecialchars($this->input->post('slider1judul',true)),
			'slider_1_sub' => htmlspecialchars($this->input->post('slider1sub',true)),
			'slider_2_foto' => $slider2,
			'slider_2_judul' => htmlspecialchars($this->input->post('slider2judul',true)),
			'slider_2_sub' => htmlspecialchars($this->input->post('slider2sub',true)),
			'slider_3_foto' => $slider3,
			'slider_3_judul' => htmlspecialchars($this->input->post('slider3judul',true)),
			'slider_3_sub' => htmlspecialchars($this->input->post('slider3sub',true)),
			'logo_ponpes' => $logo_ponpes,
			'judul_ponpes' => htmlspecialchars($this->input->post('judul_ponpes',true)),
			'sub_ponpes' => htmlspecialchars($this->input->post('sub_ponpes',true)),
			'logo_ra' => $logo_ra,
			'judul_ra' => htmlspecialchars($this->input->post('judul_ra',true)),
			'sub_ra' => htmlspecialchars($this->input->post('sub_ra',true)),
			'logo_mts' => $logo_mts,
			'judul_mts' => htmlspecialchars($this->input->post('judul_mts',true)),
			'sub_mts' => htmlspecialchars($this->input->post('sub_mts',true)),
			'logo_ma' => $logo_ma,
			'judul_ma' => htmlspecialchars($this->input->post('judul_ma',true)),
			'sub_ma' => htmlspecialchars($this->input->post('sub_ma',true))
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

	public function headerC(){
		$data = [
			'header_1' => htmlspecialchars($this->input->post('header_1',true)),
			'sub_header_1' => htmlspecialchars($this->input->post('sub_header_1',true)),
			'header_2' => htmlspecialchars($this->input->post('header_2',true)),
			'sub_header_2' => htmlspecialchars($this->input->post('sub_header_2',true)),
			'header_3' => htmlspecialchars($this->input->post('header_3',true)),
			'sub_header_3' => htmlspecialchars($this->input->post('sub_header_3',true)),
			'header_4' => htmlspecialchars($this->input->post('header_4',true)),
			'sub_header_4' => htmlspecialchars($this->input->post('sub_header_4',true))
		];

		$this->db->set($data);
		$this->db->where('id', 1);
		$this->db->update('web');
		
		fSukses('Data Berhasil di ubah!!','setting/headerC');
	}	


	public function ktp()
	{
		$id = $this->input->post('ident');
			$query =  $this->db->get_where('tbl_document', ['id_siswa' => $id])->row_array();

			if (!$query) {
				$data = [
					'id_siswa' => $id,
					'status_kk' => 0,
					'status_akta' => 0,
					'status_foto' => 0,
					'status_skhun' => 0,
					'status_ijasah' => 0
				];
				$this->db->insert('tbl_document',$data);
			}

			$config = [
				'upload_path' => './assets/file/siswa/',
				'allowed_types' => 'pdf',
				'file_name' => 'KTP-' . uniqid() . '.pdf',
				'max_size' => '102048'
			];

			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('ktp')) {
				$nama = $config['file_name'];
			} else {
				fGagal('Ktp Gagal Di upload','ppdb/dashboard');
			}

			if ($query['ktp'] != '') {
				if (file_exists(FCPATH . 'assets/file/siswa/' . $query['ktp'])) {
					unlink(FCPATH . 'assets/file/siswa/' . $query['ktp']);
				} 
			}
				


			$data = [
				'ktp' => $nama,
				'status_ktp' => 2				
			];

			$this->db->set($data);
			$this->db->where('id_siswa',$id);
			$this->db->update('tbl_document');
			fSukses('Ktp Berhasil Di upload','ppdb/dashboard');
	}

	public function kk()
	{
		$id = $this->input->post('ident');
			$query =  $this->db->get_where('tbl_document', ['id_siswa' => $id])->row_array();

			if (!$query) {
				$data = [
					'id_siswa' => $id,
					'status_kk' => 0,
					'status_akta' => 0,
					'status_foto' => 0,
					'status_skhun' => 0,
					'status_ijasah' => 0
				];
				$this->db->insert('tbl_document',$data);
			}

			$config = [
				'upload_path' => './assets/file/siswa/',
				'allowed_types' => 'pdf',
				'file_name' => 'KK-' . uniqid() . '.pdf',
				'max_size' => '102048'
			];

			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('kk')) {
				$nama = $config['file_name'];
			} else {
				fGagal('kartu keluarga Gagal Di upload','ppdb/dashboard');
			}

			if ($query['kk'] != '') {
				if (file_exists(FCPATH . 'assets/file/siswa/' . $query['kk'])) {
					unlink(FCPATH . 'assets/file/siswa/' . $query['kk']);
				} 
			}


			$data = [
				'kk' => $nama,
				'status_kk' => 2				
			];

			$this->db->set($data);
			$this->db->where('id_siswa',$id);
			$this->db->update('tbl_document');
			fSukses('Kartu Keluarga Berhasil Di upload','ppdb/dashboard');
	}

	public function ijasah()
	{
		$id = $this->input->post('ident');
			$query =  $this->db->get_where('tbl_document', ['id_siswa' => $id])->row_array();

			if (!$query) {
				$data = [
					'id_siswa' => $id,
					'status_kk' => 0,
					'status_akta' => 0,
					'status_foto' => 0,
					'status_skhun' => 0,
					'status_ijasah' => 0
				];
				$this->db->insert('tbl_document',$data);
			}

			$config = [
				'upload_path' => './assets/file/siswa/',
				'allowed_types' => 'pdf',
				'file_name' => 'IJASAH-' . uniqid() . '.pdf',
				'max_size' => '102048'
			];

			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('ijasah')) {
				$nama = $config['file_name'];
			} else {
				fGagal('Ijasah Gagal Di upload','ppdb/dashboard');
			}

			if ($query['ijasah'] != '') {
				if (file_exists(FCPATH . 'assets/file/siswa/' . $query['ijasah'])) {
					unlink(FCPATH . 'assets/file/siswa/' . $query['ijasah']);
				} 
			}

			$data = [
				'ijasah' => $nama,
				'status_ijasah' => 2				
			];

			$this->db->set($data);
			$this->db->where('id_siswa',$id);
			$this->db->update('tbl_document');
			fSukses('Ijasah Berhasil Di upload','ppdb/dashboard');
	}

	public function skhun()
	{
		$id = $this->input->post('ident');
			$query =  $this->db->get_where('tbl_document', ['id_siswa' => $id])->row_array();

			if (!$query) {
				$data = [
					'id_siswa' => $id,
					'status_kk' => 0,
					'status_akta' => 0,
					'status_foto' => 0,
					'status_skhun' => 0,
					'status_ijasah' => 0
				];
				$this->db->insert('tbl_document',$data);
			}

			$config = [
				'upload_path' => './assets/file/siswa/',
				'allowed_types' => 'pdf',
				'file_name' => 'SKHUN-' . uniqid() . '.pdf',
				'max_size' => '102048'
			];

			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('skhun')) {
				$nama = $config['file_name'];
			} else {
				fGagal('SKHUN Gagal Di upload','ppdb/dashboard');
			}

			if ($query['skhun'] != '') {
				if (file_exists(FCPATH . 'assets/file/siswa/' . $query['skhun'])) {
					unlink(FCPATH . 'assets/file/siswa/' . $query['skhun']);
				} 
			}


			$data = [
				'skhun' => $nama,
				'status_skhun' => 2				
			];

			$this->db->set($data);
			$this->db->where('id_siswa',$id);
			$this->db->update('tbl_document');
			fSukses('SKHUN Berhasil Di upload','ppdb/dashboard');
	}

	public function akta()
	{
		$id = $this->input->post('ident');
			$query =  $this->db->get_where('tbl_document', ['id_siswa' => $id])->row_array();

			if (!$query) {
				$data = [
					'id_siswa' => $id,
					'status_kk' => 0,
					'status_akta' => 0,
					'status_foto' => 0,
					'status_skhun' => 0,
					'status_ijasah' => 0
				];
				$this->db->insert('tbl_document',$data);
			}

			$config = [
				'upload_path' => './assets/file/siswa/',
				'allowed_types' => 'pdf',
				'file_name' => 'AKTA-' . uniqid() . '.pdf',
				'max_size' => '102048'
			];

			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('akta')) {
				$nama = $config['file_name'];
			} else {
				fGagal('Akta Kelahiran Gagal Di upload','ppdb/dashboard');
			}

			if ($query['akta'] != '') {
				if (file_exists(FCPATH . 'assets/file/siswa/' . $query['akta'])) {
					unlink(FCPATH . 'assets/file/siswa/' . $query['akta']);
				} 
			}

			$data = [
				'akta' => $nama,
				'status_akta' => 2				
			];

			$this->db->set($data);
			$this->db->where('id_siswa',$id);
			$this->db->update('tbl_document');
			fSukses('Akta Kelahiran Berhasil Di upload','ppdb/dashboard');
	}

	public function foto()
	{
		$id = $this->input->post('ident');
			$query =  $this->db->get_where('tbl_document', ['id_siswa' => $id])->row_array();

			if (!$query) {
				$data = [
					'id_siswa' => $id,
					'status_kk' => 0,
					'status_akta' => 0,
					'status_foto' => 0,
					'status_skhun' => 0,
					'status_ijasah' => 0
				];
				$this->db->insert('tbl_document',$data);
			}

			$config = [
				'upload_path' => './assets/file/siswa/',
				'allowed_types' => 'jpg|jpeg|png|bmp',
				'file_name' => 'FOTO-' . uniqid() . '.jpg',
				'max_size' => '102048'
			];

			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('foto')) {
				$nama = $config['file_name'];
			} else {
				fGagal('Foto Gagal Di upload','ppdb/dashboard');
			}

			if ($query['foto'] != '') {
				if (file_exists(FCPATH . 'assets/file/siswa/' . $query['foto'])) {
					unlink(FCPATH . 'assets/file/siswa/' . $query['foto']);
				}
			} 


			$data = [
				'foto' => $nama,
				'status_foto' => 2				
			];

			$this->db->set($data);
			$this->db->where('id_siswa',$id);
			$this->db->update('tbl_document');
			fSukses('Foto Berhasil Di upload','ppdb/dashboard');
	}




}