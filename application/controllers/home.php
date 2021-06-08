<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_User');
		$this->load->library(array('form_validation','session'));
	}

	public function index()
	{
		$this->load->view('Admin/home', $data);
	}
}