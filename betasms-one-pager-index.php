<?php

/*
  Plugin Name: The One Pager Plugin
  Description: Plugin for doing sending SMS, buying DATA, pay bills etc
  Version: 1
  Author: Betasms
  Author URI: http://GoshenSoftInc.com
  Plugin URL: https://github.com/OgaBoss/one-pager-wp-plugin
 */
add_action('admin_menu', 'at_alphansotech_menu');
add_action('wp_enqueue_scripts', 'add_up_styles');

function at_alphansotech_menu() {
    add_menu_page('employee_list', //page title
        'Employee Listing', //menu title
        'manage_options', //capabilities
        'Employee Listing', //menu slug
        'employee_list' //function
    );
}

function add_up_styles() {
    wp_register_style( 'normalize',  plugins_url('css/normalize.css', __FILE__));
    wp_register_style( 'default',  plugins_url('css/default.css', __FILE__));
    wp_register_style( 'tabs',  plugins_url('css/tabs.css', __FILE__));
    wp_register_style( 'tabstyles',  plugins_url('css/tabstyles.css', __FILE__));
    wp_register_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css', array(), '4.2.0' );

    wp_register_script( 'tabsJS', plugins_url('js/cbpFWTabs.js', __FILE__));
    wp_register_script( 'modernizr', plugins_url('js/modernizr.custom.js', __FILE__));

    wp_enqueue_style( 'fontawesome' );
    wp_enqueue_style('normalize');
    wp_enqueue_style('default');
    wp_enqueue_style('tabs');
    wp_enqueue_style('tabstyles');

    wp_enqueue_script('tabsJS');
    wp_enqueue_script('modernizr');
}

function add_up_scripts() {}


// returns the root directory path of particular plugin
define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . '/partials/iframe-one-pager.php');