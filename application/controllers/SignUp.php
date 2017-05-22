<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp extends CI_Controller
{

    private $data;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('loginModel');
    }

    public function index()
    {
        $this->load->view('signUp');
    }
    
    public function register()
    {
        $data['email'] = $this->input->post("email");
        $data['password'] = $this->input->post("password");
        $this->loginModel->registerUser($data);
    }
}
