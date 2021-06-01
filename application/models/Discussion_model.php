<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Discussion_model extends CI_Model
{

	
	function getCategory(){
		$this->db->select('*');
		$this->db->from('topic_category');
		$q = $this->db->get();
		return $q->result();
	}

	function topics(){
		$this->db->select('t.*,tc.name as category');
		$this->db->from('topic as t');
		$this->db->join('topic_category tc','t.topic_category_id = tc.id','LEFT');
		$this->db->order_by('t.id','DESC');
		$q = $this->db->get();
		return $q->result();
	}


	function topicsById(){
			$this->db->select('t.*,tc.name as category');
			$this->db->from('topic as t');
			$this->db->join('topic_category tc','t.topic_category_id = tc.id','LEFT');
			$this->db->where('t.created_by',$this->session->userdata('user_id'));
			$q = $this->db->get();
			return $q->result();
		}

	function topicById($id){
		$this->db->select('t.*,u.first_name,u.group_name,u.avatar');
		$this->db->from('topic as t');
		$this->db->join('users u','t.created_by = u.id','LEFT');
		$this->db->where('t.id',$id);
		$q = $this->db->get()->row();
		return $q;
	}


	function addTopic($data){
		if($this->db->insert('topic',$data)){
			return TRUE;
		}
		return false;

	}

	function addTopicReply($data){
		if($this->db->insert('topic_replies',$data)){
			return TRUE;
		}
		return false;

	}

	function topicReplysById($id){
		$this->db->select('tr.*,u.first_name,u.group_name,u.avatar');
		$this->db->from('topic_replies as tr');
		$this->db->join('users u','tr.created_by = u.id','LEFT');
		$this->db->where('tr.topic_id',$id);
		$q = $this->db->get();
		return $q->result();
	}
}