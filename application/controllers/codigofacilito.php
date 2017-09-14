<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Codigofacilito extends CI_Controller {

    function __construct() {
        parent::__construct();
        // $this->load->helper('mihelper');
        $this->load->helper('form');
        $this->load->model('codigofacilito_model');
    }

    function index() {
       
        $this->load->library('menu', array('Inicio', 'Contacto', 'Curso'));
        $data['mi_menu'] = $this->menu->construirMenu();
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/bienvenido', $data)
                ;
               
    }

    function ayuda() {
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/bienvenido');
    }

    function nuevo() {
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/formulario');
    }
    function recibirDatos(){
        
        $data = array (
            'identificacion' => $this->input->post('identificacion'),
            'nombre' => $this->input->post('nombre'));
        $this->codigofacilito_model->crearUsuario($data);
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/bienvenido');
    }

}

?>
