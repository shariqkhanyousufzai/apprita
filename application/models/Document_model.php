<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Document_model extends CI_Model
{
	public function insertAttachment($data){
		if($this->db->insert('resources',$data)){
			return true;
		}
		return false;
	}

	public function getFiles(){
		$this->db->select('*');
		$this->db->from('resources');
		$q = $this->db->get();
		return $q->result();
	}
}