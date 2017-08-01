<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts_model extends CI_Model {

    /**
	* Gets all posts in db
	*
	*/
    public function get_all()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('posts');

        if($query->num_rows() > 0) {
            return $query->result();
        }

    }

    /**
	* Gets the three most recent posts
	*
	*/
    public function get_latest()
    {
        $this->db->limit(3);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('posts');

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
    public function get_post_by_slug($slug)
    {
        $query = $this->db->get_where('posts', array('slug' => $slug));

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
            'title' => $this->input->post('title'),
            'slug' => str_replace(' ', '-', $this->input->post('title')),
            'category' => $this->input->post('category'),
            'tags' => $this->input->post('tags'),
            'body' => $this->input->post('body'),
            'created_at' => date('Y-m-d H:i:s', time()),
            'draft' => '0'
        );

        $this->db->insert('posts', $data);

        // Upload Blog Img
        $config = array(
            'upload_path' => './assets/img/blog/',
            'allowed_types' => 'jpg|png',
            'file_name' => $data['slug'] . '.jpg'
        );

        $this->load->library('upload', $config);
        $this->upload->do_upload('post_img');

        // Upload Blog-bg Header Img
        $config['file_name'] = $data['slug'] . '-bg.png';

        $this->upload->initialize($config);
        $this->upload->do_upload('post_img_bg');

    }

    /**
	* Create a new post and save in db
	*
    * @param int $id The unique id of post to update
	*/
    public function update($id)
    {
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => url_title($this->input->post('title'), 'dash', true),
            'category' => $this->input->post('category'),
            'tags' => $this->input->post('tags'),
            'body' => $this->input->post('body'),
            'updated_at' => date('Y-m-d H:i:s', time()),
            'draft' => '0'
        );

        $this->db->update('posts', $data, array('id' => $id));

        // Upload Blog Img
        $config = array(
            'upload_path' => './assets/img/blog/',
            'allowed_types' => '*',
            'max_size' => '*',
            'max_filename' => '*',
            'overwrite' => TRUE,
            'file_name' => $data['slug'] . '.jpg'
        );

        $this->upload->initialize($config);
        $this->upload->do_upload('post_img');

        // Upload Header Img
        $config2 = array(
            'upload_path' => './assets/img/blog/',
            'allowed_types' => '*',
            'max_size' => '*',
            'max_filename' => '*',
            'overwrite' => TRUE,
            'file_name' => $data['slug'] . '-bg.jpg'
        );

        $this->upload->initialize($config2);
        $this->upload->do_upload('post_img_bg');

    }

    /**
	* Deletes the specified post using posts unique $id
	*
	* @param int $id The unique id of post to delete
	*/
    public function delete($id)
    {
        $query = $this->db->delete('posts', array('id' => $id));
        
        if($query) {
            return true;
        }

    }

}