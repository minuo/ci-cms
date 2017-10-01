<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('slice');
        $this->load->model('posts_model');
    }

    /**
	* Index function for home page
	*
	*/
    public function index()
    {
        $data['pages'] = $this->posts_model->get_all('published', 'page');

        $this->load->model('settings_model');
        $home_page = $this->settings_model->get_setting_by_name('home_page');
        $data['post'] = $this->posts_model->get_post_by_id($home_page->setting_value);
        $this->slice->view('default.pages.single', $data);
    }

    /**
    * Checks if a specific $guid is a category
    *@param string $guid the unigue category_guid
    *@return boolean
	*/
    public function is_category($guid)
    {
        $this->load->model('categories_model');

        return ($this->categories_model->get_category_by_guid($guid)) ? true : false;
    }

    /**
    * Checks if a specific $guid is an author
    *@param string $guid the unigue username
    *@return boolean
	*/
    public function is_author($guid) 
    {
        $this->load->model('users_model');

        return ($this->users_model->get_user_by_username($guid)) ? true : false;
    }

    /**
    * Gets all posts
    *@param string $guid optional guid for filtering posts
	*/
    public function posts($guid = null)
    {
        $data['pages'] = $this->posts_model->get_all('published', 'page');

        $this->load->model('settings_model');
        $posts_page = $this->settings_model->get_setting_by_name('posts_page');
        $data['page'] = $this->posts_model->get_post_by_id($posts_page->setting_value);

        if($guid != null) {
            if($this->is_category($guid)) {
                $data['posts'] = $this->posts_model->get_all_by_category($guid);

                $this->slice->view('default.pages.index', $data);
            } elseif ($this->is_author($guid)) {
                $data['posts'] = $this->posts_model->get_all_by_author($guid);
                
                $this->slice->view('default.pages.index', $data);
            } else {
                $data['post'] = $this->posts_model->get_post_by_guid($guid, 'post');
                
                if($data['post']) {
                    $this->slice->view('default.pages.single', $data);
                } else {
                    return redirect(base_url());
                }
            }
        } else {
            $data['posts'] = $this->posts_model->get_all('published', 'post');

            $this->slice->view('default.pages.index', $data);
        }    
        
    }

    /**
    * Gets a spefific page
    *@param string $guid the unigue guid of a page to get
	*/
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
