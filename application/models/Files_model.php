<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files_model extends CI_Model {

    public function get_all()
    {
        $this->load->helper('file');
        if(!file_exists('./assets/media/')) {
            mkdir('../assets/media/');
        }
        $all_files = get_filenames('./assets/media/', false);
        $file_names = array();
        foreach ($all_files as $file)
        {
            array_push($file_names, $file);
        }
        return $file_names;
    }

    public function store()
    {
        // Upload Blog Img
        $config = array(
            'upload_path' => './assets/media/',
            'allowed_types' => '*',
            'max_size' => '*',
            'max_filename' => '*',
            'overwrite' => TRUE
        );

        $this->load->library('upload', $config);
        if($this->upload->do_upload('user_file')) {
            return true;
        } else {
            return false;
        }
    }

    public function destroy()
    {
        $this->load->helper('file');
        if($this->input->post('file') != '') {
            $result = unlink('./assets/media/' . $this->input->post('file'));
            return $result;
        }
    }

}