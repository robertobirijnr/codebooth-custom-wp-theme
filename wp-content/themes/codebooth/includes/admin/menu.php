<?php

function co_admin_menu(){
    add_menu_page('Codebooth_Theme_Options','Theme Options','edit_theme_options','co_theme_opts','co_theme_opts_page');
}