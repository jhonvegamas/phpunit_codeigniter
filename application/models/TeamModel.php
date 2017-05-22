<?php

class TeamModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * inserta un equipo a la base de datos
     * @param Array $data [team,tournament] = nombre del equipo, nombre del torneo
     */
    public function insertTeam($data)
    {
        $this->db->insert('team', $data);
    }

    public function deleteTeam($data)
    {
        $this->db->where('name', $data['name']);
        $this->db->where('tournament', $data['tournament']);
        $this->db->delete('team');        
    }

    /**
     * Retorna un vector todos los equipos de la base de datos
     * @return type $data or false
     */
    public function getTeams($name)
    {
        $data = $this->db->query("select te.* from team te, tournament tr 
                                  where te.id_tournament = tr.id_tournament 
                                  and te.id_tournament = (select id_tournament 
                                  from tournament where name = '$name') ;");
        if ($data->num_rows() > 0) {
            $data = $data->result();
            return $data;
        } else {
            return false;
        }
    }

}
