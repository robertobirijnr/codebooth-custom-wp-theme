<?php 

function my_enqueue(){
    wp_register_style('co_bootstrap', get_template_directory_uri() . '/assets/css/main.css');
    wp_register_style('co_animation', get_template_directory_uri() . '/assets/css/plugins/animate.min.css');

    wp_enqueue_style('co_bootstrap');
    wp_enqueue_style('co_animation');

    wp_register_script('co_modernizr',get_template_directory_uri() . '/assets/js/vendor/modernizr-3.6.0.min.js');
    wp_register_script('co_bootstrap',get_template_directory_uri() . '/assets/js/vendor/bootstrap.bundle.min.js', array(), false, true);
    wp_register_script('co_waypoints',get_template_directory_uri() . '/assets/js/plugins/waypoints.js');
    wp_register_script('co_wow',get_template_directory_uri() . '/assets/js/plugins/wow.js', array(), false, true);
    wp_register_script('co_magnific',get_template_directory_uri() . '/assets/js/plugins/perfect-scrollbar.min.js', array(), false, true);
    wp_register_script('co_perfectscrollbar',get_template_directory_uri() . '/assets/js/plugins/waypoints.js', array(), false, true);
    wp_register_script('co_isotope',get_template_directory_uri() . '/assets/js/plugins/isotope.js', array(), false, true);
    wp_register_script('scrollup',get_template_directory_uri() . '/assets/js/plugins/scrollup.js', array(), false, true);
    wp_register_script('swiper-bundle',get_template_directory_uri() . '/assets/js/plugins/swiper-bundle.min.js', array(), false, true);
    wp_register_script('select2',get_template_directory_uri() . '/assets/js/plugins/select2.min.js', array(), false, true);

     wp_register_script('main',get_template_directory_uri() . '/assets/js/main.js', array(), false, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('co_modernizr');
    wp_enqueue_script('co_bootstrap');
    wp_enqueue_script('co_waypoints');
    wp_enqueue_script('co_wow');
    wp_enqueue_script('co_magnific');
    wp_enqueue_script('co_perfectscrollbar');
    wp_enqueue_script('co_isotope');
    wp_enqueue_script('scrollup');
    wp_enqueue_script('swiper-bundle');
    wp_enqueue_script('select2');
     wp_enqueue_script('main');
}