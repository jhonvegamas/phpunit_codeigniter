<?php

require_once 'application/controllers/Team.php';

class TeamTest extends CI_Controller
{

    private $team;

    function __construct()
    {
        $this->team = new Team();
    }

    public function index()
    {
        echo '¡Ups no deberias estar aqui!' . '<br><br>';
        echo '<a href="' . base_url() . '">Inicio</a>';
    }

    public function test_inserta_el_equipo()
    {
        $data['tournament'] = 'T1';
        $data['team'] = 'Equipo de prueba';
        $this->team->insertTeamTest($data);
        echo TRUE;
    }

    public function eliminar_equipo()
    {
        $data['tournament'] = 'T1';
        $data['team'] = 'Equipo de prueba';
        $this->team->deleteTeam($data);
    }

}
