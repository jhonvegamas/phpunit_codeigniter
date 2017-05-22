<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'application/libraries/TeamO.php';

class Team extends CI_Controller
{

    private $team;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model("teamModel");
        $this->load->library("team");
        $this->team = new TeamO();
    }

    /**
     * Carga el vector con el equipo 
     */
    public function index()
    {
        $name_tournament = ($_GET['name_tournament']);
        $this->data['teams'] = $this->teamModel->getTeams($name_tournament);
        $this->load->view("teams", $this->data);
    }

    public function insertTeam()
    {
        $tournament = $this->input->post("name_tournament");
        $team = $this->input->post("name");
        $this->team->registerTeam($team, $tournament);
        $this->teamModel->insertTeam($this->team->getTeam());
    }

    public function insertTeamTest($data)
    {
        $this->team->registerTeam($data['team'], $data['tournament']);
        $this->teamModel->insertTeam($this->team->getTeam());
    }

    public function deleteTeam($data)
    {
        $this->team->registerTeam($data['team'], $data['tournament']);
        $this->teamModel->deleteTeam($this->team->getTeam());
    }

    public function getTeam($data)
    {
        
    }

}
