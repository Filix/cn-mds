<?php
class article_model extends CI_Model {

    /*
     * slide type
     */
    public static $SLIDE = 'SLIDE';

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
}