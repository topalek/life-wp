<?php add_filter( 'the_content', 'wpautop');
global $wpdb;
if ( isset( $_POST['url'] ) && isset( $_POST['query'] ) ) {
	$url  = $_POST['url'];
	$q    = $_POST['query'];
	$page = explode( 'page/', $url )[1];
	$page = rtrim( $page, '/' );
	$html = '';
	switch ( $q ) {
		case 'sapphire':
			$p    = new WP_Query( [
				'post_type' => 'review',
				'meta_key'  => 'review_sapphire',
				'paged'     => $page
			] );
			$html = build_html( $p );
			wp_reset_postdata();

			break;
		case 'carre':
			$p    = new WP_Query( [
				'post_type' => 'review',
				'meta_key'  => 'review_carre',
				'paged'     => $page
			] );
			$html = build_html( $p );
			wp_reset_postdata();

			break;
		default:
			$sql  = "SELECT ID FROM `life_posts`LEFT JOIN life_postmeta ON ID=post_id WHERE `post_type`='review' AND meta_key in ('review_carre','review_sapphire')";
			$ids  = ArrayHelper::getColumn( $wpdb->get_results( $sql ), 'ID' );
			$p    = new WP_Query( [
				'post_type'    => 'review',
				'post__not_in' => $ids,
				'paged'        => $page
			] );
			$html = build_html( $p );
			wp_reset_postdata();
	}

	return $html;
}


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
		echo wp_pagenavi( [ 'query' => $query ] );
		echo '</nav>';
	endif;
	wp_reset_postdata();
	$output = ob_get_clean();
	echo $output;
}

; ?>
<?php get_header(); ?>
    <section id="review-page-hero" class="hero">
        <div class="row">
            <div class="col-md-12 no-padding">
                <div class="review-page-hero_img">
                    <div class="nets">
                        <ul class="social">
                            <li><a href="https://www.facebook.com/anna.topalova.92" class="net_link"><i
                                            class="fa fa-facebook-f"></i></a></li>
                            <li><a href="https://vk.com/life_is_wonrderful" class="net_link"><i
                                            class="fa fa-vk"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UC8LX2tdQFKok1i3tecVx1Iw" class="net_link"><i
                                            class="fa fa-youtube-play"></i></a></li>
                            <li><a href="https://www.instagram.com/anna.topalova/" class="net_link"><i
                                            class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="page_title text-xs-center">
                        <h1 class="title">Отзывы</h1>
                        <span class="sep"></span>
                        <h2 class="description">Отзывы о моей работе - это самое главное!<br>
                            Вся работа, всё - украшения зала, музыка, шоу-программа<br>
                            только для Ваших идеальных эмоций!</h2>
                        <a href="#" class="my-btn" data-toggle="modal" data-target="#formModal">Заказать консультацию
                            организатора событий</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="reviews" class="arr_top">
        <div class="row">
            <div class="col-md-12">
                <ul class="btn-block clearfix tabs" role="tablist">
                    <li class="nav-item col-xs-12 col-sm-4">
                        <a class="tab my-btn ghost active" data-toggle="tab" href="#events" role="tab">Мероприятия</a>
                    </li>
                    <li class="nav-item col-xs-12 col-sm-4">
                        <a class="tab my-btn ghost" data-toggle="tab" href="#sapphire" role="tab">Театр песни
                            "Сапфир"</a>
                    </li>
                    <li class="nav-item col-xs-12 col-sm-4">
                        <a class="tab my-btn ghost" data-toggle="tab" href="#carre" role="tab">Кавер-группа "Carre"</a>
                    </li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content reviews">
                    <div class="tab-pane in active" id="events" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
								<?php $i = 0;
								$sql     = "SELECT ID FROM `life_posts`LEFT JOIN life_postmeta ON ID=post_id WHERE `post_type`='review' AND meta_key in ('review_carre','review_sapphire')";
								$ids     = ArrayHelper::getColumn( $wpdb->get_results( $sql ), 'ID' );
								$query   = new WP_Query( [
									'post_type'    => 'review',
									'post__not_in' => $ids
								] );
								?>
								<?php if ( $query->have_posts() ) :
								while ( $query->have_posts() ) : $query->the_post();
									$r = $i % 2; ?>
									<?php include 'template-parts/review.php'; ?>
									<?php $i ++; endwhile; ?>
                            <!--</div>
                            <div class="col-md-12">-->
                                <nav class="text-xs-center">
									<?php wp_pagenavi( [ 'query' => $query ] ); ?>
                                </nav>
                            </div>
							<?php endif;
							wp_reset_postdata();
							?>
                        </div>
                    </div>
                    <div class="tab-pane" id="sapphire" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
								<?php $i = 1;
								$query   = new WP_Query( [
									'post_type' => 'review',
									'meta_key'  => 'review_sapphire'
								] ); ?>
								<?php if ( $query->have_posts() ) :
								while ( $query->have_posts() ) : $query->the_post();
									$r = $i % 2; ?>
									<?php include 'template-parts/review.php'; ?>
									<?php $i ++; endwhile; ?>
                            <!--</div>
                            <div class="col-md-12">-->
                                <nav class="text-xs-center">
									<?php wp_pagenavi( [ 'query' => $query ] ); ?>
                                </nav>
                            </div>
							<?php endif;
							wp_reset_postdata();
							?>
                        </div>
                    </div>
                    <div class="tab-pane" id="carre" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
								<?php $i = 0;
								$query   = new WP_Query( [
									'post_type' => 'review',
									'meta_key'  => 'review_carre'
								] );
								?>
								<?php if ( $query->have_posts() ) :
								while ( $query->have_posts() ) : $query->the_post();
									$r = $i % 2;
									?>
									<?php include 'template-parts/review.php'; ?>
									<?php $i ++; ?>
								<?php endwhile; ?>
                           <!-- </div>
                            <div class="col-md-12">-->
                                <nav class="text-xs-center">
									<?php wp_pagenavi( [ 'query' => $query ] ); ?>
                                </nav>
                            </div>
							<?php endif;
							wp_reset_postdata();
							?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>