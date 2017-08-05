<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_post_category_to_posts_table extends CI_Migration {

        public function up()
        {
            $fields = array(
                'post_category' => array(
                    'type' => 'INT'
                )
            );
            
            $this->dbforge->add_column('posts', $fields);
        }

        public function down()
        {
            $this->dbforge->drop_column('posts', 'post_category');
        }
}
