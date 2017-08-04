<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

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
        $data['posts'] = $this->posts_model->get_all();

        $this->slice->view('admin.dashboard.posts', $data);
    }

    public function create() 
    {
        $this->slice->view('admin.create.post');
    }

    public function store()
    {
        $result = $this->posts_model->create();

        if($result) {
            $this->session->set_flashdata('success', 'Post created successfully!');
            
            redirect(base_url('ci-admin/posts')); 
        } else {
            redirect(base_url('ci-admin/posts/create')); 
        }
          
    }

    public function edit($id)
    {
        $data['post'] = $this->posts_model->get_post_by_id($id);

        $this->slice->view('admin.edit.post', $data);
    }

    public function update($id)
    {
        $result = $this->posts_model->update($id);

        if($result) {
            $this->session->set_flashdata('success', 'Post updated successfully!');
            
            redirect(base_url('ci-admin/posts')); 
        } else {
            $this->session->set_flashdata('success', 'Post updated successfully!');

            redirect(base_url('ci-admin/posts/' . $id . '/edit')); 
        }
    }

    public function destroy($id)
    {
        $result = $this->posts_model->destroy($id);

         if($result) {
            $this->session->set_flashdata('success', 'Post deleted successfully!');
            
            redirect(base_url('ci-admin/posts')); 
        } else {
            $this->session->set_flashdata('errors', 'Post coule not be deleted!');

            redirect(base_url('ci-admin/posts/' . $id . '/edit')); 
        }
    }

}