<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_model extends CI_Model {

    public function get_setting_by_name($name) 
    {
        $query = $this->db->get_where('settings', array('setting_name' => $name));

        if($query->num_rows() > 0) {
            return $query->row();
        }
    }

    public function update()
    {
        $setting_names = $this->input->post('setting_name');
        $setting_values = $this->input->post('setting_value');

        $status = true;

        foreach($setting_values as $key => $value) {

            $data = array(
                'setting_name' => $setting_names[$key],
                'setting_value' => $value
            );

            $query = $this->db->get_where('settings', array('setting_name' => $setting_name[$key]));

            if($query->num_rows() > 0) {
                if(!$this->db->update('settings', $data, array('id' => $query->row()->id))) {
                    $status = false;
                }
            } else {                
                if(!$this->db->insert('settings', $data)){
                    $status = false;
                }
            }
            
        }

        return $status;
        
    }
    
}