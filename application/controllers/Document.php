<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Document extends CI_Controller {

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
        $this->load->model('document_model');
        $this->load->helper("file");
        $this->load->library('upload');
        if (!$this->ion_auth->logged_in())
			{            
			$this->session->set_userdata('requested_page', $this->uri->uri_string());
            redirect('/');
       		}
    }

	public function index()
	{
		$data['attachments'] = $this->document_model->getFiles();
		$this->page_construct('document/add',$data);
	}


	public function create()
	{
		$getType = $this->input->post('resource_type');
		$cpt = count($_FILES['document']['name']);
		$files = $_FILES;
		for($i=0; $i<$cpt; $i++)
		{ 
			$img_type = $files['document']['type'][$i];
			$img_name = trim($files['document']['name'][$i]);
			$tmp = explode('.', $img_name);
			$file_ext = end($tmp);
			$_FILES['document']['name']= $files['document']['name'][$i];
			$_FILES['document']['type']= $files['document']['type'][$i];
			$_FILES['document']['tmp_name']= $files['document']['tmp_name'][$i];
			$_FILES['document']['error']= $files['document']['error'][$i];
			$_FILES['document']['size']= $files['document']['size'][$i];    
			$this->upload->initialize($this->set_upload_options($img_name));
			if ($_FILES['document']['name'] != '' ) {
				if (!$this->upload->do_upload('document'))
				{
					$error = array('error' => $this->upload->display_errors());
				}else{
					$dataImage[] = $img_name;
				}
			}
			$data = array(
				'name' =>  $img_name,
				'resource_type' =>  $getType,
				'path' =>  base_url('assets/uploads/document/'.$img_name),
				'created_by' =>  $this->session->userdata('user_id'),
			);
			$this->document_model->insertAttachment($data);
		}
		$this->session->set_flashdata('message', 'File Uploaded Succesfully');
        redirect(base_url('document'),'refresh');
		
	}

	private function set_upload_options($imei_img = NULL)
        {  
            $config = array();
            $config['upload_path']   = 'assets/uploads/document/';
            $config['allowed_types'] = '*';
            $config['max_size']      = 1048576;
            $config['file_name']     =  $imei_img;
            $config['remove_spaces']     =  true;
            return $config;
    }
}
