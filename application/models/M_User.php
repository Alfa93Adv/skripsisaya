<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

	public function getUser()
	{
		$query = $this->db->query("Select * from user");
		return $query->result();
	}
	
	function hapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
