<?php

/**
 * @package Gif Generator
 */

/*
Plugin Name: Sidora Login
Plugin URI: http://gif_plugin.test/
Description: A plugin with a modern Login UI
Version: 1.0.0
Author: Liman Kastrati
Author URI: https://www.linkedin.com/in/liman-kastrati-793b82174/
License: GPLv2 or later
Text Domain: sidora-login
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright (C) 2022 Liman Kastrati
*/

// Make sure we don't expose any info if called directly

use Inc\Base\Activate;
use Inc\Base\AddCustomPage;
use Inc\Base\Deactivate;

if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

if(file_exists(dirname(__FILE__) . '/vendor/autoload.php')){
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

define('PLUGIN_PATH',plugin_dir_path(__FILE__));
define('PLUGIN_URL',plugin_dir_url(__FILE__));
define('PLUGIN',plugin_basename(__FILE__));



function activate_gif_generator_plugin(){
    Activate::activate();
}
register_activation_hook(__FILE__,'activate_gif_generator_plugin');


function deactivate_gif_generator_plugin(){
    Deactivate::deactivate();
}
register_activation_hook(__FILE__,'deactivate_gif_generator_plugin');

function add_my_custom_page(){
    AddCustomPage::add_my_custom_page();
}
register_activation_hook(__FILE__,'add_my_custom_page');

if (class_exists('Inc\\Init')){
    Inc\Init::register_services();
}

