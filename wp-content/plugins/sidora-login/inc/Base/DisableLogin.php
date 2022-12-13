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
        add_action('init',  array($this, 'prevent_wp_login'));

    }

    public function prevent_wp_login()
    {

            // WP tracks the current page - global the variable to access it
            global $pagenow;
            // Check if a $_GET['action'] is set, and if so, load it into $action variable
            $action = (isset($_GET['action'])) ? $_GET['action'] : '';
            // Check if we're on the login page, and ensure the action is not 'logout'
            if( $pagenow == 'wp-login.php' && ( ! $action || ( $action && ! in_array($action, array('logout', 'lostpassword', 'rp', 'resetpass'))))) {
                // Load the home page url
//                $page = get_bloginfo('url');
                $page = "http://sidora_plugins.test/wp-content/plugins/sidora-login/templates/custom-login.php";
                // Redirect to the home page

//                $page = PLUGIN_PATH;
                wp_redirect($page);
                // Stop execution to prevent the page loading for any reason
                exit();
            }

    }



}
