<?php
/**
 *
 * @package Sidora Login
 */

namespace Inc\Base;

class TransferFile
{

    public function register() {


            $plugin_dir = PLUGIN_PATH . 'templates/custom-login-template.php';
            $theme_dir = get_stylesheet_directory() . '/templates/custom-login-template.php';

            $plugin_dir_password = PLUGIN_PATH . 'templates/forgot_password.php';
            $theme_dir_password = get_stylesheet_directory() . '/templates/forgot_password.php';

            copy($plugin_dir, $theme_dir);
            copy($plugin_dir_password, $theme_dir_password);

    }



}


