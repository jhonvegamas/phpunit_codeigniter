<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('application/libraries/User.php');

class Login extends CI_Controller
{

    private $user;

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('loginModel');
        $this->user = new User();
    }

    /**
     * Carga la vista login
     */
    public function index()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $row = $this->loginModel->getUser($email);
        if ($row != null) {
            if ($row[0]->password == $password) {
                $data = array(
                    'email' => $email,
                    'id' => $row[0]->id,
                    'login' => true
                );
                $this->session->set_userdata($data);
            } else {
                echo 'error';
                header("Location: " . base_url());
            }
        } else {
            echo 'error';
            header("Location: " . base_url());
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        header("Location: " . base_url());
    }

    /**
     * Metodo del controlador que envia los datos a el modelo
     */
    public function registUser()
    {
        $data['user'] = $this->input->post('user');
        $data['password'] = $this->input->post('password');
        $this->loginModel->registUser($data);
    }

}
