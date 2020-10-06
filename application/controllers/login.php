<?php

defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('session');
        if ($this->session->userdata('id') != null) {
            redirect('CUsers/dashboarddata');
        }
    }

    public function index()
    {
        $data['login'] = true;
        $this->load->view('template/template', $data);
    }

    public function login()
    {
        $this->load->model('M_login');
        $username = $_POST['username'];
        $pass = sha1($_POST['pass']);
        $user = $this->M_login->login($username, $pass);
        if ($user == null) {
            $data['message'] = 'Username and password did not match!';
            $data['login'] = true;
            $this->load->view('template/template', $data);
        } else {
            $session_data = [
                'id' => $user->MaNV
            ];
            $this->session->set_userdata($session_data);
            redirect('CUsers/dashboarddata');
        }
    }
}
