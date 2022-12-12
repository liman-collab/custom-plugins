<?php
/**
 *
 * @package Sidora Login
 */

namespace Inc\Base;

class Enqueue
{

    public function register()
    {
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    function enqueue()
    {
        wp_enqueue_style('plugin_style', PLUGIN_URL . 'assets/css/style.css');
        wp_enqueue_style('sidora-login-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css' , array(),'4.3.1','all');
        wp_enqueue_script('plugin_script', PLUGIN_URL . 'assets/js/script.js');
    }
}
