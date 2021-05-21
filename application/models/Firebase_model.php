<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Firebase_model extends CI_Model
{
	public function insertToken($data){
		if($this->db->insert('firebase_device_token',$data)){
			return true;
		}
		return false;
	}

	
	function checkToken($token){
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$this->db->where('token',$token);
		$q = $this->db->get('firebase_device_token');
		if($q->num_rows() > 0){
			return true;
		}
		return false;
	}
}