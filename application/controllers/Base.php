<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('slice');
        $this->load->model('posts_model');
    }

    public function index($guid = null)
    {
        $this->load->model('settings_model');
        $home_page = $this->settings_model->get_setting_by_name('home_page');
        $data['page'] = $this->posts_model->get_post_by_id($home_page->setting_value);

        if($guid == null) {
            $data['posts'] = $this->posts_model->get_all('published');
            $this->slice->view('default.pages.posts', $data);
        } else {
            $data['post'] = $this->posts_model->get_post_by_guid($guid);
            $this->slice->view('default.pages.single', $data);
        }
        
        
    }

}
