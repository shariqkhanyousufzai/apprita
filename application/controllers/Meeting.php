<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meeting extends CI_Controller {

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
        $this->load->model('meeting_model');
        if (!$this->ion_auth->logged_in())
			{            
			$this->session->set_userdata('requested_page', $this->uri->uri_string());
            redirect('/');
       		}
    }

	public function create()
	{
		$data['users'] = $this->meeting_model->getUsers();
		$this->page_construct('meeting/create',$data);
	}

	public function list()
	{
		$data['meetings'] = $this->meeting_model->getMeetings();
		$this->page_construct('meeting/list',$data);
	}

	

	public function save()
	{
		$attendantArray = $this->input->post('attendant');
		$implodeAttendant = implode(',', $this->input->post('attendant'));
		$data = array(
			'name' => $this->input->post('name'),
			'start_time' => $this->input->post('start_time'),
			'duration' => $this->input->post('duration'),
			'password' => $this->input->post('password'),
			'attendant' => $implodeAttendant,
			'meeting_url' => $this->input->post('meeting_url'),
			'created_by' => $this->session->userdata('user_id'),
		);
		$message = 
		'
		Meeting URL : '.$this->input->post('meeting_url').'<br>
		Meeting Password : '.$this->input->post('password').'<br>
		';
		foreach ($attendantArray as $id) {
			$email = $this->getUserEmailById($id);
			$this->sendEmail($message,'hackbaby1996@gmail.com');
		}

		if($this->meeting_model->createMeeting($data)){
			$this->session->set_flashdata('message',  'Zoom Meeting Added Successful');
    	    redirect(base_url('meeting/list'),'refresh');
		}else{
			$this->session->set_flashdata('message',  validation_errors());
    	    redirect(base_url('meeting/create'),'refresh');
		}
	}


	function sendEmail($message,$to_email){
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465, //465
			'smtp_user' => 'hackbaby1996@gmail.com',
			'smtp_pass' => 'feb231996',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		);

		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		$this->email->from('Rita');
		$this->email->to($to_email);
		$this->email->subject('Meeting Schedule');
		$this->email->message($message);
		$this->email->send();
	}

	function getUserEmailById($id){
		$this->db->select('email');
		$this->db->from('users');
		$this->db->where('id',$id);
	    $q = $this->db->get()->result()[0]->email;
	    return $q;

	}

}
