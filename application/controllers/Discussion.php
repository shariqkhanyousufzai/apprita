<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discussion extends CI_Controller {

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
        $this->load->model('discussion_model');
        if (!$this->ion_auth->logged_in())
			{            
			$this->session->set_userdata('requested_page', $this->uri->uri_string());
            redirect('/');
       		}
    }

	public function index()
	{
		// $data['user'] = $this->profile_model->getUsers();
		$this->page_construct('discussion/adddiscussion',$data);
	}

	public function create_topic()
	{
		$data['getCategorys'] = $this->discussion_model->getCategory();
		$this->page_construct('discussion/createtopic',$data);
	}

	public function add_topic()
	{
		$dataTopic = array(
			'name' => $_POST['name'],
			'topic_category_id' => $_POST['category'],
			'body' => $_POST['topic_message'],
			'created_by' => $this->session->userdata('user_id'),
		);
		$this->discussion_model->addTopic($dataTopic);
		$data['getCategorys'] = $this->discussion_model->getCategory();
		$this->session->set_flashdata('message', 'Topic Created Succesfully');
        redirect(base_url('discussion/createtopic'),'refresh');
	}

	public function topic_list(){
		$data['getCategorys'] = $this->discussion_model->getCategory();
		$data['topics'] = $this->discussion_model->topics();
		$this->page_construct('discussion/topiclist',$data);
	}

	public function my_list(){
		$data['getCategorys'] = $this->discussion_model->getCategory();
		$data['topics'] = $this->discussion_model->topicsById();
		$this->page_construct('discussion/topiclist',$data);
	}


	public function view_topic($id){
		$decodeId = decode_url($id);
		$data['topicReplys'] = $this->discussion_model->topicReplysById($decodeId);
		$data['topic'] = $this->discussion_model->topicById($decodeId);
		$this->page_construct('discussion/viewtopic',$data);
	}

	public function add_topic_reply(){
		$data = array(
			'body' => $_POST['getMsg'],
			'topic_id' => $_POST['topic_id'],
			'created_by' => $this->session->userdata('user_id'),
		);
		$this->discussion_model->addTopicReply($data);
		exit();
	}

}
