<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_model extends CI_Model
{
	function getUsers(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id',$this->session->userdata('user_id'));
		$q = $this->db->get();
        if ($q->num_rows() > 0) {
        	return $q->result()[0];
        }
        return false;
	}
}