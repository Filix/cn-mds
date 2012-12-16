<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class category extends CI_Controller {

    private $default_header = array(
        'title' => '',
        'keywords' => '',
        'description' => ''
    );
    public function index()
    {
        $data = array(
            'header' => $this->load->view('frontend/_header', null, true),
            'main' => $this->load->view('frontend/category_main', null, true),
            'notice' => $this->load->view('frontend/_notice', null, true)
        );
        $this->setView($data);
    }

    private function setView($data){
        $data = array_merge($this->default_header, $data);
        $this->load->view('layout', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */