<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete_Professional_Course extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->database();		
        $this->load->model('Main_Model');
	}
	public function index(){
		$id = $this->input->post('id');
		$this->Main_Model->delete_society($id);
	}
}