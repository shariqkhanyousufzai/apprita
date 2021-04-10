<?php

function offline($user_id)
{
    $CI =& get_instance();
    $sql_string =
	'SELECT last_activity FROM ci_sessions WHERE user_data LIKE "%'.get_field('users','email', $user_id).'%"';    
    $query = $CI->db->query($sql_string);
    if ($query->num_rows() > 0) {return FALSE;}
    return TRUE;
}

function getSpecificOnlineUser($user_id){
	$CI =& get_instance();
	$sql = 'SELECT user_id,`timestamp`,(UNIX_TIMESTAMP() -  `timestamp`) AS seconds FROM ci_sessions WHERE `user_id` = "'.$user_id.'" AND (UNIX_TIMESTAMP() -  `timestamp`) <= 120 AND user_id IS NOT NULL ORDER BY `timestamp` DESC LIMIT 1';
	$query = $CI->db->query($sql);
    if ($query->num_rows() > 0){
    	return TRUE;
    }
}

function getAllOnlineUser($user_ids){
	$CI =& get_instance();
	$sql = 'SELECT user_id,`timestamp`,(UNIX_TIMESTAMP() -  `timestamp`) AS seconds FROM ci_sessions WHERE `user_id` IN ("'.$user_ids.'") AND (UNIX_TIMESTAMP() -  `timestamp`) <= 120 AND user_id IS NOT NULL ORDER BY `timestamp` DESC';
	$query = $CI->db->query($sql);
    if ($query->num_rows() > 0){
    	return TRUE;
    }
}

function get_field($table, $field, $id)
{
    $CI =& get_instance();
    $CI->db->where('id', $id);
    $query = $CI->db->get($table);
    $row = $query->row();
    return $row->$field;
}

//call session

function callsession($param)
{
    $CI =& get_instance();
    return $CI->session->userdata($param);
}