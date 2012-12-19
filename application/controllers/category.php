<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once(BASEPATH .'../application/controllers/common.php');

class category extends common {

    /*
     * category list page
     */
    public function index()
    {
        echo $this->uri->rsegment(3);

        $data = array(
            'header' => $this->load->view('frontend/_header', null, true),
            'main' => $this->load->view('frontend/category_main', null, true),
            'notice' => $this->load->view('frontend/_notice', null, true)
        );
        $this->setView($data);
    }

}
