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
            'post_title' => wp_strip_all_tags('Custom Login Template'),
            'post_status' => 'publish',
            'post_content'   =>'',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'custom-login-template',
        );

        $my_password_form = array(
            'post_title' => wp_strip_all_tags('Password Template'),
            'post_status' => 'publish',
            'post_content'   =>'',
            'post_author' => 1,
            'post_type' => 'page',
            'post_name' => 'custom-password-template',
        );

        wp_insert_post( $my_post );
        wp_insert_post( $my_password_form );
//        if( $inserted_post_id ) {
//            update_post_meta($inserted_post_id, '_wp_page_template', get_template_directory_uri() . '/templates/template-bar.php');
//        }


    }




}