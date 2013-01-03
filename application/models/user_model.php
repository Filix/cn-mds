<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function getUserByName($name){
        $this->db->where('name', $name);
        $this->db->limit(1);
        $a = $this->db->get('users')->result_array();
        return count($a) ? $a[0] : null;
    }

    public function updateLastLogin($id){
        $this->db->where('id', $id);
        $this->db->update('users', array('last_login' => date('Y-m-d H:i:s')));
    }
}