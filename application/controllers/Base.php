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
        $data['pages'] = $this->posts_model->get_all('published', 'page');

        $this->load->model('settings_model');
        $home_page = $this->settings_model->get_setting_by_name('home_page');
        $data['post'] = $this->posts_model->get_post_by_id($home_page->setting_value);
        $this->slice->view('default.pages.single', $data);
    }

    public function posts($guid = null)
    {
        $data['pages'] = $this->posts_model->get_all('published', 'page');

        if($guid == null) {
            $data['posts'] = $this->posts_model->get_all('published', 'post');
            $this->slice->view('default.pages.index', $data);
        } else {
            $data['post'] = $this->posts_model->get_post_by_guid($guid, 'post');

            if($data['post']) {
                $this->slice->view('default.pages.single', $data);
            } else {
                return redirect(base_url());
            }      
        }
    }

    public function pages($guid = null)
    {
        $data['pages'] = $this->posts_model->get_all('published', 'page');

        if($guid != null) {
            $data['post'] = $this->posts_model->get_post_by_guid($guid, 'page');

            if($data['post']) {
                $this->slice->view('default.pages.single', $data);
            } else {
                return redirect(base_url());
            }         
        } else {
            return redirect(base_url());
        }        
    }

}
