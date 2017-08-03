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
        $this->slice->view('admin.dashboard.pages');
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function read()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

}
