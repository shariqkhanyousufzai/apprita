<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dues_model extends CI_Model
{
	public function insertDues($data){
		if($this->db->insert('dues',$data)){
			return true;
		}
		return false;
	}

	public function getAllDues(){
		$this->db->select('*');
		$this->db->from('dues');
		$this->db->where('created_by',$this->session->userdata('user_id'));
		$q = $this->db->get();
		return $q->result();
	}
}