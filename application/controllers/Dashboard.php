<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        if( ! $this->session->userdata('logged_in') ) {
            redirect(base_url('ci-admin'));
        } else {
            $this->load->library('slice');
            $this->load->model('posts_model');
            $this->load->model('comments_model');
        }
    }

    public function index()
    {
        // Get all of each type
        $data['posts'] = $this->posts_model->get_all();
        $data['comments'] = $this->comments_model->get_all();
        
        $this->slice->view('admin.dashboard.index', $data);
    }

}