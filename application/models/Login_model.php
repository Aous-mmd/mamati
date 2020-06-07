<?php

class Login_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	public function get_all()
	{
		$query = $this->db->get('tbl_users');
		return $query;
	}
	public function login($user_email, $user_password)
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
	public function update($id, $data)
	{
		$this->db->where('user_id', $id);
		$this->db->update('tbl_users', $data);
		$query = $this->db->get_where('tbl_users',array('user_id'=>$id));
		$user = $query->row();
		if (!empty($user)) {
			return $user;
		} else {
			return array();
		}
	}
}
