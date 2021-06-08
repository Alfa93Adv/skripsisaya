<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Barang extends CI_Model {

	public function getBarang()
	{
		$query = $this->db->query("Select * from barang");
		return $query->result();
	}
}
