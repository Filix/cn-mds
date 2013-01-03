<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * backend login form
 */

class Loginform{

    private $validator;

    private $outh;

    private $input;

    public function __construct(){
        $this->load();
        $this->init();
    }

    private function load(){
        $CI = & get_instance();
        $CI->load->library('form_validation');
        $CI->load->library('outh');
        $this->session = $CI->session;

        $this->validator = $CI->form_validation;
        $this->outh = $CI->outh;
        $this->input = $CI->input;
    }

    private function init(){
        $this->getValidator()->set_rules('username', 'Username', 'trim|required|min_length[2]|max_length[10]');
        $this->getValidator()->set_rules('password', 'Password', 'trim|required');
    }

    public function set_rule($name, $alias, $rules){
        $this->getValidator()->set_rules($name, $alias, $rules);
    }

    public function getValidator(){
        return $this->validator;
    }

    public function getOuth(){
        return $this->outh;
    }

    public function getPost($name){
        return $this->input->post($name);
    }

    public function isValid(){
        if($this->getValidator()->run() && $this->getOuth()->login(trim($this->getPost('username')), trim($this->getPost('password')), $this->getPost('remember'))){
            return true;
        }
        $this->getOuth()->getSession()->set_flashdata('login_error', '用户名或密码错误');
        return false;
    }


}