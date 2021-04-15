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


	function getUsers(){
		$this->db->select('*,FROM_UNIXTIME(created_on) as created_date');
		$this->db->from('users');
		$this->db->where('id !=',$this->session->userdata('user_id'));
		if($this->session->userdata('group_name') != 'admin'){
			$this->db->where('created_by',$this->session->userdata('user_id'));
		}
		$this->db->where('is_deleted',0);
		$q = $this->db->get();
		return $q->result();
	}


	function getUsersById($id){
		$this->db->select('*,FROM_UNIXTIME(created_on) as created_date');
		$this->db->from('users');
		$this->db->where('is_deleted',0);
		$this->db->where('id',$id);
		$q = $this->db->get()->row();
		return $q;
	}

	function updateUser($data,$id){
		$this->db->where('id', $id);
		if($this->db->update('users', $data)){
			return true;
		}
		return false;
	}

	function updateMessageNumber(){
		$this->db->where('reciever_id', $this->session->userdata('user_id'));
		$this->db->set('status',1);
		if($this->db->update('message')){
			return true;
		}
		return false;
	}

	function createMessage($data){
		if($this->db->insert('message', $data)){
			return true;
		}
		return false;
	}

	function deleteUser($id,$email){
		$email = $email.'-d';
		$this->db->where('id', $id);
		$this->db->set('is_deleted', 1);
		$this->db->set('email', $email);
		if($this->db->update('users')){
			return true;
		}
		return false;
	}


	function getMessages(){
		$this->db->select('u.first_name,u.group_name,u.avatar,m.body,TIMESTAMPDIFF(MINUTE,m.created_on,NOW()) as diff');
        $this->db->from('message as m');
        $this->db->join('users as u','m.sender_id = u.id');
        $this->db->where('m.reciever_id', $this->session->userdata('user_id'));
        $this->db->order_by('m.id','DESC');
        $this->db->limit(10);
        $query = $this->db->get();
        return $query->result();
	}

	function getAllMessages(){
		$this->db->select('u.first_name,u.group_name,u.avatar,m.body,TIMESTAMPDIFF(MINUTE,m.created_on,NOW()) as diff,sender_id');
        $this->db->from('message as m');
        $this->db->join('users as u','m.sender_id = u.id');
        $this->db->where('m.reciever_id', $this->session->userdata('user_id'));
        $this->db->group_by('m.sender_id');
        $this->db->order_by('m.id','DESC');
        $query = $this->db->get();
        return $query->result();
	}

	function getActiveMessages(){
		$this->db->select('count(id) as activemsg');
        $this->db->from('message');
        $this->db->where('status',0);
        $this->db->where('reciever_id', $this->session->userdata('user_id'));
        $query = $this->db->get();
        return $query->result();
	}
}