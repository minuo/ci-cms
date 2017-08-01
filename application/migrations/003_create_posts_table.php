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
                'slug' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '191'
                ),
                'title' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '191'
                ),                
                'body' => array(
                    'type' => 'TEXT'
                ),
                'category' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '191'
                ),
                'tags' => array(
                    'type' => 'TEXT'
                ),
                'created_at' => array(
                    'type' => 'TIMESTAMP'
                ),
                'updated_at' => array(
                    'type' => 'TIMESTAMP'
                ),
                'draft' => array(
                    'type' => 'BOOL',
                    'default' => '0'
                )
            ));
            $this->dbforge->add_key('id', TRUE);
            $this->dbforge->add_key('slug', 'posts_slug_unique');
            $this->dbforge->create_table('posts');
        }

        public function down()
        {
            $this->dbforge->drop_table('posts');
        }
}
