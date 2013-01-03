<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
include_once(BASEPATH . '../application/controllers/backend/backend_common.php');

class category extends backend_common {

    public function index() {
        $categories = $this->category_model->getAllCategories();
        $message = $this->session->flashdata('result');
        $data['menu'] = 'category';
        $data['content'] = $this->load->view('backend/category_list', array('categories' => $categories, 'message' =>$message), true);
        $this->setView($data);
    }

    public function edit() {
        $id = $this->uri->rsegment(3);
        $category = $this->category_model->getCategory($id);
        if (!$category) {
            show_404();
        }
        $this->processForm(); 
        $data['menu'] = 'category';
        $data['content'] = $this->load->view('backend/category_form', array('category' => $category, 'message' =>$this->session->flashdata('result')), true);
        $this->setView($data);
    }
    
    public function create(){
        $category = array();
        $category['id'] = '';
        $category['name'] = '';
        $category['show_on_menu'] = '1';
        $category['order'] = '0';
        $category['show_type'] = '';
        $this->processForm();   
        $data['menu'] = 'category';
        $data['content'] = $this->load->view('backend/category_form', array('category' => $category, 'message' =>$this->session->flashdata('result')), true);
        $this->setView($data);
    }
    
    public function delete(){
        $id = $this->uri->rsegment(3);
        if($this->category_model->delete($id)){
            $this->session->set_flashdata('result', '删除成功');
        }else{
            $this->session->set_flashdata('result', '删除失败');
        }
        redirect('backend/category');
    }
    
    public function processForm(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id', 'Id', 'trim|integer');
        $this->form_validation->set_rules('name', '名称', 'trim|required|max_length[10]');
        $this->form_validation->set_rules('show_on_menu', '在菜单显示', 'trim');
        $this->form_validation->set_rules('order', '顺序', 'trim|required|integer');
        $this->form_validation->set_rules('show_type', '显示类型', 'trim|required|');

        $this->form_validation->set_message('required', '%s必填');
        $this->form_validation->set_message('integer', '%s必须是整数');
        $this->form_validation->set_message('max_length', '%s必须小于%d个字');
        $this->form_validation->set_error_delimiters('<div>', '</div>');
        
        if ($this->form_validation->run()) {
            $data = $this->getData();
            if($data['id']){
                $id = $data['id'];
                unset($data['id']);
                if($this->category_model->update($id, $data)){
                    $this->session->set_flashdata('result', '修改成功');
                    redirect('backend/category/'.$id.'/edit');
                }else{
                    $this->session->set_flashdata('result', '修改失败，请重新尝试');
                }
            }else{
                if($this->category_model->create($data)){
                    $this->session->set_flashdata('result', '创建成功');
                    redirect('backend/category');
                }else{
                    $this->session->set_flashdata('result', '创建失败，请重新尝试');
                }
            }
        }
    }
    
    public function getData(){
        $data = array();
        $data['id'] = $this->input->post('id');
        $data['name'] = $this->input->post('name');
        $data['show_on_menu'] = $this->input->post('show_on_menu');
        $data['order'] = $this->input->post('order');
        $data['show_type'] = $this->input->post('show_type');
        return $data;
    }

}

?>