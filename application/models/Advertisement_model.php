<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Advertisement_model extends CI_Model
{
	function createAdvertisement($data){
		if($this->db->insert('advertisement',$data)){
			return TRUE;
		}
		return false;

	}

	function getAllAdvertisements(){
		$this->db->select('*');
		$this->db->from('advertisement');
		$q = $this->db->get();
		return $q->result();
	}

}