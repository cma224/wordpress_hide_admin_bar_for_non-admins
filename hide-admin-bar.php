<?php
/*
Plugin Name: Hide Admin Bar from Non-Admins
Description: This plugin hides the admin bar from your site for all non-Admin users.
Text Domain: buddypress
Domain Path: /languages
Version: 1.0.1
Author: Cristian Abello
Author URI: mailto:cristian.abello@valpo.edu
License: GNU AGPL
*/

add_action('after_setup_theme','hide_admin_bar_for_non_admins');

function hide_admin_bar_for_non_admins(){
    if ((!current_user_can('administrator') && !is_admin())||(!(wp_get_current_user()->exists()))) 
        show_admin_bar(false);
}

?>
