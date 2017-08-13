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
		$this->webmaster();
		$this->admin_user_type();
		$this->add_sample_page();
	}

	public function webmaster()
	{
		$data = array(
			'username' => 'webmaster',
			'email' => 'webmaster@localhost',
			'fullname' => 'webmaster',
			'password' => password_hash('web_admin1!', PASSWORD_BCRYPT),
			'user_status' => 1,
			'user_type' => 1
		);

		$this->db->insert('users', $data);
	}

	public function admin_user_type()
	{
		$data = array(
            'type_name' => 'Admin',
            'type_description' => 'Administrative user with access to all features.'
        );

        $this->db->insert('user_types', $data);
        $insert_id = $this->db->insert_id();

        $data = array(
            'usertype_id' => $insert_id,
            'create_usertypes' => 1,
            'delete_usertypes' => 1,
            'create_users' => 1,
            'edit_users' => 1,
            'delete_users' => 1,
            'create_posts' => 1,
            'edit_posts' => 1,
            'delete_posts' => 1,
            'upload_files' => 1,
            'create_pages' => 1,
            'edit_pages' => 1,
            'delete_pages' => 1,
            'manage_categories' => 1,
            'moderate_comments' => 1,
            'can_comment' => 1,
            'manage_site_options' => 1
        );

        $result = $this->db->insert('user_permissions', $data);
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