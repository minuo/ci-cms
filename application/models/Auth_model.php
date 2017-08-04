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
                
                return true;
            } else {
                $this->session->set_flashdata('errors', 'Password Incorrect, try again!');
            }        
        } else {
            $this->session->set_flashdata('errors', 'User does not exist, try again.');
        }
    }

}