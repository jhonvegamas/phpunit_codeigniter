<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SignIn extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('loginModel');
    }

    public function index()
    {
        $this->load->view('signIn');       
    }

    public function ingresar()
    {
        $usser = $this->input->post('user');
        $passw = $this->input->post('pass');
        $result = $this->loginModel->ingresar($usser, $passw);

        if ($result == 1) {
            $this->load->view('index');
        } else {
            $this->load->view('signIn');
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        header("Location: ".base_url());
    }

}
