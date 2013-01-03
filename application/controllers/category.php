<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once(BASEPATH .'../application/controllers/common.php');

class category extends common {

    private $size = 20;
    /*
     * category list page
     */
    public function index()
    {
        $id = $this->uri->rsegment(3);
        $category = $this->category_model->getCategory($id);
        if($category === null) show_404();
        $menu  = $this->getMenu();
        $non_menu = $this->getNonMenuCategories();
        $pageinfo = $this->getPageInfo($id);
        if($category['show_type'] == category_model::$PHOTO){
            $articles = $this->article_model->getArticleWithImageByCategoryId($category['id'], $this->size, $pageinfo['offset']);
            $list_view = $this->load->view('frontend/photo_list', array('articles' => $articles), true);
        }else{
            $articles = $this->article_model->getArticleByCategoryId($category['id'], $this->size, $pageinfo['offset']);
            $list_view = $this->load->view('frontend/news_list', array('articles' => $articles), true);
        }
        $position = array(0 => array('name' => $category['name'], 'url' =>'' ));
        $data = array(
            'header' => $this->load->view('frontend/_header', array('menu' => $menu, 'focus' => 'category_'.$id), true),
            'main' => $this->load->view('frontend/category_main', array(
                                                                        'category' => $category,
                                                                        'non_menu' => $non_menu,
                                                                        'list' => $list_view,
                                                                        'pageinfo' => $pageinfo),
                                                                  true),
            'notice' => $this->load->view('frontend/_notice', array('positions' => $position), true)
        );
        $this->setView($data);
    }

    private function getPageInfo($category){
        $page = (int) $this->uri->rsegment(4);
        $page = $page < 1 ? 1 : $page;
        if($category['type'] == category_model::$PHOTO){
            $count = $this->article_model->getArticleWithImageCountByCategoryId($category['id']);
        }else{
            $count = $this->article_model->getArticleCountByCategoryId($category['id']);
        }
        $totalpages = ceil($count/$this->size);
        $totalpages = $totalpages < 1 ? 1 : $totalpages;
        $page = $totalpages < $page ? $totalpages : $page;
        $offset = ($page - 1) * $this->size;
        return array('page' => $page, 'totalpages' => $totalpages, 'offset' => $offset);
    }

}
