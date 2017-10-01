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
        $query = $this->db->get_where('users', array('id' => $id));

        if($query->num_rows() > 0){
            return $query->row();
        }
    }

    public function get_user_by_username($username)
    {
        $query = $this->db->get_where('users', array('username' => $username));

        return ($query->num_rows() > 0) ? $query->row() : false;
    }

    public function create()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'fullname' => $this->input->post('fullname'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'user_status' => $this->input->post('user_status'),
            'user_type' => $this->input->post('user_type')
        );

        $result = $this->db->insert('users', $data);

        if($result) {
            return true;
        }
    }

    public function update($id)
    {
        $data = array(
            'username' => $this->input->post('username'),
            'fullname' => $this->input->post('fullname'),
            'email' => $this->input->post('email'),
            'user_status' => $this->input->post('user_status'),
            'user_type' => $this->input->post('user_type')
        );

        if($this->input->post('password') != '') {
            $data['password'] = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
        }

        $result = $this->db->update('users', $data, array('id' => $id));

        if($result) {
            return true;
        }
    }

    public function destroy($id)
    {
        $result = $this->db->delete('users', array('id' => $id));

        if($result) {
            return true;
        }
    }
}   