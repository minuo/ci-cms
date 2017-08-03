<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usertypes_model extends CI_Model {

    public function get_all()
    {
        $query = $this->db->get('user_types');

        if($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function get_role_by_id()
    {
        
    }

    public function create()
    {
        $data = array(
            'type_name' => $this->input->post('type_name'),
            'type_description' => $this->input->post('type_description')
        );

        $insert_id = $this->db->insert('user_types', $data);

        $data = array(
            'usertype_id' => $insert_id,
            'create_usertypes' => $this->input->post('create_usertypes'),
            'delete_usertypes' => $this->input->post('delete_usertypes'),
            'create_users' => $this->input->post('create_users'),
            'edit_users' => $this->input->post('edit_users'),
            'delete_users' => $this->input->post('delete_users'),
            'create_posts' => $this->input->post('create_posts'),
            'edit_posts' => $this->input->post('edit_posts'),
            'delete_posts' => $this->input->post('delete_posts'),
            'upload_files' => $this->input->post('upload_files'),
            'create_pages' => $this->input->post('create_pages'),
            'edit_pages' => $this->input->post('edit_posts'),
            'delete_pages' => $this->input->post('delete_pages'),
            'manage_categories' => $this->input->post('manage_categories'),
            'moderate_comments' => $this->input->post('moderate_comments'),
            'can_comment' => $this->input->post('can_comment'),
            'manage_site_options' => $this->input->post('manage_site_options')
        );

        $this->db->insert('user_permissions', $data);
    }

    public function update()
    {

    }

    public function destroy()
    {

    }

}