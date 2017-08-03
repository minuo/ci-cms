<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_user_types_table extends CI_Migration {

        public function up()
        {
            $this->dbforge->add_field(array(
                'id' => array(
                    'type' => 'INT',
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ),
                'usertype_id' => array(
                    'type' => 'INT'
                ),
                'create_usertypes' => array(
                    'type' => 'BOOL',
                    'default' => '0'
                ),
                'edit_usertypes' => array(
                    'type' => 'BOOL',
                    'default' => '0'
                ),
                'delete_usertypes' => array(
                    'type' => 'bool',
                    'default' => '0'
                ),
                'create_users' => array(
                    'type' => 'BOOL',
                    'default' => '0'
                ),
                'edit_users' => array(
                    'type' => 'BOOL',
                    'default' => '0'
                ),
                'delete_users' => array(
                    'type' => 'BOOL',
                    'default' => '0'
                ),
                'create_posts' => array(
                    'type' => 'BOOL',
                    'default' => '0'
                ),
                'edit_posts' => array(
                    'type' => 'BOOL',
                    'default' => '0'
                ),
                'delete_posts' => array(
                    'type' => 'BOOL',
                    'default' => '0'
                ),
                'upload_files' => array(
                    'type' => 'BOOL',
                    'default' => '0'
                ),
                'create_pages' => array(
                    'type' => 'BOOL',
                    'default' => '0'
                ),
                'edit_pages' => array(
                    'type' => 'BOOL',
                    'default' => '0'
                ),
                'delete_pages' => array(
                    'type' => 'BOOL',
                    'default' => '0'
                ),
                'manage_categories' => array(
                    'type' => 'BOOL',
                    'default' => '0'
                ),
                'moderate_comments' => array(
                    'type' => 'BOOL',
                    'default' => '0'
                ),
                'manage_site_options' => array(
                    'type' => 'BOOL',
                    'default' => '0'
                )
            ));
            $this->dbforge->add_key('id', TRUE);
            $this->dbforge->add_key('usertype_id', 'usertype_id');
            $this->dbforge->create_table('user_permissions');
        }

        public function down()
        {
            $this->dbforge->drop_table('user_permissions');
        }
}
