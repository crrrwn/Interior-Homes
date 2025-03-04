<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class CategoriesController extends Controller {
    
    public function __construct() {
        parent::__construct();
        $this->call->model('Users_model');
    }
    
    public function index() {
        $data['active'] = 'categories';
        $data['cat'] = $this->Users_model->getAllCategories();
        $this->call->view('admin/chop/categories', $data);
    }
    
    public function add() {
        $category_name = $this->io->post('newcat');
        
        if($this->Users_model->addCategory($category_name)) {
            $this->session->set_flashdata('success', 'Category added successfully');
        } else {
            $this->session->set_flashdata('error', 'Failed to add category');
        }
        
        redirect('categories');
    }
    
    public function delete($id) {
        if($this->Users_model->deleteCategory($id)) {
            $this->session->set_flashdata('success', 'Category deleted successfully');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete category');
        }
        
        redirect('categories');
    }
}

