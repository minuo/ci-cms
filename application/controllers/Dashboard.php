<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        if( ! $this->session->userdata('logged_in') ) {
            redirect(base_url('auth/login'));
        } else {
            $this->load->library('slice');
            $this->load->model('posts_model');
            $this->load->model('comments_model');
            $this->load->model('works_model');
            $this->load->model('messages_model');
        }
    }

    public function index()
    {
        // Get all of each type
        $data['posts'] = $this->posts_model->get_all();
        $data['comments'] = $this->comments_model->get_all();
        $data['works'] = $this->works_model->get_all();
        $data['messages']= $this->messages_model->get_all();

        // Get all unread and pending comments and messages
        $data['pending'] = $this->comments_model->get_pending();
        $data['unread']= $this->messages_model->get_unread();
        
        $this->slice->view('admin.dashboard.index', $data);
    }

}