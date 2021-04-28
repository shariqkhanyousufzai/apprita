<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Meeting_model extends CI_Model
{
	function getUsers(){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('is_deleted',0);
		$q = $this->db->get();
        if ($q->num_rows() > 0) {
        	return $q->result();
        }
        return false;
	}

	function getMeetings(){
		$this->db->select('*');
		$this->db->from('zoom_meetings');
		$q = $this->db->get();
        if ($q->num_rows() > 0) {
        	return $q->result();
        }
        return false;
	}

	function createMeeting($data){
		if($this->db->insert('zoom_meetings',$data)){
			return TRUE;
		}
		return false;

	}

}