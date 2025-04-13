<?php
/*
Plugin Name: ToolVerse EMI Calculator
Description: Interactive Loan EMI Calculator with chart, export, and dark mode.
Version: 1.0
Author: AD Media Network
Author URI: https://bankifsccodes.com
*/

function toolverse_emi_shortcode() {
    ob_start();
    include plugin_dir_path(__FILE__) . 'emi-calculator.html';
    return ob_get_clean();
}
add_shortcode('toolverse_emi', 'toolverse_emi_shortcode');
