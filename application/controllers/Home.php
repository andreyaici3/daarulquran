<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = [
			'berita' => beritaJoinUser(),
			'setup' => setWeb(),
			'pengumuman' => $this->db->order_by('id_pengumuman','DESC')
						->get('tbl_pengumuman')->result_array()
		];
		$this->load->view('templates/front/head_home',$data);
		$this->load->view('templates/front/header');
		$this->load->view('templates/front/menu');
		$this->load->view('templates/front/home');
		$this->load->view('templates/front/featur');
		$this->load->view('templates/front/course');
		// $this->load->view('templates/front/counter');
		// $this->load->view('templates/front/event');
		$this->load->view('templates/front/team');
		$this->load->view('templates/front/sponsor');
		$this->load->view('templates/front/news');
		$this->load->view('templates/front/footer');
		$this->load->view('templates/front/foot');
	}

	public function download()
	{
		$data = [
			'file' => $this->db->get('tbl_file')->result_array()
		];
		$this->load->view('templates/front/head',$data);
		$this->load->view('templates/front/header');
		$this->load->view('templates/front/menu');	
		$this->load->view('front/download');
		$this->load->view('templates/front/footer');
		$this->load->view('templates/front/foot');
		
	}

	public function galery()
	{
		$data = [
			'galery' => $this->M_galery->getAlbum()
		];
		$this->load->view('templates/front/head',$data);
		$this->load->view('templates/front/header');
		$this->load->view('templates/front/menu');	
		$this->load->view('front/galery');
		$this->load->view('templates/front/footer');
		$this->load->view('templates/front/foot');
	}

	public function siswa()
	{
		$data = initCi('Admin','Data Siswa','tbl_siswa');
		$data['datas'] = siswaJoinKelas();
		$this->load->view('templates/front/head',$data);
		$this->load->view('templates/front/header');
		$this->load->view('templates/front/menu');	
		$this->load->view('front/siswa');
		$this->load->view('templates/front/footer');
		$this->load->view('templates/front/foot');
	}

	public function galeryDetail($id)
	{
		$data = [
			'galery' => $this->db->get_where('tbl_album', ['id_album' => $id])->row_array(),
			'foto' => $this->M_galery->joinFoto($id)
		];

		$this->load->view('templates/front/head',$data);
		$this->load->view('templates/front/header');
		$this->load->view('templates/front/menu');	
		$this->load->view('front/galeryDetail');
		$this->load->view('templates/front/footer');
		$this->load->view('templates/front/foot');
	}

	public function guru()
	{
		$query = "SELECT * FROM tbl_guru JOIN tbl_mapel ON tbl_guru.mata_pelajaran = tbl_mapel.id";
		$data = [
			'guru' => $this->db->query($query)->result_array()
		];

		$this->load->view('templates/front/head',$data);
		$this->load->view('templates/front/header');
		$this->load->view('templates/front/menu');	
		$this->load->view('front/guru');
		$this->load->view('templates/front/footer');
		$this->load->view('templates/front/foot');
		
	}

	public function pengumuman()
	{
		$data = [
			'file' => $this->db->get('tbl_pengumuman')->result_array()
		];
		$this->load->view('templates/front/head',$data);
		$this->load->view('templates/front/header');
		$this->load->view('templates/front/menu');	
		$this->load->view('front/pengumuman');
		$this->load->view('templates/front/footer');
		$this->load->view('templates/front/foot');
		
	}

	public function pengumumanDetail($id)
	{
		$query = "SELECT * FROM tbl_pengumuman WHERE id_pengumuman = $id";
		$data = [
			'guru' => $this->db->query($query)->row_array()
		];

		$this->load->view('templates/front/head',$data);
		$this->load->view('templates/front/header');
		$this->load->view('templates/front/menu');	
		$this->load->view('front/detailPengumuman');
		$this->load->view('templates/front/footer');
		$this->load->view('templates/front/foot');
		
	}

	public function profile()
	{
		$data = [
			'set' => setWeb()
		];

		$this->load->view('templates/front/head',$data);
		$this->load->view('templates/front/header');
		$this->load->view('templates/front/menu');	
		$this->load->view('front/profile');
		$this->load->view('templates/front/footer');
		$this->load->view('templates/front/foot');
	}

	public function about()
	{
		$data = [
			'set' => setWeb()
		];

		$this->load->view('templates/front/head',$data);
		$this->load->view('templates/front/header');
		$this->load->view('templates/front/menu');	
		$this->load->view('front/tentang');
		$this->load->view('templates/front/footer');
		$this->load->view('templates/front/foot');
	}

	public function _pageBerita($limit, $start)
	{
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('tbl_user','tbl_user.id = tbl_berita.id_user','left');
		$this->db->order_by('id_berita','DESC');
		$this->db->limit($limit,$start);
		return $this->db->get()->result_array();

	}

	

	public function berita()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url('home/berita');
		$config['total_rows'] = count($this->M_berita->_totalBerita());
		$config['per_page'] = 6;
		$config['uri_segment'] = 3;
		//start & limit
			$limit = $config['per_page'];
			$start = ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0; 
		//end
		$config['first_link']	=	"First";
		$config['last_link']	=	"Last";
		$config['next_link']	=	"next";
		$config['prev_link']	=	"prev";
		$config['full_tag_open'] = 	"<div class='text-center'><ul>";
		$config['num_tag_open'] = 	"<li>";
		$config['num_tag_close'] = 	"</li>";
		$config['cur_tag_open'] = "<li class='active'><a>";
		$config['cur_tag_close'] = "</a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tag_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tag_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tag_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tag_close'] = "</li>";
		$config['full_tag_close'] = "</ul></div>";

		//--------------------------------------------
		$this->pagination->initialize($config);

		$data = [
			'paginasi' => $this->pagination->create_links(),
			'berita' => $this->_pageBerita($limit,$start),
			'latest' => $this->M_berita->latestBerita()
		];


		$this->load->view('templates/front/head',$data);
		$this->load->view('templates/front/header');
		$this->load->view('templates/front/menu');	
		$this->load->view('front/berita');
		$this->load->view('templates/front/footer');
		$this->load->view('templates/front/foot');
	}

	

	


}
