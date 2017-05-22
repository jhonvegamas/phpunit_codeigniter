<?php

class TournamentModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }	
    /**
     * Retorna un vector con los torneos
     * @param type $data     
     */
    public function getTournaments($name) {        
        $data = $this->db->query("select te.* from team te, tournament tr 
                                  where te.id_tournament = tr.id_tournament 
                                  and te.id_tournament = (select id_tournament 
                                  from tournament where name = '$name')");
        if ($data->num_rows() > 0) {
            $data = $data->result();
            return $data;
        } else {
            return false;
        }
    }
}