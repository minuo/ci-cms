<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function get_all()
    {
        $this->db->select('ut.type_name, u.*');
        $this->db->from('users u');
        $this->db->join('user_types ut', 'ut.id = u.user_type');
        $this->db->order_by('u.id', 'DESC');
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function get_user_by_id($id)
    {
        $this->db->get_where('users', array('id' => $id));

        if($query->num_rows() > 0){
            return $query->row();
        }
    }

    public function create()
    {
    
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}   