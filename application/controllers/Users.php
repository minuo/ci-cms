<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if( ! $this->session->userdata('logged_in') ) {
            redirect(base_url('ci-admin'));
        } else {
            $this->load->library('slice');
            $this->load->model('users_model');
            $this->load->model('usertypes_model');
        }
    }

    public function index()
    {
        $data['users'] = $this->users_model->get_all();
        $this->slice->view('admin.dashboard.users', $data);
    }

    public function create()
    {
        $data['roles'] = $this->usertypes_model->get_all();
        $this->slice->view('admin.create.user', $data);
    }

    public function store()
    {
        $result = $this->users_model->create();

        if($result == true) {
            $this->session->set_flashdata('success', 'User created successfully!');
            
            redirect(base_url('ci-admin/users')); 
        } else {
            redirect(base_url('ci-admin/users/create')); 
        }
          
    }

    public function edit($id)
    {
        $data['user'] = $this->users_model->get_user_by_id($id);

        $this->slice->view('admin.edit.user', $data);
    }

    public function update($id)
    {
        $result = $this->users_model->update($id);

        if($result) {
            $this->session->set_flashdata('success', 'User updated successfully!');
            
            redirect(base_url('ci-admin/users')); 
        } else {
            $this->session->set_flashdata('success', 'User updated successfully!');

            redirect(base_url('ci-admin/users/' . $id . '/edit')); 
        }
    }

    public function destroy($id)
    {
        $result = $this->users_model->destroy($id);

         if($result) {
            $this->session->set_flashdata('success', 'User deleted successfully!');
            
            redirect(base_url('ci-admin/users')); 
        } else {
            $this->session->set_flashdata('errors', 'User coule not be deleted!');

            redirect(base_url('ci-admin/users/' . $id . '/edit')); 
        }
    }

}