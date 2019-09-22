<?php
//include_once('core/dxd_init.php');
remove_action('wp_head','rsd_link');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','wp_generator');

if (!current_user_can('administrator')):
    show_admin_bar(false);
endif;
add_theme_support('post-thumbnails');

//register_nav_menus(array(
//    'nav_header_one' => 'Навигация в header 1',
//    'nav_footer' => 'Меню в footer',
//));


