<?php
class Login_Model extends CI_Model{
	//1. $query->result() - display data list
	//2. $query->row_array() - display row data

	public function __construct(){
		parent::__construct();
	}

	public function get_user($user_id){
		$this->db->select("*");
		$this->db->from("admin");
		$this->db->where("user_id", $user_id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_user_info($user_id, $password){
		$this->db->select("*");
		$this->db->from("admin");
		$this->db->where("user_id", $user_id);
		$this->db->where("password", $password);
		$query = $this->db->get();
		return $query->row_array();
	}
}
?>