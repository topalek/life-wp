<?php
add_theme_support( 'menus');
add_theme_support( 'post-thumbnails',  ['post', 'page','event','service','review'] );
function life_register_menu(){
    register_nav_menus( ['primary'=>'Меню страниц' ,'secondary'=> 'Меню Карре/Сапфир']);
}

add_action('after_setup_theme','life_register_menu');

add_image_size( 'gallery_thumb',200,134,1);
add_image_size( 'owl_thumb',555,325,1);