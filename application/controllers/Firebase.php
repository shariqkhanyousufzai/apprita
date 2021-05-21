<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Firebase extends CI_Controller {

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
        $this->load->model('firebase_model');
        if (!$this->ion_auth->logged_in())
			{            
			$this->session->set_userdata('requested_page', $this->uri->uri_string());
            redirect('/');
       		}
    }

	public function add_token()
	{
		if(!$this->firebase_model->checkToken($this->input->post('token'))){
			$data = array(
			'token' => $this->input->post('token'),
			'user_id' => $this->session->userdata('user_id'),
			);
			$this->firebase_model->insertToken($data);
		}
		
	}
}
