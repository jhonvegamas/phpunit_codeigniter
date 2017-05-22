<?php

class ManagerModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }   

    public function insertTournament($data, $name) {
        $this->db->insert('tournament', $data);
        $r = $this->db->query("select id_tournament from tournament where name = '$name'");        
        $r = $r->result();        
        $phase['id_tournament'] = $r[0]->id_tournament;
        $phase['name'] = $name."1";        
        $this->db->insert('phase', $phase);
    }
    /**
     * Retorna un vector con los torneos
     * @param type $data     
     */
    public function getTournaments() {        
        $data = $this->db->query("select * from tournament");
        if ($data->num_rows() > 0) {
            $data = $data->result();
            return $data;
        } else {
            return false;
        }
    }
}