<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if( ! $this->session->userdata('logged_in') ) {
            redirect(base_url('ci-admin'));
        } else {
            $this->load->library('slice');
            $this->load->model('categories_model');
        }
    }

    public function index()
    {
        $data['categories'] = $this->categories_model->get_all();

        $this->slice->view('admin.dashboard.categories', $data);
    }

    public function store()
    {
        $result = $this->categories_model->create();

        if($result) {
            $this->session->set_flashdata('success', 'Category created successfully!');
            
            redirect(base_url('ci-admin/categories')); 
        } else {
           $this->session->set_flashdata('errors', 'Category could not be created!');
            
            redirect(base_url('ci-admin/categories')); 
        }
          
    }

    public function edit($id)
    {
        $data['post'] = $this->categories_model->get_category_by_id($id);

        $this->slice->view('admin.edit.category', $data);
    }

    public function update($id)
    {
        $result = $this->categories_model->update($id);

        if($result) {
            $this->session->set_flashdata('success', 'Category updated successfully!');
            
            redirect(base_url('ci-admin/categories')); 
        } else {
            $this->session->set_flashdata('errors', 'Category could not be updated!');

            redirect(base_url('ci-admin/categories/' . $id . '/edit')); 
        }
    }

    public function destroy($id)
    {
        $result = $this->categories_model->destroy($id);

         if($result) {
            $this->session->set_flashdata('success', 'Category deleted successfully!');
            
            redirect(base_url('ci-admin/categories')); 
        } else {
            $this->session->set_flashdata('errors', 'Category could not be deleted!');

            redirect(base_url('ci-admin/categories/' . $id . '/edit')); 
        }
    }

}