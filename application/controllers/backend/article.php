<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
include_once(BASEPATH . '../application/controllers/backend/backend_common.php');

class article extends backend_common {

    public function index() {
        $this->listcommon(article_model::$ARTICLE, 'backend/article', 'article');
    }
    
    public function link() {
        $this->listcommon(article_model::$LINK, 'backend/link', 'article');
    }
    public function slide() {
        $this->listcommon(article_model::$SLIDE, 'backend/slide', 'article');
    }
    
    public function listcommon($type, $uri, $menu){
        $page = (int) $this->input->get('page');
        $page = !$page ? 1 : $page;
        $data['size'] = 20;
        $articles = $this->article_model->getArticlesByType($type, $data['size'], ($page - 1) * $data['size'], true);
        $pagination = $this->load->view('backend/pagination', array('uri' => $uri, 'page' => $page), true);
        $data['content'] = $this->load->view('backend/article_list', array('articles' => $articles, 'menu' => $menu, 'pagination' => $pagination), true);
        $this->setView($data);
    }

    public function edit() {
        $id = $this->uri->rsegment(3);
        $article = $this->article_model->getArticle($id);
        if (!$article) {
            show_404();
        }
        $this->common($article);
        
    }
    
    public function getForm($article){
        if($article['type'] == article_model::$LINK){
            $this->load->library('linkform');
            $this->form = $this->linkform;
        }elseif($article['type'] == article_model::$SLIDE){
            $this->load->library('slideform');
            $this->form = $this->slideform;
        }elseif($article['type'] == article_model::$DESCRIPTION){
            $this->load->library('pageform');
            $this->form = $this->pageform;
        }elseif($article['show_type'] == category_model::$PHOTO){
            $this->load->library('photoform');
            $this->form = $this->photoform;
        }else{
            $this->load->library('newsform');
            $this->form = $this->newsform;
        }
    }
    
    public function createnews(){
        $article = array();
        $article['aid'] = '';
        $article['title'] = '';
        $article['content'] = '';
        $article['category_id'] = '';
        $article['img'] = '';
        $article['redirect_url'] = '';
        $article['type'] = article_model::$ARTICLE;
        $article['show_type'] = '';
        $this->common($article);
    }
    
    public function createpicnews(){
        $article = array();
        $article['aid'] = '';
        $article['title'] = '';
        $article['content'] = '';
        $article['category_id'] = '';
        $article['img'] = '';
        $article['redirect_url'] = '';
        $article['type'] = article_model::$ARTICLE;
        $article['show_type'] = category_model::$PHOTO;
        $this->common($article);
    }
    
    public function createlink(){
        $article = array();
        $article['aid'] = '';
        $article['title'] = '';
        $article['content'] = '';
        $article['category_id'] = '';
        $article['img'] = '';
        $article['redirect_url'] = '';
        $article['type'] = article_model::$LINK;
        $article['show_type'] = '';
        $this->common($article);
    }
    
    public function createslide(){
        $article = array();
        $article['aid'] = '';
        $article['title'] = '';
        $article['content'] = '';
        $article['category_id'] = '';
        $article['img'] = '';
        $article['redirect_url'] = '';
        $article['type'] = article_model::$SLIDE;
        $article['show_type'] = article_model::$SLIDE;
        $this->common($article);
    }
    
    public function processForm($category){
        $this->form_validation->set_rules('title', '标题', 'trim|required');
        $content_validator = in_array($article['type'], array(article_model::$SLIDE, article_model::$LINK)) ? '' : '';
        $this->form_validation->set_rules('content', '内容', 'trim|required');
        $this->form_validation->set_rules('category_id', '分类', 'trim|required');
        
        $this->form_validation->set_message('required', '%s必填');
        $this->form_validation->set_error_delimiters('<div>', '</div>');
        
        
    }
    private function common($article){
        $data['article'] = $article;
        if($article['show_type'] == category_model::$PHOTO){
            $categories = $this->category_model->getPhotoCategories();    
        }else{
            $categories = $this->category_model->getArticleCategories();
        }
        $this->getForm($article);
        $request = strtoupper($_SERVER['REQUEST_METHOD']);
        if($request == 'POST' && $this->form->isValid()){
            if($id = $this->form->save()){
                $this->session->set_flashdata('result', '修改成功');
                redirect('backend/article/'.$id.'/edit');
            }else{
                $this->session->set_flashdata('result', '修改失败，请重新尝试');
            }
        }
        
        $data['content'] = $this->load->view($this->form->getView(), array(
            'article' => $article, 
            'menu' => 'article', 
            'error' => validation_errors() . $this->form->error,
            'categories' => $categories,
            'message' =>$this->session->flashdata('result')
            ), true);
        $this->setView($data);
    }

}

?>