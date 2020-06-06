<?php

class Login_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function login_user($user_email, $user_password)
	{
		$query = $this->db->get_where('tbl_users',array(
			'user_email'=> $user_email , 'user_password' => $user_password));
		$user = $query->row();
		if (!empty($user)) {
			return $user;
		} else {
			return array();
		}
	}
	public function get_all() 
	{
		
	}
}
