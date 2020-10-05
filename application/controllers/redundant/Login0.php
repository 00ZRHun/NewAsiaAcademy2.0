<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->request_data = $_REQUEST;

		//load model
		$this->load->model('Login_Model');
	}

	public function index(){
		$this->load->view('admin/login');
	}

	public function login_process(){
		echo "abc";
	}

	public function login_process123(){
		$user_id = isset($this->request_data['user_id']) ? $this->request_data['user_id'] : 0;
		$password = isset($this->request_data['password']) ? $this->request_data['password'] : "";

		//checking userid is exist in database or not
		$check_exist = $this->Login_Model->get_user($user_id);

		//checking if no data in database, run this process
		// if(empty($check_exist)){
			//verify the password and username
			$user = $this->Login_Model->get_user_info($user_id, $password);
			if(isset($user) || !empty($user)){
				//array data that you neeed to post to database
				$data = array(
					'user_id' => $userid,
					'password' => $password
				);

				$session_data = array(
					'user_id' => $user_id
				);

				//save the userdata into session
				$this->session->set_userdata($session_data);

				//redirect to after success login page
				redirect(base_url() . "admin/Main");
			}else{
				//prompt out error message
				$this->session->set_flashdata('error', "Invalid user id or password !");
				//pass data message from controller to view
				redirect(base_url() . "admin/Login", "refresh");
			}
		// }else{
		// 	//prompt out error message
		// 	$this->session->set_flashdata('error', "User ID already exist !");
		// 	//pass data message from controller to view
		// 	redirect(base_url() . "admin/Login", "refresh");
		// }
	}

	public function logout(){
		$session_data = array('user_id');

		$this->session->unset_userdata($session_data);
		redirect(base_url() . "admin/Login");
	}

}
