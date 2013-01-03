<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class common extends CI_Controller {

    protected $default_header = array(
        'title' => '',
        'keywords' => '',
        'description' => ''
    );

    public function __construct(){
        parent::__construct();
        $this->load->model('category_model');
        $this->load->model('article_model');
    }

    protected  function getNonMenuCategories()
    {
        return $this->category_model->getNonMenuCategories();
    }

    protected function getMenu(){
        return $this->category_model->getMenuCategories();
    }

    protected function setView($data){
        $data = array_merge($this->default_header, $data);
        $this->load->view('layout', $data);
    }
}
