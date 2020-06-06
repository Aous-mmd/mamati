<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Login_model');
    }
    public function index()
    {
        $pageName = 'setting';
        $this->load->view('admin/dashboard',$pageName);
    }
}
