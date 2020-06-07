<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Login_model');
    }
    function index()
    {
        $this->load->view('admin/pages/login');
    }
    public function login()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user_email', 'User_email', 'required|valid_email|trim');
        $this->form_validation->set_rules('user_password', 'User_password', 'required|max_length[32]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/pages/login');
        } else {
            $user_email = $this->input->post('user_email');
            $user_password = $this->input->post('user_password');
            $data = $this->Login_model->login($user_email, $user_password);
            if (!empty($data)) {
                $newdata = array(
                    'user_name'  => $data->user_name,
                    'user_email'  => $data->user_email,
                    'user_password'  => $data->user_password,
                    'user_id'  => $data->user_id,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($newdata);
                redirect('MY_Admin/dashboard');
            } else {
                $this->load->view('admin/pages/login');
            }
        }
    }
    public function logout()
    {
        session_destroy();
        $this->load->view('admin/pages/login');
    }
    public function dashboard()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('MY_Admin/login');
        }
        $pageName['pageName'] = 'dashboard';
        $this->load->view('admin/start', $pageName);
    }
    public function dsh_setting()
    {
        $pageName['pageName'] = 'dsh_setting';
        $this->load->view('admin/start', $pageName);
    }
    public function update($id)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user_email', 'User_email', 'required|valid_email|trim');
        $this->form_validation->set_rules('user_password', 'User_password', 'required|max_length[32]');
        $this->form_validation->set_rules('user_name', 'User_name', 'required|max_length[32]');
        if ($this->form_validation->run() == FALSE) {
            $this->dsh_setting();
        } else {
            $data = array(
                'user_email' => $this->input->post('user_email'),
                'user_password'  => $this->input->post('user_password'),
                'user_name'  => $this->input->post('user_name')
            );
            $result = $this->Login_model->update($id, $data);
            if (!empty($result)) {
                $newdata = array(
                    'user_name'  => $result->user_name,
                    'user_email'  => $result->user_email,
                    'user_password'  => $result->user_password,
                    'user_id'  => $result->user_id,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($newdata);
                redirect('MY_Admin/dashboard');
            } else {
                $this->dsh_setting();
            }
        }
    }
}
