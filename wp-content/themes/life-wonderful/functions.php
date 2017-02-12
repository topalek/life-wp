<?php
define('IMG_DIR', get_template_directory_uri()."/img/");

require get_template_directory() . '/inc/term-meta-image.php';
require get_template_directory() . '/inc/class/ArrayHelper.php';
remove_filter( 'the_content', 'wpautop' );

function d($x){
	echo "<pre>";
	print_r( $x);die;
}
function menu_no_link($no_link){
	$in_link = '!<li(.*?)class="(.*?)current-menu-item(.*?)"><a(.*?)>(.*?)</a>!si';
	$out_link = '<li$1class="\\2current-menu-item\\3"><span class="active">$5</span>';
	return preg_replace($in_link, $out_link, $no_link );
}
add_filter('wp_nav_menu', 'menu_no_link');

add_filter('post_gallery', 'my_gallery_output', 10, 2);
function my_gallery_output( $output, $attr ){

	$ids_arr = explode(',', $attr['ids']);
	$ids_arr = array_map('trim', $ids_arr );
	$pictures = get_posts( array(
		'posts_per_page' => -1,
		'post__in'       => $ids_arr,
		'post_type'      => 'attachment',
		'orderby'        => 'post__in',
	) );
	if( ! $pictures ) return 'Запрос вернул пустой результат.';
//	echo "<pre>";
//	print_r( $pictures);
	// Вывод
	$out = '<div class="photo-gallery">';

	// Выводим каждую картинку из галереи
	foreach( $pictures as $pic ){
		$src = $pic->ID;
		$t = esc_attr( $pic->post_title );
		$title = ( $t && false === strpos($src, $t)  ) ? $t : '';

		$caption = ( $pic->post_excerpt != '' ? $pic->post_excerpt : $title );

		$out .= '<a class="photo-gallery-item"  href="'. $pic->guid .'">
			<img class="img-fluid" src="'.wp_get_attachment_image_url( $src,'gallery_thumb') .'" alt="'. $title .'" />
			</a>';//.( $caption ? "<span class='caption'>$caption</span>" : '' );
	}

	$out .=   '</div>';

	return $out;
}

function get_part($slug){
	if (!file_exists( $slug.'.php')) return '';
	$filename = $slug.'.php';
	include file_get_contents( $filename);
}

function owl_carousel($ids){
	if (!$ids) return;
	$pictures = get_posts( array(
		'posts_per_page' => -1,
		'post__in'       => $ids,
		'post_type'      => 'attachment',
		'orderby'        => 'post__in',
	) );
	if( ! $pictures ) return 'Запрос вернул пустой результат.';
	$out = '<div class="carousel">
                        <div class="portfolio-carousel">';
	foreach ( $pictures as $pic ) {
		$out.= '<div class="carousel-item">';
		$src = $pic->ID;
		$t = esc_attr( $pic->post_title );
		$title = ( $t && false === strpos($src, $t)  ) ? $t : '';
		$out.= '<img class="carousel-img img-fluid" src="'.wp_get_attachment_image_url( $src,'owl_thumb') .'" alt="'. $title .'" >';
		$out.= '</div>';
		$out.= '';
	}
	$out.='                </div>
            </div>';
	return $out;
}
require get_template_directory() . '/inc/functions-admin.php';
require get_template_directory() . '/inc/theme_support.php';
require get_template_directory() . '/inc/enqueue.php';