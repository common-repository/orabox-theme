<?php

/*
Plugin Name: Orabox Theme
Plugin URI: https://github.com/RafaelSempere/Orabox
Description: The theme that you were looking for.
Author: Rafael Sempere
Author URI: https://rafaelsempere.com
Version: 1.1
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

function orabox_style() {
    wp_enqueue_style('orabox-theme', plugins_url('orabox.css', __FILE__));
}


add_action('admin_enqueue_scripts', 'orabox_style');
add_action('login_enqueue_scripts', 'orabox_style');

?>
