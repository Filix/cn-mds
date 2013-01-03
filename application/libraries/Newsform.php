<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once(BASEPATH . '../application/libraries/Basearticleform.php');

class NewsForm extends Basearticleform{  
    
    public $error = '';
    public function getView(){
        return 'backend/news_form';
    }
    
    public function getData() {
        $data = parent::getData();
        $data['type'] = article_model::$ARTICLE;
        return $data;
    }
}