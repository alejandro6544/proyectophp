<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Codigofacilito_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function crearUsuario($data) {
        $this->db->insert('usuarios', array('idUser' => $data['identificacion'], 'nombreuser' => $data['nombre']));
    }

    function obtenerUsuarios() {
        $query = $this->db->get('usuarios');
        if ($query->num_rows() > 0)
            return $query;
        else
            return false;
    }

    function obtenerUsuariosSegmento($id) {
        $this->db->where('idUser', $id);
        $query = $this->db->get('usuarios');
        if ($query->num_rows() > 0)
            return $query;
        else
            return false;
    }

    function actualizarUsuario($id, $data) {
        $datos = array(
            'idUser' => $data['identificacion'],
            'nombreuser' => $data['nombre']
        );
        $this->db->where('idUser', $id);
        $query = $this->db->update('usuarios', $datos);
    }

}

?>
