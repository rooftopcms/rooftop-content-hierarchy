<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://errorstudio.co.uk
 * @since             1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       Rooftop Content Hierarchy
 * Plugin URI:        http://errorstudio.co.uk
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Error
 * Author URI:        http://errorstudio.co.uk
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rooftop-content-hierarchy
 * Domain Path:       /languages
 */

function add_content_hierarchy($response, $post, $request) {
    $ancestor_posts   = array_map(function($id){
        return get_post($id);
    }, get_post_ancestors($post));
    $child_posts = get_children($post->ID);

    $post_data = function($p) {
        $post_data = array();
        $post_data['ID'] = $p->ID;
        $post_data['title'] = $p->post_title;
        $post_data['type'] = $p->post_type;
        $post_data['slug'] = $p->post_name;
        return $post_data;
    };

    foreach($child_posts as $post) {
        $response->add_link('children', "", $post_data($post));
    };

    foreach($ancestor_posts as $post) {
        $response->add_link('ancestors', "", $post_data($post));
    };

    return $response;
}

add_filter('rest_prepare_page', 'add_content_hierarchy', 10, 3);
?>


