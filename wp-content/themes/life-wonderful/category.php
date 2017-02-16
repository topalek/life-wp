<?php get_header(); ?>
    <section id="contacts-page-hero" class="hero">
        <div class="row">
            <div class="col-md-12 no-padding">
                <div class="contacts-page-hero_img">
					<?php get_template_part( 'template-parts/nets' ); ?>
                    <div class="page_title text-xs-center">
                        <h1 class="title"><?=single_cat_title() ; ?></h1>
                        <!--<span class="sep"></span>
                        <h2 class="description">категория</h2>-->
                        <a href="#" class="my-btn" data-toggle="modal" data-target="#formModal">Заказать консультацию
                            организатора событий</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<h3></h3>
<? $id =get_cat_ID( single_cat_title('',0)) ;
$query = new WP_Query(['cat'=>$id,'post_type'=>'service']);
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