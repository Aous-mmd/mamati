<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
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
                $this->load->view('admin/login');
        }
        function login_user()
        {
                $this->load->library('form_validation');
                $this->form_validation->set_rules('user_email', 'User_email', 'required|valid_email|trim');
                $this->form_validation->set_rules('user_password', 'User_password', 'required|max_length[32]');
                if ($this->form_validation->run() == FALSE) {
                        $this->load->view('admin/login');
                } else {
                        $user_email = $this->input->post('user_email');
                        $user_password = $this->input->post('user_password');
                        $data = $this->Login_model->login_user($user_email, $user_password);
                        if (!empty($data)) {
                                $newdata = array(
                                        'user_name'  => $data->user_name,
                                        'user_email'  => $data->user_email,
                                        'user_password'  => $data->user_password,
                                        'logged_in' => TRUE
                                );
                                $this->session->set_userdata($newdata);
                                redirect('index.php/Dashboard');
                        } else {
                                $this->index();
                        }
                }
        }
}
