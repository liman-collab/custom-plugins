<?php
/**
 *
 * @package Sidora Login
 */

namespace Inc\Base;

use Inc\Api\Callbacks\AdminCallbacks;


class AddCustomPage extends BaseController
{

    public static function add_my_custom_page()
    {
        $my_post = array(
            'post_title' => wp_strip_all_tags('Login Customizer'),
            'post_status' => 'publish',
            'post_content'   => "My certificate",
            'post_author' => 1,
            'post_type' => 'page',
            'page_template' => 'template-full-width.php'
        );

        wp_insert_post($my_post);
    }


}