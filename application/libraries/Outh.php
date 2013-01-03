<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Outh
 */

class Outh {

    private $model = null;

    private $key = '3w.cn-mds.org';

    private $session;

    public function __construct(){
        $CI = & get_instance();
        $CI->load->model('user_model');
        $CI->load->library('session');
        $this->model = $CI->user_model;
        $this->session = $CI->session;
    }

    private function getModel(){
        return $this->model;
    }

    public function getSession(){
        return $this->session;
    }

    public function login($username, $password, $remember){
        if(!$user = $this->getModel()->getUserByName($username)){
            return false;
        }
        if($this->encrypt($password, $user['salt']) == $user['password']){
            $this->getModel()->updateLastLogin($user['id']);
            $userdata = array(
                'id' => $user['id'],
                'username' => $user['name'],
                'last_login' => $user['last_login'],
                'has_login' => true
            );
            $this->getSession()->set_userdata($userdata);
            return true;
        }
        return false;
    }

    private function encrypt($password, $salt){
        return md5($salt . md5($password . $this->key));
    }
}