<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Professional_Course extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('Professional_Course_Model');
	}

	public function index(){
		$data = array();
		$data['professional_course_list'] =$this->Professional_Course_Model->get_professional_course();
		$this->load->view('admin/main/includes/header');
		$this->load->view('admin/Professional_Course/List',$data);
		$this->load->view('admin/main/includes/footer');
	}

	public function edit(){
		$data = array();
		$data['professional_course_data'] = $this->Professional_Course_Model->get_where_professional_course($this->uri->segment(4));
		/* echo $data;
		echo 123; */
		// echo $data['professional_course_data'];
		/* echo $professional_course_data;
		echo $this->uri->segment(4); */
		$this->load->view('admin/main/includes/header');
		$this->load->view('admin/main/professional_course_edit',$data);
		$this->load->view('admin/main/includes/footer');
	}

	public function update(){
		$id = $this->input->post('id');

		// image
		// if($_FILES['image']['name']!="")
		// === (DOWN)
		if (!empty($_FILES['image']['name']))
		{
			echo "YES";
			$config['upload_path'] = './images/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|jpe';
			// |pdf|doc|docx|rtf|text|txt
			$config['max_size'] = '5120'; //in KB    
            $config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
			// === (DOWN)
			// $this->load->library('upload');			// put bft $config
			// $this->upload->initialize($config);		// put aft $config

			// create directory if not exists
            if (!@is_dir('images')) {
                @mkdir('./images', 0777, TRUE);
			}
			
			if ( ! $this->upload->do_upload('image'))
			{
				// $error = array('error' => $this->upload->display_errors());
				$data['message'] = $this->upload->display_errors();
				$this->load->view("output/error_response", $data);
			}
			else
			{
				$upload_data=$this->upload->data();
				$image_name=$upload_data['file_name'];
			}
		}
		else{
			$image_name=$this->input->post('oldImage');
		}

		// details
		if (!empty($_FILES['details']['name']))
        {
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'pdf';  
            $config['max_size'] = '51200'; //in KB    
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
            // $this->upload->initialize($config);   // put bfr $config
            // $this->upload->initialize($config);   // put afr $config			
			
            // create directory if not exists
            if (!@is_dir('images')) {
                @mkdir('./images', 0777, TRUE);
			}
			
            if ($this->upload->do_upload('details'))
            {
                $pdf = $this->upload->data();
                $details_name = $pdf['file_name']; 
            }
            else
            {
                // $data['message'] = $this->upload->display_errors();
                $data['message'] = "abc";
                $this->load->view("output/error_response", $data);
            }
		}
		else{
			$details_name=$this->input->post('oldDetails');
		}

		$data = array(
			'title' => $this->input->post('title'), 
			'image' => $image_name, 
			'details' => $details_name
		);
		$this->Professional_Course_Model->update_professional_course($data,$id);
	}

	// Add
	public function add(){
		$this->load->view('admin/main/includes/header');
		$this->load->view('admin/main/add_professional_course');
		$this->load->view('admin/main/includes/footer');
	}
	public function add_course(){
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
		$this->Professional_Course_Model->add_professional_course($data);	
	}
	
	public function delete() {
	  $id = $this->input->post('id');
	  	$data=array
      	( 
      		'delmode'=>1 
      	);
		$this->Professional_Course_Model->delete_professional_course($data,$id);
		// where is your id ??????
    }

    public function display_modal(){
    	$id = $this->input->post('id');
    	$course_info = $this->Professional_Course_Model->get_professional_course_modal($id);
    	echo json_encode($course_info);
    }
}