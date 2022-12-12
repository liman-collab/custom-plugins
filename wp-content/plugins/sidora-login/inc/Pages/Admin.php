<?php
/**
 *
 * @package Gif Generator
 */

namespace Inc\Pages;

use Inc\Api\SettingsApi;
use Inc\Base\BaseController;
use Inc\Api\Callbacks\AdminCallbacks;



class Admin extends BaseController
{
    public $settings;

    public $callbacks;

    public $pages = array();

    public $subpages = array();

    public function register()
    {
        $this->settings = new SettingsApi();

        $this->callbacks = new AdminCallbacks();

        $this->setPages();

        $this->setSubPages();

        $this->settings->addPages($this->pages)->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
    }

    public function setPages()
    {
        $this->pages = array(
            array(
                'page_title' => 'Sidora Login',
                'menu_title' => 'Sidora Login',
                'capability' => 'manage_options',
                'menu_slug' => 'gif_generator_plugin',
                'callback' => array($this->callbacks, 'adminDashboard'),
                'icon_url' => 'dashicons-admin-users',
                'position' => 110
            )
        );
    }

    public function setSubPages()
    {
//        $this->subpages = array(
//            array(
//                'parent_slug' => 'gif_generator_plugin',
//                'page_title' => 'Saved Gifs',
//                'menu_title' => 'Saved Gifs',
//                'capability' => 'manage_options',
//                'menu_slug' => 'gif_generator_saved_gifs',
//                'callback' => array($this->callbacks, 'savedGifs'),
//            ),
//
//        );
    }
}
