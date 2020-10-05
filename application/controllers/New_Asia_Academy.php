<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_Asia_Academy extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		// $this->load->model('Short_Course_Model');
	}

	public function index() {
		/* $data = array();
		$data['short_course_list'] =$this->Short_Course_Model->get_short_course(); */
		// $this->load->view('admin/main/includes/header');
		$this->load->view('New_Asia_Academy/index');
		// $this->load->view('admin/main/includes/footer');
	}
}