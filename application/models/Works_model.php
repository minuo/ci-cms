<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Works_model extends CI_Model {

    /**
	* Gets all works in DB
	*
	*/
    public function get_all() 
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('works');

        if($query->num_rows() > 0 ) {
            return $query->result();
        }
    }

    /**
	* Gets the specified work using work unique $id
	*
	* @param int $id The unique id of work to retrieve
	*/
    public function get_work_by_id($id) 
    {
        $query = $this->db->get_where('works', array('id' => $id));

        if($query->num_rows() > 0) {
            return $query->row();
        }
    }

    /**
	* Gets the specified work using work unique $slug
	*
	* @param string $slug The unique slug of work to retrieve
	*/
    public function get_work_by_slug($slug)
    {
        $query = $this->db->get_where('works', array('slug' => $slug));

        if($query->num_rows() > 0) {
            return $query->row();
        }
    }

    /**
	* Creates a new work and saves in db
	*
	*/
    public function create()
    {
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => str_replace(' ', '-', $this->input->post('title')),
            'heading' => $this->input->post('heading'),
            'type' => $this->input->post('type'),
            'client' => $this->input->post('client'),
            'href' => $this->input->post('href'),
            'body' => $this->input->post('body'),
            'date' => $this->input->post('date'),
        );

        $this->db->insert('works', $data);

        // Upload Blog Img
        $config = array(
            'upload_path' => './assets/img/portfolio/',
            'allowed_types' => 'jpg|png',
            'file_name' => $data['slug'] . '.png'
        );

        $this->load->library('upload', $config);
        $this->upload->do_upload('work_img');

    }

    /**
	* Creates a new work and saves in db
	*
    * @param int $id The unique id of work to update
	*/
    public function update($id)
    {
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => url_title($this->input->post('title'), 'dash', true),
            'heading' => $this->input->post('heading'),
            'type' => $this->input->post('type'),
            'client' => $this->input->post('client'),
            'href' => $this->input->post('href'),
            'body' => $this->input->post('body'),
            'date' => $this->input->post('date'),
        );

        $this->db->update('works', $data, array('id' => $id));

        // Upload Blog Img
        $config = array(
            'upload_path' => './assets/img/portfolio/',
            'allowed_types' => 'jpg|png',
            'max_size' => '*',
            'max_filename' => '*',
            'overwrite' => TRUE,
            'file_name' => $data['slug'] . '.jpg'
        );

        $this->upload->initialize($config);
        $this->upload->do_upload('work_img');

    }

    /**
	* Deletes the specified work using works unique $id
	*
	* @param int $id The unique id of work to delete
	*/
    public function delete($id)
    {
        $query = $this->db->delete('works', array('id' => $id));
        
        if($query) {
            return true;
        }

    }

}