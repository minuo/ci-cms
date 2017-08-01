<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->library('slice');
    }

    public function login()
    {
		$this->slice->view('admin.login');
	}

    public function validate()
    {
        $result = $this->auth_model->auth();
        if($result)
        {
            redirect('/ci-admin/dashboard', 'location');
        } else {            
            redirect('/auth/login', 'location');
        }
    }

    public function logout()
    {
		$this->session->sess_destroy();
		return redirect('/');
    }

}