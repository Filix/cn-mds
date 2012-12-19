<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class article extends CI_Controller {


    public function index()
    {
        $data = array(
            'header' => $this->load->view('frontend/_header', null, true),
            'main' => $this->load->view('frontend/category_main', null, true),
            'notice' => $this->load->view('frontend/_notice', null, true)
        );
        $this->setView($data);
    }


}
