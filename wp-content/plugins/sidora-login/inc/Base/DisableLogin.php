<?php
/**
 *
 * @package Sidora Login
 */

namespace Inc\Base;

class DisableLogin
{

    public function register()
    {
        add_action('init',  array($this, 'redirect_wp_admin'));
        add_action('wp_logout',  array($this, 'redirect_custom_login'));

    }

    public function redirect_wp_admin()
    {
            global $pagenow;
            $action = (isset($_GET['action'])) ? $_GET['action'] : '';
            if( $pagenow == 'wp-login.php'  && $_GET['action'] != "logout" ) {
                $page = get_page_by_path( 'custom-login-template' );
                wp_redirect(get_permalink($page->ID));

                exit();
            }

    }

    public function redirect_custom_login()
    {
        $page = get_page_by_path( 'custom-login-template' );
        wp_redirect(get_permalink($page->ID));
         exit();
    }



}
