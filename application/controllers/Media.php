<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if( ! $this->session->userdata('logged_in') ) {
            redirect(base_url('ci-admin'));
        } else {
            $this->load->library('slice');
            $this->load->model('files_model');
        }
    }

    public function index()
    {   
        $data['files'] = $this->files_model->get_all();   
        $this->slice->view('admin.dashboard.media', $data);
    }

    public function upload()
    {
        $this->files_model->store();
    }

}