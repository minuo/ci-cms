<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts_model extends CI_Model {

    /**
	* Gets all posts in db
	*
	*/
    public function get_all_posts()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get_where('posts', array('post_type' => 'post'));

        if($query->num_rows() > 0) {
            return $query->result();
        }

    }

     /**
	* Gets all pages in db
	*
	*/
    public function get_all_pages()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get_where('posts', array('post_type' => 'page'));

        if($query->num_rows() > 0) {
            return $query->result();
        }

    }

    /**
	* Gets the specified post using posts unique $id
	*
	* @param int $id The unique id of post to retrieve
	*/
    public function get_post_by_id($id)
    {
        $query = $this->db->get_where('posts', array('id' => $id));

        if($query->num_rows() > 0)
        {
            return $query->row();
        }

    }

    /**
	* Gets the specified post using posts unique $slug
	*
	* @param string $slug The unique slug of post to retrieve
	*/
    public function get_post_by_guid($guid)
    {
        $query = $this->db->get_where('posts', array('guid' => $guid));

        if($query->num_rows() > 0)
        {
            return $query->row();
        }

    }

    /**
	* Create a new post and save in db
	*
	*/
    public function create()
    {
        $data = array(            
            'guid' => url_title($this->input->post('post_title')),
            'post_type' => $this->input->post('post_type'),
            'post_author' => $this->session->userdata('id'),
            'post_title' => $this->input->post('post_title'),
            'post_category' => $this->input->post('post_category'),
            'post_body' => $this->input->post('post_body'),
            'post_status' => $this->input->post('post_status'),
            'created_at' => date('Y-m-d H:i:s', time())
        );

        if( $this->db->insert('posts', $data) ) {
            return true;
        }
    }

    /**
	* Create a new post and save in db
	*
    * @param int $id The unique id of post to update
	*/
    public function update($id)
    {
        $data = array(            
            'guid' => url_title($this->input->post('post_title')),
            'post_type' => $this->input->post('post_type'),
            'post_author' => $this->session->userdata('id'),
            'post_title' => $this->input->post('post_title'),
            'post_category' => $this->input->post('post_category'),
            'post_body' => $this->input->post('post_body'),
            'post_status' => $this->input->post('post_status'),
            'updated_at' => date('Y-m-d H:i:s', time())
        );

        if( $this->db->update('posts', $data, array('id' => $id)) ) {
            return true;
        }

    }

    /**
	* Deletes the specified post using posts unique $id
	*
	* @param int $id The unique id of post to delete
	*/
    public function delete($id)
    {        
        if( $this->db->delete('posts', array('id' => $id)) ) {
            return true;
        }

    }

}