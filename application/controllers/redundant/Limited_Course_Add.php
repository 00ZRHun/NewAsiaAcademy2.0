<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Limited_Course_Add extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
			$this->load->view('admin/main/includes/header');
			$this->load->view('admin/main/limited_course_add.php');
			$this->load->view('admin/main/includes/footer');
		
	}

}