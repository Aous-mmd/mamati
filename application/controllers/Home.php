<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
        $pageName['pageName'] = 'home';
		$this->load->view('start',$pageName);
	}
}
