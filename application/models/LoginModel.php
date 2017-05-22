<?php

require_once('application/libraries/User.php');

class LoginModel extends CI_Model
{

    private $user;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->user = new User();
    }

    public function getUser($email)
    {   
        $this->db->select('*');
        $this->db->form('user');
        $this->db->where('email',$email);
        $this->db->query('limit 1');
        
//        $result = $this->db->query("select * from user where email = '$email' LIMIT 1");
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            return $result->row;
        } else {
            return false;
        }
    }

    public function registerUser($data)
    {
        $this->db->insert('user', $data);
    }

    public function ingresar($usser, $passw)
    {
        $this->db->select('email');
        $this->db->from('user');
        $this->db->where('email', $usser);
        $this->db->where('password', $passw);

        $result = $this->db->get();

        if ($result->num_rows() == 1) {
            $r = $result->row();

            $session_user = array(
                's_email' => $r->id,
                'login' => true
            );

            $this->session->set_userdata($session_user);
            return 1;
        } else {
            return 0;
        }
    }

}
