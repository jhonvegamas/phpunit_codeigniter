<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tournament extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model("tournamentModel");
    }

    public function index()
    {
        $name_tournament = ($_GET['get_name']);        
        $this->data['tourn'] = $this->tournamentModel->getTournaments($name_tournament);
        $this->load->view('tournament', $this->data);
    }

}
