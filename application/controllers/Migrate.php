<?php

class Migrate extends CI_Controller
{

	public function index()
	{
		$this->load->library('migration');

		if ($this->migration->current() === FALSE) {
			show_error($this->migration->error_string());
		} else {
			echo 'Migrations ran successfully, no errors to display';
		}
	}

	public function setup()
	{
		$this->webmster();
		$this->add_sample_page();
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

	public function add_sample_page()
	{
		$data = array(            
            'guid' => url_title('Sample Page'),
            'post_type' => 'page',
            'post_author' => 1,
            'post_title' => 'Sample Page',
            'post_category' => 'uncategorized',
            'post_body' => 'The Body',
            'post_status' => 'published',
            'created_at' => date('Y-m-d H:i:s', time())
		);
		
		$this->db->insert('posts', $data);

	}

}