<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_posts_table extends CI_Migration {

        public function up()
        {
            $this->dbforge->add_field(array(
                'id' => array(
                    'type' => 'INT',
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ),
                'guid' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255'
                ),
                'post_type' => array(
                    'type' => 'INT'
                ),
                'post_author' => array(
                    'type' => 'INT'
                ),
                'post_title' => array(
                    'type' => 'TEXT'
                ),
                'post_body' => array(
                    'type' => 'TEXT'
                ),
                'post_status' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255'
                ),
                'created_at' => array(
                    'type' => 'TIMESTAMP'
                ),
                'updated_at' => array(
                    'type' => 'TIMESTAMP'
                )                
            ));
            $this->dbforge->add_key('id', TRUE);
            $this->dbforge->add_key('guid', 'posts_guid_unique');
            $this->dbforge->create_table('posts');
        }

        public function down()
        {
            $this->dbforge->drop_table('posts');
        }
}
