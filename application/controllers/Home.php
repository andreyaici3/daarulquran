<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$data = [
			'berita'		=> $this->berita->latestBerita(3),
			'pengumuman'	=> $this->pengumuman->latestPengumuman(6),
			'menuAktif'		=> 'Home',
			'head'			=> 'Home'
		];
		$this->frontend->view('index', $data, TRUE);
	}
	
}
