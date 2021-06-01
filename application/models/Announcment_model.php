<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Announcment_model extends CI_Model
{

	function getAnnouncmentCategories(){
		$this->db->select('*');
		$this->db->from('announcement_category');
		$q = $this->db->get();
		return $q->result();
	}

	function getAllDeviceToken(){
		$this->db->select('*');
		$this->db->from('firebase_device_token');
		$q = $this->db->get();
		return $q->result();
	}

	function announcements(){
		$this->db->select('a.*,ac.name as category');
		$this->db->from('announcement as a');
		$this->db->join('announcement_category ac','a.announcement_category_id = ac.id','LEFT');
		$this->db->order_by('a.id','DESC');
		$q = $this->db->get();
		return $q->result();
	}

	function getAnnouncementById($id){
		$this->db->select('body');
		$this->db->from('announcement');
		$this->db->where('id',$id);
		$q = $this->db->get()->row();
		return $q;
	}

	function addAnnouncement($data){
		if($this->db->insert('announcement',$data)){
			return TRUE;
		}
		return false;

	}

	function getUnreadAnnouncement(){
		$where = "NOT FIND_IN_SET('".$this->session->userdata('user_id')."', read_by)"; 
		$this->db->select('count(id) as unreadannouncement');
        $this->db->from('announcement');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
	}

	function updateReadBy($id,$addReadBy){
		$this->db->where('id',$id);
		$this->db->set('read_by',$addReadBy);
		if($this->db->update('announcement')){
			return TRUE;
		}
		return false;
	}


}