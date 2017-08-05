<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_modify_posts_table_for_post_type extends CI_Migration {

    public function up()
    {
        $fields = array(
            'post_type' => array(
                'type' => 'VARCHAR',
                'constraint' => '191'
            ),
            'post_category' => array(
                'type' => 'INT',
                'after' => 'post_type'
            )
        );
        
        $this->dbforge->modify_column('posts', $fields);
    }

    public function down()
    {
       $fields = array(
            'post_type' => array(
                'type' => 'INT'
            ),
            'post_category' => array(
                'type' => 'INT'
            )
        );
        
        $this->dbforge->modify_column('posts', $fields);
    }
}
