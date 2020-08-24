<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_auth extends CI_Model {
	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$cek = $this->db->get_where('tbl_user', ['email' => $email])->row_array();
		if ($cek) {
			if ($cek['is_active'] == 1) {
				if (password_verify($password, $cek['password'])) {
					$data = [
						'cp_sess' => $cek['id'],
						'cp_math' => password_hash($cek['id'], PASSWORD_DEFAULT)
					];

					$this->session->set_userdata($data);
					redirect('dashboard');
				} else {
					$this->session->set_flashdata('msgi', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			            Maaf, Email / Password anda Salah!!
			        </div>');
					redirect('auth');		
				}
			} else {
				$this->session->set_flashdata('msgi', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			            This Account Is Not Activated
			        </div>');
					redirect('auth');
			}
		} else {
			$this->session->set_flashdata('msgi', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            Maaf, Email / Password anda Salah!!
	        </div>');
			redirect('auth');
		}

	}
	public function logout()
	{
		$data = [
			'cp_sess', 'cp_math'
		];
		$this->session->unset_userdata($data);
		$this->session->set_flashdata('msgi', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            Logout Successfully
	        </div>');
		redirect('auth');
	}

	public function identifier($id){
		$data = $this->db->get_where('tbl_user',['id' => $id])->result();
		return $data[0];
	}

	public function sessionProses(){
		$data = [
			'matching' => password_verify($this->session->userdata('cp_sess'), $this->session->userdata('cp_math')),
			'user' => $this->auth->identifier($this->session->userdata('cp_sess'))
		];

		return $data;
	}

	public function level(){
		$sess = $this->auth->sessionProses();

		if ($sess['matching']) {
			if ($sess['user']->level == 1) {
				return $data['level'] = 1;
			} else if ($sess['user']->level == 2) {
				return $data['level'] = 2;
			} else if ($sess['user']->level == 3) {
				return $data['level'] = 3;
			} else {
				return $data['level'] = 4;
			}
		} else {
			return $data['level'] = NULL;
		}
	}

	public function redirect(){
		$cek = $this->auth->level();
		if ($cek != NULL) {
			if ($cek == 1) {
				redirect('admin');
			} else if ($cek == 2){
				redirect('berita');
			}
		} else {
			$this->session->set_flashdata('msgi', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            Silahkan Login Terlebih Dahulu
	        </div>');
			redirect('auth');
		}
	}

}