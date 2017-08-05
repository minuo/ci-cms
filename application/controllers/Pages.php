<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if( ! $this->session->userdata('logged_in') ) {
            redirect(base_url('ci-admin'));
        } else {
            $this->load->library('slice');
            $this->load->model('posts_model');
        }
    }

    public function index()
    {
        $data['pages'] = $this->posts_model->get_all_pages();
        
        $this->slice->view('admin.dashboard.pages', $data);
    }

    public function create()
    {
        $this->slice->view('admin.create.page');
    }

    public function store()
    {
        $result = $this->posts_model->create();

        if($result) {
            $this->session->set_flashdata('success', 'Page created successfully!');
            
            redirect(base_url('ci-admin/pages')); 
        } else {
            $this->session->set_flashdata('errors', 'Page could not be created!');
            
            redirect(base_url('ci-admin/pages/create')); 
        }
          
    }

    public function edit($id)
    {
        $data['page'] = $this->posts_model->get_post_by_id($id);

        $this->slice->view('admin.edit.page', $data);
    }

    public function update($id)
    {
        $result = $this->posts_model->update($id);

        if($result) {
            $this->session->set_flashdata('success', 'Page updated successfully!');
            
            redirect(base_url('ci-admin/pages')); 
        } else {
            $this->session->set_flashdata('errors', 'Page could not be updated!');

            redirect(base_url('ci-admin/pages/' . $id . '/edit')); 
        }
    }

    public function destroy($id)
    {
        $result = $this->posts_model->destroy($id);

         if($result) {
            $this->session->set_flashdata('success', 'Page deleted successfully!');
            
            redirect(base_url('ci-admin/pages')); 
        } else {
            $this->session->set_flashdata('errors', 'Page could not be deleted!');

            redirect(base_url('ci-admin/pages/' . $id . '/edit')); 
        }
    }


}
