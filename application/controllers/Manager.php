<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

    private $data;

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model("managerModel");
    }
    /**
     * Carga el vector con el equipo 
     */
    public function index() {                
        $this->data['tournaments'] = $this->managerModel->getTournaments();
        $this->load->view("manager", $this->data);
    }
    /**
    * Metodo del controlador que envia los datos a el modelo
    */
    public function insertTournament(){
        $name = $this->input->post("name");
        $data['name'] = $this->input->post("name");
        $data['description'] = $this->input->post("description");
        $data['image_url'] = $this->input->post("image_url");
        $data['color'] = $this->input->post("color");
        $this->managerModel->insertTournament($data, $name);
    }
}