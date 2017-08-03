<?php

class Migrate extends CI_Controller
{

        public function index()
        {
                $this->load->library('migration');

                if ($this->migration->current() === FALSE)
                {
                        show_error($this->migration->error_string());
                }
        }

        public function webmaster()
        {
                $data = array(
                        'username' => 'webmaster',
                        'email' => 'webmaster@localhost',
                        'fullname' => 'webmaster',
                        'password' => password_hash('web_admin1!', PASSWORD_BCRYPT),
                        'user_status' => '1'
                );

                $this->db->insert('users', $data);
        }

}