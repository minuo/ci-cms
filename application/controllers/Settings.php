<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

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
        
        $this->slice->view('admin.dashboard.settings', $data);
    }

}