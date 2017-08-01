<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_works_table extends CI_Migration {

        public function up()
        {
            $this->dbforge->add_field(array(
                'id' => array(
                    'type' => 'INT',
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ),
                'title' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '191'
                ),
                'heading' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '191'
                ),
                'body' => array(
                    'type' => 'TEXT'
                ),
                'date' => array(
                    'type' => 'DATE'
                ),
                'client' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '191'
                ),
                'slug' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '191'
                ),
                'href' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '191'
                ),
                'type' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '191'
                ),
            ));
            $this->dbforge->add_key('id', TRUE);
            $this->dbforge->create_table('works');
        }

        public function down()
        {
            $this->dbforge->drop_table('works');
        }
}
