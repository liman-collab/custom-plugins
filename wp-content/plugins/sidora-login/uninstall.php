<?php

/**
 * Trigger this file on Plugin uninstall
 *
 * @package Sidora Login
 */

if (!defined('WP_UNINSTALL_PLUGIN')){
    die ;
}

//Clear Database stored data
//$videos = get_posts(array('post_type'=>'video','numberposts'=>-1));
//
//foreach ($videos as $video){
//    wp_delete_post($video->ID,true);
//}

//Access the database via SQL

global $wpdb;
//$wpdb->query("DELETE FROM wp_posts WHERE post_name like 'my-custom-page' ");
$wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)");
$wpdb->query("DELETE FROM wp_term_relationship WHERE object_id NOT IN (SELECT id FROM wp_posts)");