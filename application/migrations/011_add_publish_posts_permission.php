<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_publish_posts_permission extends CI_Migration {

        public function up()
        {
            $fields = array(
                'publish_posts' => array(
                    'type' => 'BOOLEAN',
                    'default' => 0
                )
            );
            
            $this->dbforge->add_column('user_permissions', $fields);
        }

        public function down()
        {
            $this->dbforge->drop_column('user_permissions', 'publish_posts');
        }
}
