<?php

//set up
add_theme_support('menus');
add_theme_support('title-tag');


//includes
include(get_template_directory() . '/includes/enqueue.php');
include(get_template_directory() . '/includes/setup.php');
include(get_template_directory() . '/includes/activate.php');
include(get_template_directory() . '/includes/admin/menu.php');
include(get_template_directory() . '/includes/admin/options-page.php');
include(get_template_directory() . '/includes/admin/init.php');


//Actions and filter hooks
add_action('wp_enqueue_scripts','my_enqueue');
add_action('after_setup_theme', 'co_setup_theme');
add_action('after_switch_theme','co_activate');
add_action('admin_menu','co_admin_menu');
add_action('admin_init','co_admin_init');


//shortcodes