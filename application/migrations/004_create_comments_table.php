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
                'name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '191'
                ),
                'email' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '191'
                ),
                'comment' => array(
                    'type' => 'TEXT'
                ),
                'created_at' => array(
                    'type' => 'TIMESTAMP'
                ),
                'updated_at' => array(
                    'type' => 'TIMESTAMP'
                ),
                'pending' => array(
                    'type' => 'BOOL',
                    'default' => '0'
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
