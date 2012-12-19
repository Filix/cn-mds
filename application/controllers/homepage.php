<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once(BASEPATH .'../application/controllers/common.php');

class homepage extends common {

    /*
     * homepage
     */
	public function index()
	{
        $menu = $this->getMenu();
        $slide = $this->article_model->getSlide();
        $hotnews = $this->article_model->getArticleByCategoryId(1, 10);
        $company = $this->article_model->getArticleWithImageByCategoryId(3,10);
        $notice = $this->article_model->getArticleByCategoryId(6, 5);
        $meeting = $this->article_model->getArticleByCategoryId(7, 5);
        $summary = $this->article_model->getOneArticleByType(article_model::$SUMMARY);
        $links = $this->article_model->getArticlesByType(article_model::$LINK, 5);

        $data = array(
            'header' => $this->load->view('frontend/_header',
                                           array('menu' => $menu, 'focus' => 'homepage', 'slide' => $slide),
                                           true),
            'main' => $this->load->view('frontend/homepage_main',
                                         array('hot' => $hotnews, 'notice' => $notice, 'meeting' => $meeting,
                                               'summary' => $summary, 'company' => $company, 'links' => $links),
                                         true),
            'notice' => ''
        );
        $this->setView($data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */