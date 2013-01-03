<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once(BASEPATH . '../application/libraries/Basearticleform.php');

class SlideForm extends Basearticleform{  
    
    public $error = '';
    public $img = '';
    public function configure() {
        $this->set_rule('title', '标题', 'trim|min_length[2]|max_length[30]');
        $this->set_rule('content', '', 'trim');
        $this->set_rule('category_id', '', 'trim');
        $CI = & get_instance();
        $config['upload_path'] = './uploads/slide/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['encrypt_name'] = true;
        $CI->load->library('upload', $config);
        $this->upload  = $CI->upload;
    }
    
    public function getView(){
        return 'backend/slide_form';
    }
    
    public function getData() {
        $data = parent::getData();
        unset($data['category_id']);
        unset($data['content']);
        $data['type'] = article_model::$SLIDE;
        if($this->img){
            $data['img'] = 'slide/' . $this->img;
        }else{
            unset($data['img']);
        }
        return $data;
    }
    
    public function isValid() {
        $request = strtoupper($_SERVER['REQUEST_METHOD']);
        if($request == 'GET') return true;
        if(!$this->isNew() && !$_FILES['img']['name']){
            return parent::isValid();
        }
        if(parent::isValid() && $this->upload->do_upload('img')){
            $data = $this->upload->data();
            $this->img = $data['file_name'];
            return true;
        }
        $this->upload->display_errors('<div>', '</div>');
        $this->error = $this->upload->display_errors();
        return false;
    }
    
}