<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_User');
		$this->load->library(array('form_validation','session'));
	}

	public function index()
	{
		$data['user'] = $this->M_User->getUser();
		$this->load->view('admin/user', $data);
	}
	public function editUsers($id){
		$where = array('id_user' => $id);
		$data['user'] = $this->M_User->getDataID($where,'user')->result();
	}
	function hapusUser($id){
		$query = $this->db->query("Select * from user where id_user = $id");
		
		if($query->result_array() != null){
			$this->session->set_flashdata('error','Gagal Menghapus User');
			redirect('user');
		}

		$where = array('id_user' => $id);
		$this->M_User->hapus($where,'user');
		$this->session->set_flashdata('success',"Data User Berhasil Dihapus");
		redirect('user');
	}
}
