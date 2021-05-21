<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Announcement extends CI_Controller {

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
        $this->load->model('announcment_model');
        if (!$this->ion_auth->logged_in())
			{            
			$this->session->set_userdata('requested_page', $this->uri->uri_string());
            redirect('/');
       		}
    }

	public function create()
	{
		$data['getAnnouncmentCategories'] = $this->announcment_model->getAnnouncmentCategories();
		$this->page_construct('announcement/create',$data);
	}

	public function list()
	{
		$data['getAnnouncmentCategories'] = $this->announcment_model->getAnnouncmentCategories();
		$data['announcements'] = $this->announcment_model->announcements();
		foreach ($data['announcements'] as $announcement) {
			$readBy = explode(',',$announcement->read_by);
			if (!array_search($this->session->userdata('user_id'), $readBy)) {
			  array_push($readBy,$this->session->userdata('user_id'));
			  $addReadBy = implode(',', $readBy);
			  $this->announcment_model->updateReadBy($announcement->id,$addReadBy);
			}
		}
		$this->page_construct('announcement/list',$data);
	}

	public function add_announcement()
	{
		$dataTopic = array(
			'name' => $_POST['name'],
			'announcement_category_id' => $_POST['category'],
			'body' => $_POST['announcment_message'],
			'created_by' => $this->session->userdata('user_id'),
			'read_by' => $this->session->userdata('user_id'),
		);
		$getAllDeviceToken = $this->announcment_model->getAllDeviceToken();
		foreach ($getAllDeviceToken as $key) {
			$this->sendNotification($key->token,$_POST['name'],'New Announcement','announcement');
		}
		$this->announcment_model->addAnnouncement($dataTopic);
		$this->session->set_flashdata('message', 'Announcement Created Succesfully');
        redirect(base_url('announcement/list'),'refresh');
	}

	public function getAnnouncementById()
	{
		$getAnnouncementData = $this->announcment_model->getAnnouncementById($this->input->post('getAnnouncementId'));
		echo json_encode($getAnnouncementData);
	}

	public function getUnreadAnnouncement(){
		$announcementRes = $this->announcment_model->getUnreadAnnouncement();
		if(isset($announcementRes[0]->unreadannouncement)){
			$announcementRes = $announcementRes[0]->unreadannouncement;
		}else{
			$announcementRes = 0;
		}
		echo json_encode($announcementRes);
	}


	function sendNotification($token,$message,$title,$type){
		    $url ="https://fcm.googleapis.com/fcm/send";

		    $fields=array(
		        "to"=> $token,
		        "notification"=>array(
		            "body"=>$message,
		            "title"=>$title,
		            "type" =>$type,
		            "icon"=>'',
		            "click_action"=>"https://google.com"
		        )
		    );

		    $headers=array(
		        'Authorization: key=AAAA6sR5wbc:APA91bHbuq4Syw83LdJMKN0U5qXdfQ05-rZAaKL5JT_W5fZEbjqhR9nWfu13d3BKKpKNXgtnSF8XUNJiNXhIMdr22lB8w7bhzKr-tvbzOW9gfJ3QGoo6v4I2OypHkknzt8-l6RF1YjQ2',
		        'Content-Type:application/json'
		    );

		    $ch=curl_init();
		    curl_setopt($ch,CURLOPT_URL,$url);
		    curl_setopt($ch,CURLOPT_POST,true);
		    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
		    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		    curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
		    $result=curl_exec($ch);
		    // print_r($result);
		    curl_close($ch);
		}
}
