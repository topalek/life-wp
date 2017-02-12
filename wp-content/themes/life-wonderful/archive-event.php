<?php get_header(); ?>
<section id="portfolio-page-hero" class="hero">
    <div class="row">
        <div class="col-md-12 no-padding">
            <div class="portfolio-page-hero_img">
				<?php get_template_part( 'template-parts/nets' ); ?>
                <div class="page_title text-xs-center">
                    <h1 class="title">Портфолио</h1>
                    <span class="sep"></span>
                    <h2 class="description">Здесь мои свадьбы, банкеты, корпоративы и торжества.<br>
                        Идеальный праздник - моя страсть и моя жизнь!</h2>
                    <a href="#" class="my-btn" data-toggle="modal" data-target="#formModal">Заказать консультацию
                        организатора событий</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portfolio" class="arr_top">
	<?php $i = 0; ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php $r = $i % 2; ?>
		<?php include 'template-parts/portfolio.php'; ?>
		<?php $i ++; ?>
	<?php endwhile; ?>
        <nav class="text-xs-center">
			<?php wp_pagenavi(); ?>
        </nav>
	<?php endif; ?>
</section>
<?php get_footer(); ?>
