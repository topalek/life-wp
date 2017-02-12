<?php get_header(); ?>
<? $id =get_cat_ID( single_cat_title('',0)) ;
$query = new WP_Query(['cat'=>4,'post_type'=>'service']);
 if ( $query->have_posts() ) :  while ( $query->have_posts() ) : $query->the_post();?>
	 <?php $r = $i % 2; ?>
	 <?php include 'template-parts/portfolio.php'; ?>
	 <?php $i ++; ?>
 <?php endwhile; ?>
     <nav class="text-xs-center">
		 <?php wp_pagenavi(); ?>
     </nav>
 <?php endif; ?>

  <?php wp_reset_postdata(); ;?>
<?php get_footer(); ?>