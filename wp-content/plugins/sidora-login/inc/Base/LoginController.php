<?php
/**
 *
 * @package Sidora Login
 */

namespace Inc\Base;

class LoginController
{

    public function register()
    {

        add_action('wp_ajax_custom_login',array($this,'handleLogin'));
        add_action('wp_ajax_nopriv_custom_login',array($this,'handleLogin'));
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
