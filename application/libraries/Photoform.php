<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once(BASEPATH . '../application/libraries/SlideForm.php');

class PhotoForm extends SlideForm{  
    
    public $error = '';
    public $img = '';
    public function configure() {
        $this->set_rule('title', '标题', 'trim|required|min_length[2]|max_length[30]');
        $this->set_rule('content', '内容', 'trim|required');
        $CI = & get_instance();
        $config['upload_path'] = './uploads/photo/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['encrypt_name'] = true;
        $CI->load->library('upload', $config);
        $this->upload  = $CI->upload;
    }
    
    public function getView(){
        return 'backend/photo_form';
    }
    
    public function getData() {
        $data = parent::getData();
        $data['type'] = article_model::$ARTICLE;
        $data['category_id'] = $this->input->post('category_id', '');
        if($this->img){
            $data['img'] = 'photo/' . $this->img;
        }else{
            unset($data['img']);
        }
        return $data;
    }
    
    

}