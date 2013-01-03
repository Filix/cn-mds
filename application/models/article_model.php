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
    
    /*
     * article type
     */
    public static $ARTICLE = 'ARTICLE';

    private $session = null;


    public function __construct()
    {
        $this->load->database();
        $CI = & get_instance();
        $CI->load->library('session');
        $this->session = $CI->session;
    }
    
    public function getArticle($id){
        $this->db->select('*, articles.id as aid, categories.id as cid');
        $this->db->from('articles');
        $this->db->join('categories', 'articles.category_id = categories.id', 'left');
        $this->db->where('articles.id', $id);
        $this->db->limit(1);
        $query = $this->db->get();
        $a = $query->result_array();
        return empty($a) ? null : $a[0];
    }
    
    public function getPreArticle($created_at, $category_id){
        $this->db->select('*');
        $this->db->from('articles');
        $this->db->where('created_at < "' . $created_at . '"');
        $this->db->where('category_id ', $category_id);
        $this->db->limit(1);
        $query = $this->db->get();
        $a = $query->result_array();
        return empty($a) ? null : $a[0];
    }
    public function getNextArticle($created_at, $category_id){
        $this->db->select('*');
        $this->db->from('articles');
        $this->db->where('created_at > "' . $created_at . '"');
        $this->db->where('category_id ', $category_id);
        $this->db->limit(1);
        $query = $this->db->get();
        $a = $query->result_array();
        return empty($a) ? null : $a[0];
    }

    public function getSlide(){
        $this->db->from('articles');
        $this->db->where('type', self::$SLIDE);
        $this->db->order_by('created_at', 'desc');
        $query = $this->db->get();
        $c = array();
        foreach($query->result_array() as $v){
            if(!$v['img'])                continue;;
            $c[] = $v;
        }
        return $c;
    }

    public function getArticleByCategoryId($category_id, $limit = 20, $offset = 0){
        $this->db->select('*, articles.id as id');
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

    public function getArticleCountByCategoryId($category_id){
        $this->db->select('count(*) as num');
        $this->db->from('articles');
        $this->db->join('categories', 'categories.id = articles.category_id', 'inner');
        $this->db->where('articles.category_id', $category_id);
        $query = $this->db->get();
        $c = $query->result_array();
        return $c[0]['num'];
    }

    public function getArticleWithImageByCategoryId($category_id, $limit = 20, $offset = 0){
        $this->db->select('*, articles.id as id');
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

    public function getArticleWithImageCountByCategoryId($category_id){
        $this->db->select('count(*) as num');
        $this->db->from('articles');
        $this->db->join('categories', 'categories.id = articles.category_id', 'inner');
        $this->db->where('articles.category_id', $category_id);
        $this->db->where('articles.img is not null');
        $query = $this->db->get();
        $c = $query->result_array();
        return $c[0]['num'];
    }


    public function getOneArticleByType($type){
        $this->db->select('*');
        $this->db->from('articles');
        $this->db->where('type', strtoupper($type));
        $this->db->limit(1);
        $a = $this->db->get()->result_array();
        return count($a) ? $a[0] : array();
    }

    public function getArticlesByType($type, $limit, $offset= 0, $join = false){
        $join ? $this->db->select('*, articles.id as aid, categories.id as cid') : $this->db->select('*');; 
        $this->db->from('articles');
        if($join){
            $this->db->join('categories', 'articles.category_id = categories.id', 'left');
        }
        $this->db->where('type', strtoupper($type));
        $this->db->order_by('articles.created_at', 'desc');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        $c = array();
        foreach($query->result_array() as $v){
            $c[] = $v;
        }
        return $c;
    }
    
    public function update($id, $data){
        $this->db->where('id', $id);
        $data['last_edit_user_id'] = $this->session->userdata('id');
        return $this->db->update('articles', $data) ? $id : false;
    }
    
    public function create($data){
        $data['created_at'] = date('Y-m-d H:i:s'); 
        $data['create_user_id'] = $this->session->userdata('id');
        $data['last_edit_user_id'] = $this->session->userdata('id');
        $this->db->insert('articles', $data); 
        return $this->db->insert_id();
    }
    
    public function delete($id){
        $user = $this->load->library('session');
        return $this->db->delete('articles', array('id' => $id)); 
    }
}