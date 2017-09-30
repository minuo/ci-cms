<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts_model extends CI_Model {

    /**
	* Gets all posts in db
	*
	*/
    public function get_all($status, $type)
    {
        $this->db->select('pc.category_name, p.*, u.fullname AS author_name');
        $this->db->from('posts p');
        $this->db->join('post_categories pc', 'p.post_category = pc.id', 'LEFT');
        $this->db->join('users u', 'p.post_author = u.id');
        $this->db->where('p.post_type', $type);

        if($status != '') {
            $this->db->where('p.post_status', $status);
        }
        
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();

        return ($query->num_rows() > 0) ? $query->result() : array();
    }

    /**
	* Gets the specified post using posts unique $id
	*
	* @param int $id The unique id of post to retrieve
	*/
    public function get_post_by_id($id)
    {
        $this->db->select('pc.category_name, p.*, u.fullname AS author_name');
        $this->db->from('posts p');
        $this->db->join('post_categories pc', 'p.post_category = pc.id');
        $this->db->join('users u', 'p.post_author = u.id');
        $this->db->where('p.id', $id);
        $query = $this->db->get();

        return ($query->num_rows() > 0) ? $query->row() : new stdClass;
    }

    /**
	* Gets the specified post using posts unique $slug
	*
	* @param string $slug The unique slug of post to retrieve
	*/
    public function get_post_by_guid($guid)
    {
        $this->db->select('pc.category_name, p.*, u.fullname AS author_name');
        $this->db->from('posts p');
        $this->db->join('post_categories pc', 'p.post_category = pc.id');
        $this->db->join('users u', 'p.post_author = u.id');
        $this->db->where('p.guid', $guid);
        $query = $this->db->get();

        return ($query->num_rows() > 0) ? $query->row() : new stdClass;
    }

    /**
	* Create a new post and save in db
	*
	*/
    public function create()
    {
        $data = array(            
            'guid' => url_title($this->input->post('post_title'), 'dash', true),
            'post_type' => $this->input->post('post_type'),
            'post_author' => $this->session->userdata('id'),
            'post_title' => $this->input->post('post_title'),
            'post_category' => $this->input->post('post_category'),
            'post_body' => $this->input->post('post_body'),
            'post_status' => $this->input->post('post_status'),
            'created_at' => date('Y-m-d H:i:s', time())
        );
        $this->db->insert('posts', $data);

        if(!empty($_FILES)) {
            $this->upload_img($data['guid']);
        }

        return ($this->db->affected_rows() > 0) ? true : false;
    }

    /**
	* Create a new post and save in db
	*
    * @param int $id The unique id of post to update
	*/
    public function update($id)
    {
        $data = array(            
            'guid' => url_title($this->input->post('post_title'), 'dash', true),
            'post_type' => $this->input->post('post_type'),
            'post_author' => $this->session->userdata('id'),
            'post_title' => $this->input->post('post_title'),
            'post_category' => $this->input->post('post_category'),
            'post_body' => $this->input->post('post_body'),
            'post_status' => $this->input->post('post_status'),
            'updated_at' => date('Y-m-d H:i:s', time())
        );
        $this->db->update('posts', $data, array('id' => $id));

        if(!empty($_FILES)) {
            $this->upload_img($data['guid']);
        }

        return ($this->db->affected_rows() > 0) ? true : false;

    }

    /**
	* Deletes the specified post using posts unique $id
	*
	* @param int $id The unique id of post to delete
	*/
    public function delete($id)
    {        
        $this->db->delete('posts', array('id' => $id));

        return ($this->db->affected_rows() > 0) ? true : false;
    }

    /**
	* Uploads the specified blog img using the uniquely created url_title $slug
	*
	* @param string $slug the url_title of the post to save as image filename
	*/
    public function upload_img($slug)
    {
        // Upload Blog Img
        $config = array(
            'upload_path' => './uploads/',
            'allowed_types' => 'jpg|png',
            'file_name' => $slug . '.jpg'
        );

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('featured_img')) {
            $this->session->set_flashdata('errors', $this->upload->display_errors());
        } else {
            
            $this->session->set_flashdata('success', 'Successfully created the post!');
        }
        
    }

}