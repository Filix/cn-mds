<?php
class category_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function getMenuCategories(){
        $this->db->from('categories');
        $this->db->where('show_on_menu', 1);
        $this->db->order_by('order', 'asc');
        $query = $this->db->get();
        $c = array();
        foreach($query->result_array() as $v){
            $c[] = $v;
        }
        return $c;
    }
}