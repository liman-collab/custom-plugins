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
        add_action('wp_ajax_custom_login',array($this,'handleLogin'));
        add_action('wp_ajax_nopriv_custom_login',array($this,'handleLogin'));
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

    public function handleLogin()
    {
        $param = isset($_POST['param']) ? trim($_POST['param']): "";
        if ($param == "login_test"){
            $info = array();
            $info['user_login'] = $_POST['user_login'];
            $info['user_password'] = $_POST['user_password'];
            $info['remember'] = true;

            $user_signon = wp_signon($info,false);
            if (is_wp_error($user_signon)){
                echo json_encode(array("status"=>0));
            }else{
                echo json_encode(array("status"=>1));
            }
        }
        die();
    }


}
