<?php

function co_admin_enqueue(){
    if(!isset($_GET['page'])|| $_GET['page'] !="co_theme_opts"){
        return;
    }
        wp_register_style('co_bootstrap', get_template_directory_uri() . '/assets/css/main.css');
        wp_enqueue_style('co_bootstrap');


}