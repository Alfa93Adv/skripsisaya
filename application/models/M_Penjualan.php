<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Penjualan extends CI_Model {

	public function getPenjualan()
	{
		$query = $this->db->query("Select * from penjualan");
		return $query->result();
	}
}
