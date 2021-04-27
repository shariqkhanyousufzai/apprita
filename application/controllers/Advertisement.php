<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Advertisement extends CI_Controller {

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
        $this->load->model('advertisement_model');
        $this->load->library('form_validation');
        if (!$this->ion_auth->logged_in())
			{            
			$this->session->set_userdata('requested_page', $this->uri->uri_string());
            redirect('/');
       		}
    }

	public function create()
	{
		$this->page_construct('advertisement/create');
	}

	public function list()
	{
		$data['getAllAdvertisements'] = $this->advertisement_model->getAllAdvertisements();
		$this->page_construct('advertisement/list',$data);
	}

	public function add()
	{
		$this->load->helper('update_helper');
		$this->form_validation->set_rules('fname', 'fname', 'required');
		$this->form_validation->set_rules('lname', 'lname', 'required');
		$this->form_validation->set_rules('phone', 'phone', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('address1', 'address1', 'required');
		$this->form_validation->set_rules('postcode', 'postcode', 'required');
		$this->form_validation->set_rules('city', 'city', 'required');
		$this->form_validation->set_rules('state', 'state', 'required');
		$this->form_validation->set_rules('country', 'country', 'required');
		$this->form_validation->set_rules('delivery', 'delivery', 'required');
		$this->form_validation->set_rules('price', 'price', 'required');
		if($this->form_validation->run() === TRUE){
			if (isset($_FILES['advertisement_avatar']['name']) && !empty($_FILES['advertisement_avatar']['name'])) {
			$_FILES['advertisement_avatar']['name'] = preg_replace('/\s+/', '_', $_FILES['advertisement_avatar']['name']); 
			$image_extension = pathinfo($_FILES['advertisement_avatar']['name'], PATHINFO_EXTENSION);
			$path = './assets/uploads/advertisement';
			$file_name = $_FILES['advertisement_avatar']['name'];
			$form_name = 'advertisement_avatar';
			$check_upload = upload_image($file_name, $form_name, $path);
			$avatar_name = $file_name;
			} 
			$data = array(
				'first_name' => $this->input->post('fname'),
				'last_name' => $this->input->post('lname'),
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'address1' => $this->input->post('address1'),
				'address2' => $this->input->post('address2'),
				'postcode' => $this->input->post('postcode'),
				'city' => $this->input->post('city'),
				'state' => $this->input->post('state'),
				'country' => $this->input->post('country'),
				'delivery' => $this->input->post('delivery'),
				'price' => $this->input->post('price'),
				'advertisement_avatar' => $file_name,
				'created_by' => $this->session->userdata('user_id'),
			);
			if($this->advertisement_model->createAdvertisement($data)){
				$this->session->set_flashdata('message',  'Advertisement Added Successful');
        	    redirect(base_url('advertisement/list'),'refresh');
			}else{
				$this->session->set_flashdata('message',  validation_errors());
        	    redirect(base_url('advertisement/create'),'refresh');
			}
		}else{
			$this->session->set_flashdata('message',  validation_errors());
        	redirect(base_url('advertisement/create'),'refresh');
		}
		
	}

}
