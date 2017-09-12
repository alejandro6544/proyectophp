<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Codigofacilito_model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function crearUsuario($data){
        $this->db->insert('usuarios',array('idUser'=>$data['identificacion'], 'nombreuser'=>$data['nombre']));
    }
}

?>
