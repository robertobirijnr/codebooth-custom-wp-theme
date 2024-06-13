<?php

//set up
add_theme_support('menus');


//includes
include(get_template_directory() . '/includes/enqueue.php');
include(get_template_directory() . '/includes/setup.php');


//Actions and filter hooks
add_action('wp_enqueue_scripts','my_enqueue');
add_action('after_setup_theme', 'co_setup_theme');


//shortcodes