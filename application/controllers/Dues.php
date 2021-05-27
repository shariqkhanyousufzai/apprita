<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dues extends CI_Controller {

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
        $this->load->model('dues_model');
        if (!$this->ion_auth->logged_in())
			{            
			$this->session->set_userdata('requested_page', $this->uri->uri_string());
            redirect('/');
       		}
    }

	public function add()
	{
		$this->page_construct('dues/add');
	}

	public function list()
	{
		$data['dues'] = $this->dues_model->getAllDues();
		$this->page_construct('dues/list',$data);
	}

	public function create(){
		$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'price' => $this->input->post('price'),
			'start_date' => $this->input->post('start_date'),
			'end_date' => $this->input->post('end_date'),
			'created_by' => $this->session->userdata('user_id')
		);
		if($this->dues_model->insertDues($data)){
			$this->session->set_flashdata('message', 'Dues Created Succesfully');
       		redirect(base_url('dues/list'),'refresh');
		}else{
			$this->session->set_flashdata('message', 'Dues Created Failed');
       		redirect(base_url('dues/list'),'refresh');
		}

	}
}
