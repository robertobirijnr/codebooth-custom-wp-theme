<?php

//set up
add_theme_support('menus');


//includes
include(get_template_directory() . '/includes/enqueue.php');


//Actions and filter hooks
add_action('wp_enqueue_scripts','my_enqueue');


//shortcodes