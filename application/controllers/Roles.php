<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if( ! $this->session->userdata('logged_in') ) {
            redirect(base_url('ci-admin'));
        } else {
            $this->load->library('slice');
            $this->load->model('usertypes_model');
        }
    }

    public function index()
    {
        $data['roles'] = $this->usertypes_model->get_all();

        $this->slice->view('admin.dashboard.roles', $data);
    }

    public function create()
    {
        $this->slice->view('admin.create.role');
    }

    public function store()
    {
        $result = $this->usertypes_model->create();

        if($result == true) {
            $this->session->$this->session->set_flashdata('success', 'Role created successfully!');
            
            redirect(base_url('ci-admin/roles')); 
        } else {
            redirect(base_url('ci-admin/roles/create')); 
        }
          
    }

    public function edit($id)
    {
        
    }
}