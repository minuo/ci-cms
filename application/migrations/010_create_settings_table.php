<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_settings_table extends CI_Migration {

        public function up()
        {
            $this->dbforge->add_field(array(
                'id' => array(
                    'type' => 'INT',
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ),
                'setting_name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '191'
                ),
                'setting_value' => array(
                    'type' => 'TEXT'
                )
            ));
            $this->dbforge->add_key('id', TRUE);
            $this->dbforge->create_table('settings');
        }

        public function down()
        {
            $this->dbforge->drop_table('settings');
        }
}
