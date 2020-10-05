<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Short_Course extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('Short_Course_Model');
	}

	public function index(){
		$data = array();
		$data['short_course_list'] =$this->Short_Course_Model->get_short_course();
		$this->load->view('admin/main/includes/header');
		$this->load->view('admin/Short_Course/List',$data);
		// $this->load->view('admin/img');
		$this->load->view('admin/main/includes/footer');
	}

	public function edit(){
		$data = array();
		$data['short_course_data'] = $this->Short_Course_Model->get_where_short_course($this->uri->segment(4));
		/* echo $data;
		echo 123; */
		// echo $data['short_course_data'];
		/* echo $short_course_data;
		echo $this->uri->segment(4); */
		$this->load->view('admin/main/includes/header');
		$this->load->view('admin/Short_Course/Edit',$data);
		$this->load->view('admin/main/includes/footer');
	}

	/* $data['s_em']=$this->input->post('s_em');
	   $data['s_na']=$this->input->post('s_na'); */
	// update
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
			'ori_price' => $this->input->post('ori_price'), 
			'off_price' => $this->input->post('off_price'), 
			'details' => $details_name
		);
		$this->Short_Course_Model->update_short_course($data,$id);
	}
	
	/* public function update(){
		$id=$this->input->post("id");

		$s_em=$this->input->post("s_em");
		$s_na=$this->input->post("s_na");

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] =     'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('file'))
		{
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			$upload_data=$this->upload->data();
			$image_name=$upload_data['file_name'];
		}

		$data=array('s_em'=>$s_em,'s_na'=>$s_na,'file'=>$image_name);
		$this->Students_m->db_update($data,$id);
	} */
	/////////////////////////////////////////////////////////////
	/* public function update(){
        $id=$this->input->post("id");

        $s_em=$this->input->post("s_em");
        $s_na=$this->input->post("s_na");

		if($_FILES[file]['name']!=""){
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|jpe|pdf|doc|docx|rtf|text|txt';
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('file'))
			{
				$error = array('error' => $this->upload->display_errors());
			}
			else
			{
				$upload_data=$this->upload->data();
				$image_name=$upload_data['file_name'];
			}
		}
		else{
			$image_name=$this->input->post('old');
		}
		$data=array('s_em'=>$s_em,'s_na'=>$s_na,'file'=>$image_name);
		$this->Students_m->db_update($data,$id);
	} */


	/////////////////////////////////////////////////////////////
	// Add
	public function add(){
		$this->load->view('admin/main/includes/header');
		$this->load->view('admin/Short_Course/Add');
		$this->load->view('admin/main/includes/footer');
	}
	
	public function add_course(){
		if (!empty($_FILES['image']['name']))
        {
            $this->load->library('upload');
            $config['upload_path'] = './images';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|jpe';  
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
			'ori_price' => $this->input->post('ori_price'),
			'off_price' => $this->input->post('off_price'),
            'details' => $details,
        );
		$this->Short_Course_Model->add_short_course($data);	
	}
	// End of Add
	/////////////////////////////////////////////////////////////

	public function delete() {
	  $id = $this->input->post('id');
	  	$data=array
      	( 
      		'delmode'=>1 
      	);
		$this->Short_Course_Model->delete_short_course($data,$id);
		// where is your id ??????
    }

    public function display_modal(){
    	$id = $this->input->post('id');
    	$course_info = $this->Short_Course_Model->get_short_course_modal($id);
    	echo json_encode($course_info);
    }
}