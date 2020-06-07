<?php

class Home_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	public function get_all()
	{
		$query = $this->db->get('tbl_slider');
		return $query->result_array();
	}
}