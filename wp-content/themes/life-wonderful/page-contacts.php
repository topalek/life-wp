<?php get_header(); ?>
<?php add_filter( 'the_content', 'my_city_list' );
function my_city_list( $content ) {
	$output = str_replace( [ "<ul>", "<li>" ], [
		'<ul class="service-list portfolio contacts">',
		'<li class="service-list-item">'
	], $content );

	return $output;
}

?>
    <section id="contacts-page-hero" class="hero">
        <div class="row">
            <div class="col-md-12 no-padding">
                <div class="contacts-page-hero_img">
					<?php get_template_part( 'template-parts/nets' ); ?>
                    <div class="page_title text-xs-center">
                        <h1 class="title">Жизнь прекрасна</h1>
                        <span class="sep"></span>
                        <h2 class="description">Агентство торжеств<br>
                            Руководитель и владелец - <strong>Анна Топалова</strong></h2>
                        <a href="#" class="my-btn" data-toggle="modal" data-target="#formModal">Заказать консультацию
                            организатора событий</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="arr_top">
        <div class="row">
            <div class="col-md-12 no-padding">
                <div class="contacts-page-info">
                    <div class="contacts-page_title text-xs-center">
                        <h2 class="title text-uppercase">Впереди – Ваше знаковое событие</h2>
                        <span class="sep"></span>
                        <h3 class="slogan">и наша задача – организовать его таким образом, чтобы и Вы, и гости<br>
                            остались довольны на 120 % </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="contacts-cloud">
                    <div class="contacts-page-contacts">
                        <div class="phone">
                            <i class="icon">
                                <img src="<?= IMG_DIR; ?>svg/phone-ringing.svg" alt="phone-ringing">
                            </i>
                            <a href="tel:+380504708819">+38 (050) 470 88 19</a>
                        </div>
                        <div class="email">
                            <i class="icon">
                                <img src="<?= IMG_DIR; ?>svg/evelope.svg" alt="phone-ringing">
                            </i>
                            <a href="mailto:markiza.anna@gmail.com">markiza.anna@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h4 class="title p-b-3">&nbsp;</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4 class="title"> Организация торжественных событий в городах:</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
				<?php if ( have_posts() ) : while ( have_posts() ): the_post() ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?>

            </div>
        </div>
    </section>
<?php get_footer(); ?>