<?php
add_theme_support( 'menus');
add_theme_support( 'post-thumbnails',  ['post', 'page','event','service','review'] );
function life_register_menu(){
    register_nav_menus( ['primary'=>'Меню страниц' ,'secondary'=> 'Меню Карре/Сапфир']);
}

add_action('after_setup_theme','life_register_menu');
