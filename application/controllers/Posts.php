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
        $this->slice->view('admin.dashboard.posts');
    }

    public function find($guid)
    {
        $this->posts_model->get_post_by_guid($guid);
    }

}