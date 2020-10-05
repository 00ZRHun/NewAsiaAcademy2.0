<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_Professional_Course extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->database();		
        $this->load->model('Main_Model');
	}

	public function index(){
		if (!empty($_FILES['image']['name']))
        {
            $this->load->library('upload');
            $config['upload_path'] = './images';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';  
            $config['max_size'] = '5120'; //in KB    
            $config['encrypt_name'] = TRUE;               
            // create directory if not exists
            if (!@is_dir('images')) {
                @mkdir('./images', 0777, TRUE);
            }
			$this->upload->initialize($config);  
            if ($this->upload->do_upload('image'))
            {
                $img = $this->upload->data();
				$image = $img['file_name']; 
            }
            else
            {
                $data['message'] = $this->upload->display_errors();
				$this->load->view("output/error_response", $data);
            }
        }

        if (!empty($_FILES['details']['name']))
        {
            $this->load->library('upload');
            $config['upload_path'] = './images';
            $config['allowed_types'] = 'pdf';  
            $config['max_size'] = '51200'; //in KB    
            $config['encrypt_name'] = TRUE;               
            // create directory if not exists
            if (!@is_dir('images')) {
                @mkdir('./images', 0777, TRUE);
            }
            $this->upload->initialize($config);  
            if ($this->upload->do_upload('details'))
            {
                $pdf = $this->upload->data();
                $details = $pdf['file_name']; 
            }
            else
            {
                $data['message'] = $this->upload->display_errors();
                $this->load->view("output/error_response", $data);
            }
        }

        $data = array(
         	'title' => $this->input->post('title'),
            'image' => $image,
            'details' => $details,
        );
		$this->Main_Model->add_professional_course($data);	
	}
}
?>
