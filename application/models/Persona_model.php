<?php
class Persona_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function get_persona()
    {
        $query = $this->db->get_where('persona', array('idpersona' => '2'));
        return $query->row_array();
    }
}

