<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class backend_common extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('category_model');
        $this->load->model('article_model');
        if(!($this->uri->rsegment(1) == 'login' && $this->uri->rsegment(2) == 'index')){
            if(!$this->session->userdata('has_login')){
                redirect('backend/login');
            }
        }
    }
    
    public function setView($data){
        $data = array_merge(array('session' => $this->session->all_userdata()), $data);
        $this->load->view('backend/layout', $data);
    }
    
    public function pagination($uri, $page){
        return $this->load->view('backend/pagination', array('page' => $page, 'uri' => $uri), true);
    }

    
}
