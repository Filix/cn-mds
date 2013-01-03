<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once(BASEPATH . '../application/libraries/Basearticleform.php');

class LinkForm extends Basearticleform{  
    
    public function getView(){
        return 'backend/link_form';
    }
    
    public function getData() {
        $data = parent::getData();
        unset($data['content']);
        unset($data['category_id']);
        $data['type'] = article_model::$LINK;
        return $data;
    }
    
    public function configure(){
        $this->getValidator()->set_rules('redirect_url', '跳转链接', 'trim|prep_url|required');
        $this->getValidator()->set_message('required', '%s必填');
        $this->set_rule('content', '', 'trim');
        $this->set_rule('category_id', '', 'trim');
    }
    
}