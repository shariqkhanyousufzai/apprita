<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	function getGroups(){
		$this->db->select('*');
		$this->db->where('id != ',1);
		$this->db->where('id != ',2);
		$this->db->from('groups');
		$q = $this->db->get();
		return $q->result();
	}
}