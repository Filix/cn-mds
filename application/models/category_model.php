<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class category_model extends CI_Model {

    /*
     * article show type
     */
    public static $ARTICLE = 'ARTICLE';

    /*
     * photo show type
     */
    public static $PHOTO = 'PHOTO';

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

    public function getNonMenuCategories(){
        $this->db->from('categories');
        $this->db->where('show_on_menu', 0);
        $query = $this->db->get();
        $c = array();
        foreach($query->result_array() as $v){
            $c[] = $v;
        }
        return $c;
    }

    public function getCategory($id){
        $this->db->from('categories');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $a = $query->result_array();
        return empty($a) ? null : $a[0];
    }
    
    public function getAllCategories(){
        $this->db->from('categories');
        $query = $this->db->get();
        $c = array();
        foreach($query->result_array() as $v){
            $c[] = $v;
        }
        return $c;
    }
    
    public function getArticleCategories(){
        $this->db->from('categories');
        $this->db->where('show_type', self::$ARTICLE);
        $query = $this->db->get();
        $c = array();
        foreach($query->result_array() as $v){
            $c[] = $v;
        }
        return $c;
    }
    
    public function getPhotoCategories(){
        $this->db->from('categories');
        $this->db->where('show_type', self::$PHOTO);
        $query = $this->db->get();
        $c = array();
        foreach($query->result_array() as $v){
            $c[] = $v;
        }
        return $c;
    }
    
    public function update($id, $data){
        $this->db->where('id', $id);
        return $this->db->update('categories', $data);
    }
    
    public function create($data){
        return $this->db->insert('categories', $data); 
    }
    
    public function delete($id){
        $this->db->delete('articles', array('category_id' => $id)); 
        return $this->db->delete('categories', array('id' => $id)); 
    }
}