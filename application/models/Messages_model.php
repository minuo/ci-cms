<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages_model extends CI_Model {

    /*
	* Returns all messages in db
	*
	*/
    public function get_all()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('messages');

        if($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function get_unread()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get_where('messages', array('read' => '0'));

        if($query->num_rows() > 0) {
            return $query->result();
        }
    }

    /**
	* Gets the message form the db using the unique $id
	*
	* @param int $id The unique id of the comment
	*/
    public function get_message_by_id($id)
    {
        $query = $this->db->get_where('messages', array('id' => $id));

        if($query->num_rows() > 0) {
            return $query->row();
        }
    }

    /**
	* Creates a new message in db
	*
	*/
    public function create()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'subject' => $this->input->post('subject'),
            'message' => $this->input->post('message'),
            'created_at' => date('Y-m-d H:i:s', time()),
            'read' => '0'
        );

        $query = $this->db->insert('messages', $data);

        if($query) {
            return true;
        }
    }

    /**
	* Marks a message as read in db
	*
    * @param int $id The unique id of message to mark rad
	*/
    public function read($id)
    {
        $data = array(
            'id' => $id,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'read' => '1'
        );

        $this->db->update('messages', $data, array('id' => $id));
    }

    /**
	* Deletes the specified message using comments unique $id
	*
	* @param int $id The unique id of message to delete
	*/
    public function delete($id)
    {
        $query = $this->db->delete('messages', array('id' => $id));
        
        if($query) {
            return true;
        }

    }
}