<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
 
	function __construct()
    {
        parent::__construct();
        $this->load->model('users/user_model');
        $this->load->library('form_validation');
        if (!$this->ion_auth->logged_in())
			{            
			$this->session->set_userdata('requested_page', $this->uri->uri_string());
            redirect('/');
       		}
    }

	public function add_user()
	{
		$data['groups'] = $this->user_model->getGroups();
		$this->page_construct('user/adduser',$data);
	}

	public function list_user()
	{
		$data['groups'] = $this->user_model->getGroups();
		$data['users'] = $this->user_model->getUsers();
		$this->page_construct('user/listuser',$data);
	}

	public function view_user($id)
	{
		$decodeId = decode_url($id);
		$data['users'] = $this->user_model->getUsersById($decodeId);
		$this->page_construct('user/viewuser',$data);
	}

	public function edit_user($id)
	{
		$decodeId = decode_url($id);
		$data['groups'] = $this->user_model->getGroups();
		$data['users'] = $this->user_model->getUsersById($decodeId);
		$this->page_construct('user/edituser',$data);
	}

	public function delete_user($id){
		$decodeId = decode_url($id);
		$getEmail = $this->user_model->getUsersById($decodeId);
		if($this->user_model->deleteUser($decodeId,$getEmail->email)){
			$this->session->set_flashdata('message', 'Deleted Succesfully');
        		redirect(base_url('users/list'),'refresh');
		}else{
			$this->session->set_flashdata('message', 'Failed Please try later');
        	redirect(base_url('users/list'),'refresh');
		}
	}

	public function send_message(){
		$data = array(
			'reciever_id' => $this->input->post('reciever_id'),
			'body' => $this->input->post('msg'),
			'sender_id' => $this->session->userdata('user_id'),
			'created_by' => $this->session->userdata('user_id'),
		);
		if($this->user_model->createMessage($data)){
			echo json_encode('success');
		}else{
			echo json_encode('failed');
		}
	}


	public function update_user(){
		$this->form_validation->set_rules('email', 'Email', 'required');
	    if ($this->form_validation->run() == TRUE)
        {
        	$updateData = array(
        		'first_name' => $this->input->post('first_name'),
        		'last_name' => $this->input->post('last_name'),
        		'company' => $this->input->post('company'),
        		'phone' => $this->input->post('phone'),
        		'group_name' => $this->input->post('group_name'),
        	);
            if($this->user_model->updateUser($updateData,$this->input->post('user_id'))){
            	$this->session->set_flashdata('message', 'Updated Succesfully');
        		redirect(base_url('users/list'),'refresh');
            }else{
            	$this->session->set_flashdata('message', 'Please try later');
        		redirect(base_url('users/list'),'refresh');
            }
            
        }else{
        	$this->session->set_flashdata('message', validation_errors());
        	redirect(base_url('users/list'),'refresh');
        }
	}

	public function get_messages(){
		$msgRes = $this->user_model->getMessages();
		echo json_encode($msgRes);
	}

	public function get_active_messages(){
		$msgRes = $this->user_model->getActiveMessages();
		if(isset($msgRes[0]->activemsg)){
			$msgRes = $msgRes[0]->activemsg;
		}else{
			$msgRes = 0;
		}
		echo json_encode($msgRes);
	}

	public function update_message_number(){
		if($this->user_model->updateMessageNumber()){
			echo json_encode('success');
		}else{
			echo json_encode('failed');
		}
	}

	public function messages(){
		$data['getAllMessages'] = $this->user_model->getAllMessages();
		$this->page_construct('user/messages',$data);
	}
}
