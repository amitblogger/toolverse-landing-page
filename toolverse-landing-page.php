<?php
/*
Plugin Name: ToolVerse Landing Page
Description: All-in-One Free Tools Landing Page with 20 smart tools, categories, dark mode, and responsive layout.
Version: 1.0
Author: AD Media Network
Author URI: https://bankifsccodes.com
*/

function toolverse_shortcode() {
    ob_start();
    include plugin_dir_path(__FILE__) . 'index.html';
    return ob_get_clean();
}

add_shortcode('toolverse_landing', 'toolverse_shortcode');

