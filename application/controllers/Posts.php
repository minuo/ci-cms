<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('slice');
        $this->load->model('posts_model');
    }

    public function index($guid)
    {
        $this->posts_model->get_post_by_guid($guid);
    }

}