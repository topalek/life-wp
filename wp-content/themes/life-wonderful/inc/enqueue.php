<?php

function life_admin_scripts($hook){
//    if ('toplevel_page_life_options_setup' != $hook){
//        return ;
//    }
    wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css',[]);
    wp_register_style('life-admin',get_template_directory_uri().'/css/admin.css',['bootstrap']);

	wp_enqueue_media();
	wp_register_script('life-admin-script',get_template_directory_uri().'/js/life.admin.js',['jquery']);
	wp_enqueue_script('life-admin-script');
    wp_enqueue_style('life-admin');
}

add_action('admin_enqueue_scripts','life_admin_scripts');

function life_load_scripts(){
	wp_deregister_script( 'jquery');
	wp_register_script( 'jquery',get_template_directory_uri().'/js/jquery.min.js');
	wp_enqueue_style( 'bootstrap',get_template_directory_uri().'/css/bootstrap.css',[]);
	wp_enqueue_style( 'font-awesome',get_template_directory_uri().'/css/font-awesome.min.css',[]);
	wp_enqueue_style( 'animate',get_template_directory_uri().'/css/animate.css',[]);
	wp_enqueue_style( 'lightgallery',get_template_directory_uri().'/css/lightgallery.css',[]);
	wp_enqueue_style( 'owl.carousel',get_template_directory_uri().'/css/owl.carousel.css',[]);
	wp_enqueue_style( 'style',get_template_directory_uri().'/css/style.css',[]);

	wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.js',['jquery']);
	wp_enqueue_script('modernizr',get_template_directory_uri().'/js/modernizr-custom.js',['jquery']);
	wp_enqueue_script('owl.carousel',get_template_directory_uri().'/js/owl.carousel.js',['jquery']);
	wp_enqueue_script('lightgallery',get_template_directory_uri().'/js/lightgallery.js',['jquery']);
//	wp_enqueue_script('mousewheel',get_template_directory_uri().'/js/jquery.mousewheel-3.0.6.pack.js',['jquery']);
	wp_enqueue_script('lg-video',get_template_directory_uri().'/js/lg-video.min.js',['jquery']);
	wp_enqueue_script('lg-fullscreen',get_template_directory_uri().'/js/lg-fullscreen.min.js',['jquery']);
	wp_enqueue_script('wow',get_template_directory_uri().'/js/wow.js',['jquery']);
	wp_enqueue_script('app',get_template_directory_uri().'/js/app.js',['jquery']);
}
add_action('wp_enqueue_scripts','life_load_scripts');