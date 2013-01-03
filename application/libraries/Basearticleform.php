<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * backend login form
 */

abstract class Basearticleform{

    private $validator;

    private $model;

    public $input;
    
    public $error = '';

    public function __construct(){
        $this->load();
        $this->init();
    }

    private function load(){
        $CI = & get_instance();
        $CI->load->library('form_validation');
        $CI->load->model('article_model');
        $this->session = $CI->session;
        
        $this->validator = $CI->form_validation;
        $this->input = $CI->input;
        $this->model  = $CI->article_model;
    }

    private function init(){
        $this->getValidator()->set_rules('title', '标题', 'trim|required|min_length[2]|max_length[30]');
        $this->getValidator()->set_rules('content', '内容', 'trim|required');
        $this->getValidator()->set_rules('category_id', '分类', 'trim|required');
        $this->getValidator()->set_rules('redirect_url', '跳转链接', 'trim|prep_url');
        $this->getValidator()->set_message('required', '%s必填');
        $this->getValidator()->set_message('min_length', '%s最少%d个字');
        $this->getValidator()->set_message('max_length', '%s最多%d个字');
        $this->getValidator()->set_error_delimiters('<div>', '</div>');
        $this->configure();  
    }
    
    public function configure(){
        
    }

    public function set_rule($name, $alias, $rules){
        $this->getValidator()->set_rules($name, $alias, $rules);
    }

    public function getValidator(){
        return $this->validator;
    }
    
    public function getModel(){
        return $this->model;
    }

    public function getPost($name){
        return $this->input->post($name);
    }
    
    abstract public function getView();

    public function isValid(){
        if($this->getValidator()->run()){
            return true;
        }
        return false;
    }
    
    public function getData(){
        $data = array();
        $data['id'] = $this->input->post('id');
        $data['title'] = $this->input->post('title');
        $data['content'] = $this->input->post('content', '');
        $data['category_id'] = $this->input->post('category_id', '');
        $data['img'] = $this->input->post('img', '');
        $data['redirect_url'] = $this->input->post('redirect_url');
        return $data;
    }
    
    public function getDataOf($index){
        $data = $this->getData();
        return isset($data[$index]) ? $data[$index] : null;
    }
    
    public function isNew(){
        return (bool) !$this->getDataOf('id');
    }
    
    public function save(){
        $data = $this->getData();
        if($data['id']){
            $id = $data['id'];
            unset($data['id']);
            return $this->getModel()->update($id, $data);
        }else{
            return $this->getModel()->create($data);
        }
    }
    
    public function getError(){
        return validation_errors();
    }


}