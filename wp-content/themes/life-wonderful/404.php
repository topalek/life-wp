<?php get_header();
global $wpdb;
function build_html( $query ) {

	ob_start();
	$i = 0;
	if ( $query->have_posts() ) :
		while ( $query->have_posts() ) : $query->the_post();
			$r = $i % 2;
			get_template_part( 'template-parts/review' );
			$i ++;
		endwhile;
		echo '<nav class="text-xs-center">';
		echo wp_pagenavi(['query'=>$query]);
		echo '</nav>';
	endif;
	wp_reset_postdata();
	$output = ob_get_clean();
	return $output;
}
$sql  = "SELECT ID FROM `life_posts`LEFT JOIN life_postmeta ON ID=post_id WHERE `post_type`='review' AND meta_key in ('review_carre','review_sapphire')";
$ids  = ArrayHelper::getColumn( $wpdb->get_results( $sql ), 'ID' );
$p    = new WP_Query( [
	'post_type'    => 'review',
	'post__not_in' => $ids,
	'paged'        => 1
] );
$html = build_html( $p );
wp_reset_postdata();
?>
<section>

<?php echo $html;?>
</section>
<?php get_footer(); ?>