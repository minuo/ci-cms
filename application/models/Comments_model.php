<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments_model extends CI_Model {

    /*
	* Returns all comments in db
	*
	*/
    public function get_all()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('comments');

        if($query->num_rows() > 0) {
            return $query->result();
        }
    }
    
    /**
	* Gets all comments relating to a particular post
	*
	* @param int $id The unique id of post
	*/
    public function get_all_by_post_id($id)
    {
        $query = $this->db->get_where('comments', array('post_id' => $id, 'pending' => '0'));

        if($query->num_rows() > 0) {
            return $query->result();
        }
    }

    /**
	* Gets the comment form the db using the unique $id
	*
	* @param int $id The unique id of the comment
	*/
    public function get_comment_by_id($id)
    {
        $query = $this->db->get_where('comments', array('id' => $id));

        if($query->num_rows() > 0) {
            return $query->row();
        }
    }

    /**
	* Creates a new pending comment in db
	*
    * @param int $id The post associated with the comment
	*/
    public function create($post_id)
    {
        $data = array(
            'post_id' => $post_id,
            'name' => $this->input->post('name'),
            'comment' => $this->input->post('comment'),
            'created_at' => date('Y-m-d H:i:s', time()),
            'pending' => '1'
        );

        $query = $this->db->insert('comments', $data);

        if($query) {
            return true;
        }
    }

    /**
	* Updates a pending comment in db
	*
    * @param int $id The unique id of comment to update
	*/
    public function update($id)
    {
        $data = array(
            'post_id' => $this->input->post('post_id'),
            'name' => $this->input->post('name'),
            'comment' => $this->input->post('comment'),
            'updated_at' => date('Y-m-d H:i:s', time()),
            'pending' => $this->input->post('pending')
        );

        $this->db->update('comments', $data, array('id' => $id));
    }

    /**
	* Deletes the specified comment using comments unique $id
	*
	* @param int $id The unique id of comment to delete
	*/
    public function delete($id)
    {
        $query = $this->db->delete('comments', array('id' => $id));
        
        if($query) {
            return true;
        }

    }
}