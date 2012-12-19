<?php
class article_model extends CI_Model {

    /*
     * slide type
     */
    public static $SLIDE = 'SLIDE';

    /*
     * summary type
     */
    public static $SUMMARY = 'SUMMARY';

    /*
     * description type
     */
    public static $DESCRIPTION = 'DESCRIPTION';

    /*
     * link type
     */
    public static $LINK = 'LINK';



    public function __construct()
    {
        $this->load->database();
    }

    public function getSlide(){
        $this->db->from('articles');
        $this->db->where('type', self::$SLIDE);
        $this->db->order_by('created_at', 'desc');
        $query = $this->db->get();
        $c = array();
        foreach($query->result_array() as $v){
            $c[] = $v;
        }
        return $c;
    }

    public function getArticleByCategoryId($category_id, $limit = 20, $offset = 0){
        $this->db->select('*');
        $this->db->from('articles');
        $this->db->join('categories', 'categories.id = articles.category_id', 'inner');
        $this->db->where('articles.category_id', $category_id);
        $this->db->order_by('created_at', 'desc');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        $c = array();
        foreach($query->result_array() as $v){
            $c[] = $v;
        }
        return $c;
    }

    public function getArticleWithImageByCategoryId($category_id, $limit = 20, $offset = 0){
        $this->db->select('*');
        $this->db->from('articles');
        $this->db->join('categories', 'categories.id = articles.category_id', 'inner');
        $this->db->where('articles.category_id', $category_id);
        $this->db->where('articles.img is not null');
        $this->db->order_by('created_at', 'desc');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        $c = array();
        foreach($query->result_array() as $v){
            $c[] = $v;
        }
        return $c;
    }

    public function getOneArticleByType($type){
        $this->db->select('*');
        $this->db->from('articles');
        $this->db->where('type', strtoupper($type));
        $this->db->limit(1);
        $a = $this->db->get()->result_array();
        return count($a) ? $a[0] : array();
    }

    public function getArticlesByType($type, $limit){
        $this->db->select('*');
        $this->db->from('articles');
        $this->db->where('type', strtoupper($type));
        $this->db->order_by('created_at', 'desc');
        $this->db->limit($limit);
        $query = $this->db->get();
        $c = array();
        foreach($query->result_array() as $v){
            $c[] = $v;
        }
        return $c;
    }
}