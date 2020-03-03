<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mapel extends CI_Model {

	public function lists()
	{
		return $this->db->get('tbl_mapel')->result_array();
	}

	public function add()
	{
		$data = [
			'kode_mapel' => 'DQ-' . $this->input->post('kode',true),
			'nama_mapel' => $this->input->post('mapel',true)
		];

		$this->db->insert('tbl_mapel',$data);
		$this->session->set_flashdata('msgi', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Add New Mapel Successfully
        </div>');
		redirect('mapel');
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$this->db->where('id',$id);
		$ck = $this->db->delete('tbl_mapel');
		if ($id != 'NULL') {
			$this->session->set_flashdata('msgi', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Delete Successfully
        	</div>');
		} else {
			$this->session->set_flashdata('msgi', '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Delete Failed
        	</div>');
		}
		
		redirect('mapel');
	}

	public function edit()
	{
		$id = $this->input->post('id',true);
		$data = [
			'kode_mapel' => $this->input->post('kode',true),
			'nama_mapel' => $this->input->post('mapel',true)
		];

		$this->db->set($data);
		$this->db->where('id',$id);
		$this->db->update('tbl_mapel');
		$this->session->set_flashdata('msgi', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Edit Mapel Successfully
        </div>');
		redirect('mapel');
	}

}