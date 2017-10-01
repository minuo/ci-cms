<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_post_excerpt_field_to_post_table extends CI_Migration {

    public function up()
    {
        $fields = array(
            'post_excerpt' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'after' => 'post_title'
            )
        );
        
        $this->dbforge->add_column('posts', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column('posts', 'post_excerpt');
    }
}
