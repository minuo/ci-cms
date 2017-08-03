<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_users_table extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '191'
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '191'
            ),
            'fullname' => array(
                'type' => 'VARCHAR',
                'constraint' => '191'
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '191'
            ),
            'user_status' => array(
                'type' => 'BOOL',
                'default' => '0'
            ),
            'user_type' => array(
                'type' => 'INT',
                'default' => '0'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
    }
}
