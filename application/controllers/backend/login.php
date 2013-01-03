<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once(BASEPATH .'../application/controllers/backend/backend_common.php');

class login extends backend_common {

    public function index()
    {
        if($this->session->userdata('has_login') && $this->session->userdata('id')){
            redirect('backend/dashboard');
        }
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('loginform');
        $error = '';

        if ($this->loginform->isValid())
        {
            redirect('backend/dashboard');
        }
        else
        {
            $error =  $this->session->flashdata('login_error');
            $this->load->view('backend/login', array('error' => $error));
        }

    }

    public function dashboard(){
        $session = $this->session->all_userdata();
        $content = $this->load->view('backend/dashboard', array('session' => $session), true);
        $this->setView(array('content' => $content,'menu' => 'dashboard'));
    }


}
