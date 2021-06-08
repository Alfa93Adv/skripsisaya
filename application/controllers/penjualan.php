<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penjualan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Penjualan');
		$this->load->library(array('form_validation','session'));
	}

	public function index()
	{
		$data['penjualan'] = $this->M_Penjualan->getPenjualan();
		$data['page'] = "penjualan.php"; 
		$this->load->view('Admin/penjualan', $data);
	}
	public function editUsers($id){
		$where = array('id_penjualan' => $id);
		$data['penjualan'] = $this->M_Penjualan->getDataID($where,'penjualan')->result();
	}
}
