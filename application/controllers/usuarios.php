<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}


class Usuarios extends CI_Controller {

    function __construct() {
        parent::__construct();
        // $this->load->helper('mihelper');
        $this->load->helper('form');
        $this->load->model('codigofacilito_model');
    }

    function index() {
        $data['segmento'] = $this->uri->segment(3);
        print_r($data['segmento']);
        $this->load->view('codigofacilito/headers');
        if (!$data['segmento']) {
            $data['usuariosw'] = $this->codigofacilito_model->obtenerUsuarios();
        } else {
            $data['usuariosw'] = $this->codigofacilito_model->obtenerUsuariosSegmento($data['segmento']);
        }
        $this->load->view('usuarios/usuariosr', $data);
    }

    function nuevo() {
        $this->load->view('codigofacilito/headers');
        $this->load->view('usuarios/formulario');
    }

    function recibirDatos() {
        $data = array(
            'identificacion' => $this->input->post('identificacion'),
            'nombre' => $this->input->post('nombre'));
        $this->codigofacilito_model->crearUsuario($data);
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/bienvenido');
    }

    function editar() {
        $data['id'] = $this->uri->segment(3);
       // echo 'dddd '+$this->uri->segment(3);
        $data['usuario'] = $this->codigofacilito_model->obtenerUsuariosSegmento($data['id']);
        $this->load->view('codigofacilito/headers');
        $this->load->view('usuarios/editar', $data);
    }

    function actualizar() {
        $data = array(
            'identificacion' => $this->uri->segment(3),
            'nombre' => $this->input->post('nombre'));
        //$data = array(
          //  'identificacion' => $this->input->post('identificacion'),//'741', //esta quemado, debe ser dimanico
           // 'nombre' => $this->input->post('nombre'));
      // echo 'ssss'+ $this->uri->segment(3);
        $this->codigofacilito_model->actualizarUsuario($this->uri->segment(3),$data);
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/bienvenido');
    }

}

?>
