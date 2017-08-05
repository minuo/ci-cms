<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files_model extends CI_Model {

    public function get_all()
    {

    }

    public function store()
    {
        // Upload Blog Img
        $config = array(
            'upload_path' => './assets/media/',
            'allowed_types' => '*',
            'max_size' => '*',
            'max_filename' => '*',
            'overwrite' => TRUE,
            'file_name' => ''
        );

        $this->load->library('upload', $config);
        $this->upload->do_upload('post_img');

    }

}