<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends CI_Model {

    /**
	* Gets all post_categories in db
	*
	*/
    public function get_all()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('post_categories');

        if($query->num_rows() > 0) {
            return $query->result();
        }

    }

    /**
	* Gets the specified post category using post_categories unique $id
	*
	* @param int $id The unique id of post category to retrieve
	*/
    public function get_category_by_id($id)
    {
        $query = $this->db->get_where('post_categories', array('id' => $id));

        if($query->num_rows() > 0)
        {
            return $query->row();
        }

    }

    /**
	* Create a new post category and save in db
	*
	*/
    public function create()
    {
        $data = array(            
            'category_name' => $this->input->post('category_name'),
            'category_description' => $this->input->post('category_description'),
            'category_guid' => $this->input->post('category_guid')
        );

        $result = $this->db->insert('post_categories', $data);

        if($result) {
            return true;
        }
    }

    /**
	* Create a new post category and save in db
	*
    * @param int $id The unique id of post category to update
	*/
    public function update($id)
    {
        $data = array(            
            'category_name' => $this->input->post('category_name'),
            'category_description' => $this->input->post('category_description'),
            'category_guid' => $this->input->post('category_guid')
        );

        $result = $this->db->update('post_categories', $data, array('id' => $id));

        if($result) {
            return true;
        }

    }

    /**
	* Deletes the specified post category using post_categories unique $id
	*
	* @param int $id The unique id of post category to delete
	*/
    public function delete($id)
    {
        $result = $this->db->delete('post_categories', array('id' => $id));
        
        if($result) {
            return true;
        }

    }

}