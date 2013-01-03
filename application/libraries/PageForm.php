<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once(BASEPATH . '../application/libraries/Basearticleform.php');

class PageForm extends Basearticleform{  
    
    public $error = '';
    public function getView(){
        return 'backend/page_form';
    }
    
    public function getData() {
        $data = parent::getData();
        $data['type'] = article_model::$DESCRIPTION;
        return $data;
    }
}