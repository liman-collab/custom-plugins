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
        add_action('wp_enqueue_scripts', array($this, 'enqueue'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
        add_action('wp_print_styles', array($this, 'my_deregister_javascript'));
    }

    public function enqueue()
    {
        wp_enqueue_style('plugin_style', PLUGIN_URL . 'assets/custom-style.css');
        wp_enqueue_style('sidora-login-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css' );
        wp_enqueue_script( 'sidora-login-ajax-jquery','http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js',array(),null,true);
        wp_enqueue_script('plugin_script', PLUGIN_URL . 'assets/custom-script.js',array(),null,true);

    }


    public function my_deregister_javascript() {

        $theme = get_stylesheet();

        if ( is_page('custom-login-template') || is_page('custom-password-template') ) {
            wp_deregister_style("$theme-style");
        }
    }



}
