<?php
/*
Plugin Name: React Demo
Description: Demonstrates React integration in WordPress
Version: 1.0
Author: Your Name
*/

function enqueue_react_demo_script() {
    wp_enqueue_script(
        'react-demo-script',
        plugin_dir_url(__FILE__) . 'build/index.js',
        array('wp-element'),
        filemtime(plugin_dir_path(__FILE__) . 'build/index.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_react_demo_script');

function react_demo_shortcode($atts) {
    $a = shortcode_atts(array(
        'id' => 'react-demo-container',
        'text' => 'Hello from React Demo!',
    ), $atts);

    return '<div id="' . esc_attr($a['id']) . '" data-text="' . esc_attr($a['text']) . '"></div>';
}
add_shortcode('react_demo', 'react_demo_shortcode');