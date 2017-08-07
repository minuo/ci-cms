<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('slice');
        $this->load->model('posts_model');
    }

    public function index()
    {
       $data['posts'] = $this->posts_model->get_all_posts();

       $this->slice->view('pages.index', $data);
    }

}
