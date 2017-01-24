<?php
require get_template_directory() . '/inc/term-meta-image.php';
remove_filter( 'the_content', 'wpautop' );

function d($x){
	echo "<pre>";
	print_r( $x);die;
}

/*
 * Изменение вывода галереи через шоткод
 * Смотреть функцию gallery_shortcode в http://wp-kama.ru/filecode/wp-includes/media.php
 * $output = apply_filters( 'post_gallery', '', $attr );
 */
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

	// Вывод
	$out = '<div class="photo-gallery">';

	// Выводим каждую картинку из галереи
	foreach( $pictures as $pic ){
		$src = $pic->guid;
		$t = esc_attr( $pic->post_title );
		$title = ( $t && false === strpos($src, $t)  ) ? $t : '';

		$caption = ( $pic->post_excerpt != '' ? $pic->post_excerpt : $title );

		$out .= '<a class="photo-gallery-item"  href="'. $src .'">
			<img class="img-fluid" src="'. kama_thumb_src(['w'=>200,'h'=>134 ,'src'=> $src ]) .'" alt="'. $title .'" />
			</a>'.( $caption ? "<span class='caption'>$caption</span>" : '' );
	}

	$out .=   '</div>';

	return $out;
}
require get_template_directory() . '/inc/functions-admin.php';
require get_template_directory() . '/inc/theme_support.php';
require get_template_directory() . '/inc/enqueue.php';