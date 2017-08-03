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
                'type_name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '191'
                )
            ));
            $this->dbforge->add_key('id', TRUE);
            $this->dbforge->create_table('user_types');
        }

        public function down()
        {
            $this->dbforge->drop_table('user_types');
        }
}
