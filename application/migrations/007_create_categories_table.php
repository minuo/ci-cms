<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_categories_table extends CI_Migration {

        public function up()
        {
            $this->dbforge->add_field(array(
                'id' => array(
                    'type' => 'INT',
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ),
                'category_name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '191'
                ),
                'category_guid' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255'
                ),
                'category_description' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '255'
                ),
                'category_count' => array(
                    'type' => 'INT'
                )
            ));
            $this->dbforge->add_key('id', TRUE);
            $this->dbforge->create_table('post_categories');
        }

        public function down()
        {
            $this->dbforge->drop_table('post_categories');
        }
}
