<?php

class TeamO
{

    /** @var string Nombre del equipo */
    private $name;

    /** @var string nombre del torneo */
    private $tournament;

    /**
     * Registrar un equipo
     * @param string $name nombre del equipo nuevo
     * @param string $tournament  nombre del torneo
     */
    function registerTeam($name, $tournament)
    {
        $this->name = $name;
        $this->tournament = $tournament;
    }

    /**
     * Trae el nombre del torneo al que esta asociado el equipo
     * @return string nombre torneo
     */
    public function getTournament()
    {
        return $this->tournament;
    }

    /**
     * Trae el nombre del equipo
     * @return string nombre del equipo
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Cambia el nombre del equipo
     * @param string $name nombre equipo
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getTeam()
    {
        $data['name'] = $this->name;
        $data['tournament'] = $this->tournament;
        return $data;
    }

}
