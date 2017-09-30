<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    /**
	* Authenticates users in the user table
	*
	*/
    public function auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->db->get_where('users', array('username' => $username));
        if($query->num_rows() > 0) {
            if(password_verify($password, $query->row()->password)) {
                $data = array(
                    'id' => $query->row()->id,
                    'user_email' => $query->row()->email,
                    'user_fullname' => $query->row()->fullname,
                    'user_name' => $query->row()->username,
                    'logged_in' => TRUE
                );

                $this->session->set_userdata($data);

                $this->load->model('usertypes_model');
                $permissions = $this->usertypes_model->get_permissions_by_role_id($query->row()->user_type);
                $perm_data = array(
                    'create_usertypes' => $permissions->create_usertypes,
                    'delete_usertypes' => $permissions->create_usertypes,
                    'create_users' => $permissions->create_usertypes,
                    'edit_users' => $permissions->create_usertypes,
                    'delete_users' => $permissions->create_usertypes,
                    'create_posts' => $permissions->create_usertypes,
                    'edit_posts' => $permissions->create_usertypes,
                    'publish_posts' => $permissions->create_usertypes,
                    'delete_posts' => $permissions->create_usertypes,
                    'upload_files' => $permissions->create_usertypes,
                    'create_pages' => $permissions->create_usertypes,
                    'edit_pages' => $permissions->create_usertypes,
                    'delete_pages' => $permissions->create_usertypes,
                    'manage_categories' => $permissions->create_usertypes,
                    'moderate_comments' => $permissions->create_usertypes,
                    'can_comment' => $permissions->create_usertypes,
                    'manage_site_options' => $permissions->create_usertypes,
                );
                $this->session->set_userdata($perm_data);
                
                return true;
            } else {
                $this->session->set_flashdata('errors', 'Password Incorrect, try again!');
            }        
        } else {
            $this->session->set_flashdata('errors', 'User does not exist, try again.');
        }
    }

}