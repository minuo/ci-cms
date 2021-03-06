<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if( ! $this->session->userdata('logged_in') ) {
            redirect(base_url('ci-admin'));
        } else {
            $this->load->library('slice');
            $this->load->model('comments_model');
        }       
    }

    public function index()
    {
        $this->slice->view('admin.dashboard.comments');
    }

}