<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_comments_table extends CI_Migration {

        public function up()
        {
            $this->dbforge->add_field(array(
                'id' => array(
                    'type' => 'INT',
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ),
                'post_id' => array(
                    'type' => 'INT'
                ),
                'comment_author' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '191'
                ),
                'comment_author_email' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '191'
                ),
                'comment_content' => array(
                    'type' => 'TEXT'
                ),
                'created_at' => array(
                    'type' => 'TIMESTAMP'
                ),
                'updated_at' => array(
                    'type' => 'TIMESTAMP'
                ),
                'comment_status' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '191'
                )
            ));
            $this->dbforge->add_key('id', TRUE);
            $this->dbforge->create_table('comments');
        }

        public function down()
        {
            $this->dbforge->drop_table('comments');
        }
}
