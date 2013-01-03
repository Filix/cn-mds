<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once(BASEPATH .'../application/controllers/common.php');

class article extends common {


    public function index()
    {   
        $id = $this->uri->rsegment(3);
        $article = $this->article_model->getArticle($id);
        if(!$article || !in_array($article['type'], array(article_model::$ARTICLE, article_model::$DESCRIPTION))){
            show_404();
        }
        $menu  = $this->getMenu();
        $non_menu = $this->getNonMenuCategories();
        if($article['type'] == article_model::$ARTICLE){
            $pre_news = $this->article_model->getPreArticle($article['created_at'], $article['cid']);
            $next_news = $this->article_model->getNextArticle($article['created_at'], $article['cid']);
            $positions = array(0 => array('name' =>$article['name'], 'url' => 'category/'.$article['cid'].'.html'), 1 => array('name' => $article['title'], 'url' => ''));
        }else{
            $pre_news = null; 
            $next_news = null;
            $positions = array(0 => array('name' =>$article['title'], 'url' => ''));
        }
        
        $data = array(
            'header' => $this->load->view('frontend/_header', array('focus' => 'category_'.$article['cid'],'menu' => $menu
            ), true),
            'main' => $this->load->view('frontend/article_main', array(
                                                                'article' =>$article,
                                                                'non_menu' => $non_menu,
                                                                'pre_news' => $pre_news,
                                                                'next_news' => $next_news,
                                                                ), true),
            'notice' => $this->load->view('frontend/_notice', array('positions' => $positions), true)
        );
        $this->setView($data);
    }


}
