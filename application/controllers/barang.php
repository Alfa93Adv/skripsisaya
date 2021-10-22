<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Barang');
		$this->load->library(array('form_validation','session'));
	}

	public function index()
	{
		$data['barang'] = $this->M_Barang->getBarang();
		$this->load->view('admin/barang', $data);
	}
	public function tambah barang()
	{
		$data['barang'] = $this->M_Barang->getBarang();
		$this->load->view('admin/barang', $data);
	}
	public function hapus barang()
	{
		$data['barang'] = $this->M_Barang->getBarang();
		$this->load->view('admin/barang', $data);
	}
	public function edit barang()
	{
		$data['barang'] = $this->M_Barang->getBarang();
		$this->load->view('admin/barang', $data);
	}
}
