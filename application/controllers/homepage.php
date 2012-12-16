<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class homepage extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    private $default_header = array(
        'title' => '',
        'keywords' => '',
        'description' => ''
    );
	public function index()
	{
        $this->load->model('category_model');
        $this->load->model('article_model');
        $menu = $this->category_model->getMenuCategories();
        $slide = $this->article_model->getSlide();

        $data = array(
            'header' => $this->load->view('frontend/_header', array('menu' => $menu, 'focus' => 'homepage', 'slide' => $slide), true),
            'main' => $this->load->view('frontend/homepage_main', null, true),
            'notice' => ''
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