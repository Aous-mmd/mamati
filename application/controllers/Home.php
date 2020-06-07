<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Home_model');
    }
    function index()
    {
        $pageName['pageName'] = 'home';
        $this->load->view('start', $pageName);
    }
}
