<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

	public function reg()
	{
		$data = [
			'name'		=> htmlspecialchars($this->input->post('name',true)),
			'email'		=> htmlspecialchars($this->input->post('email',true)),
			'username'	=> htmlspecialchars($this->input->post('email',true)),
			'password'	=> password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
			'level'		=> 1,
			'is_active'	=> 1,
			'date_created' => time()
		];

		$this->db->insert('tbl_user',$data);
		$this->session->set_flashdata('msgi', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Registartion Is Successfully
        </div>');
		redirect('auth');
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$cek = $this->db->get_where('tbl_user', ['email' => $email])->row_array();

		if ($cek) {
			if ($cek['is_active'] == 1) {
				if (password_verify($password, $cek['password'])) {
					$data = [
						'id_user' => $cek['id'],
						'level' => $cek['level'],
						'name'  => $cek['name'],
						'date_created' => $cek['date_created'],
						'email'	=> $cek['email']
					];

					$this->session->set_userdata($data);
					redirect('dashboard');
				} else {
					$this->session->set_flashdata('msgi', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			            Email / password wrong
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
	            Email / password wrong
	        </div>');
			redirect('auth');
		}

	}

	public function logout()
	{
		$data = [
			'level', 'name', 'date_created', 'email'
		];
		$this->session->unset_userdata($data);
		$this->session->set_flashdata('msgi', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            Logout Successfully
	        </div>');
			redirect('auth');
	}

}