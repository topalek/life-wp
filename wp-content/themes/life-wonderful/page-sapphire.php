<?php get_header();
remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'set_servise_list' );

function set_servise_list( $content ) {
	$output = str_replace( [ "<ul>", "<li>" ], [
		'<ul class="portfolio service-list">',
		'<li class="service-list-item">'
	], $content );

	return $output;
}

$thumb = get_the_post_thumbnail_url( $post->ID );
$style = '';
if ( $thumb ) {
	$style = ' style="background-image: url(' . $thumb . ');" ';
}
?>
	<section id="carre-page-hero" class="hero wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
		<div class="row">
			<div class="col-md-12 no-padding">
				<div class="carre-page-hero_img" <?= $style ?>>
					<?php get_template_part( 'template-parts/nets' ); ?>
					<div class="page_title text-xs-center">
						<h1 class="title">Зажигательный cover band для Вашего идеального события!</h1>
						<h2 class="description">Живое общение с публикой через музыку</h2>
						<a class="my-btn" href="#" data-toggle="modal" data-target="#formModal">Заказать консультацию
							организатора событий</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div id="playlistModal" class="modal fade" tabindex="-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" type="button" data-dismiss="modal">×</button>
					<div class="row">
						<div class="col-xs-12">
							<div class="modal-top text-xs-center clearfix">
								<img class="playlist-icon" src="<?= IMG_DIR; ?>carre/playlist.png" alt=""/>
								<h4 id="exampleModalLabel" class="modal-title d-inline-block">Плей-лист кавер-группы
									“Carre”</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div id="playlist-content">
								<div class="playlist-photo">
									<img class="playlist-thumb img-fluid" src="<?= IMG_DIR; ?>carre/playlist-photo.png" alt=""/>
								</div>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<?php the_content(); ?>
								<?php endwhile; ?><?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section id="about" class="arr_top">
		<div class="row">
			<div class="col-md-12 no-padding">
				<div class="contacts-page-info">
					<div class="contacts-page_title text-xs-center">
						<h2 class="title text-uppercase">Репертуар</h2>
						<h3 class="slogan">Репертуар кавер-группы “Carre” мультижанровый: популярные песни,
							народные, казацкие, ретро, авторские, а-капелла, инструментальные,
							вокально-инструментальные композиции.</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6 offset-md-3 text-xs-center">
						<div class="m-x-auto">
							<a class="my-btn ghost p-25" href="#" data-toggle="modal" data-target="#playlistModal">Стотреть
								плей-лист &gt;</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="portfolio">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-title">портфолио</h2>
			</div>
		</div>
		<?php $main_video_src = get_post_meta( $post->ID, 'main_page_video' );
		$main_video_src       = $main_video_src[0];
		if ( $main_video_src ):
		?>
		<div class="row">
			<div class="col-md-12 no-padding">
				<div class="arr_top promo-video">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item"
						        src="//www.youtube.com/embed/<?= explode( '=', $main_video_src )[1]; ?>?rel=0"
						        allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<?php endif; ?>
	</section>
<?php
$video_gallery_src[] = get_post_meta( $post->ID, 'page_video1' );
$video_gallery_src[] = get_post_meta( $post->ID, 'page_video2' );
$video_gallery_src[] = get_post_meta( $post->ID, 'page_video3' );
$video_gallery_src   = array_filter( ArrayHelper::getColumn( $video_gallery_src, 0 ) );
if ( $video_gallery_src ):
	$col = 12 / count( $video_gallery_src );
	?>
	<section class="gallery">
		<div class="video-gallery">
			<div class="row">
				<?php foreach ( $video_gallery_src as $item ) :
					$url = "https://i.ytimg.com/vi/" . explode( '=', $item )[1] . "/hqdefault.jpg"
					?>
					<div class="col-md-<?= $col; ?>">
						<a class="fancybox embed-responsive embed-responsive-16by9" href="<?= $item; ?>">
							<img class="img-fluid fancy-img" src="<?= $url; ?>" alt=""/>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>
<?php $ids = get_post_meta( $post->ID, 'page_gallery' );
if ( $ids ):?>
	<section id="photo">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-title">фото</h2>
			</div>
		</div>
		<div class="row text-xs-center">
			<?php
			$gallery = '[gallery ids="' . implode( ",", $ids ) . '"]';
			echo do_shortcode( $gallery );
			?>
		</div>
	</section>
<?php endif; ?>
<?php $reviews = get_posts([
	'posts_per_page' => 3,
	'meta_key'       => 'review_carre',
	'post_type'      => 'review',
]);
$i=0;
if ($reviews): ?>
	<section id="carre-reviews">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-title">Несколько отзывов</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 no-padding">
				<div class="carre-review-bg arr_top">
					<div class="page_title text-xs-center">
						<h2 class="title text-uppercase">"жизнь прекрасна"</h2>
						&nbsp;
						<h3 class="slogan">Готовьте ваши туфельки, милые леди!</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="reviews">
					<?php foreach ( $reviews as $post ) :
						$r = $i%2; ?>
						<?php include  'template-parts/review.php'; ?>
						<!--<div class="review-post">
							<div class="row">
								<div class="<?/*if ($r) echo 'invert';*/?>">
									<div class="col-md-6 <?/*if ($r) echo 'right';*/?>">
										<div class="review-content">
											<div class="review-title">
												<h3><?/*= $review->post_title; */?></h3>
											</div>
											<div class="review-text">
												<?/*= $review->post_content; */?>
											</div>
											<div class="review-author">
												<?/*= ArrayHelper::getValue( get_post_meta( $review->ID, 'review_author' ), 0 ); */?>
											</div>
										</div>
									</div>
									<div class="col-md-6 text-xs-center">
										<div class="review-image <?/*if ($r) echo 'left';*/?>">
											<img class="review-thumb"
											     src="<?/*= get_the_post_thumbnail_url( $review->ID, 'medium' ); */?>" alt=""/>
										</div>
									</div>
								</div>
							</div>
						</div>-->
						<?php $i++;
					endforeach;?>
				</div>
			</div>
		</div>
	</section>
<?php endif;?>
	<section id="carre-more">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-title">Группа на праздник - это почти самое главное!</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 no-padding">
				<div class="carre-more-bg arr_top">
					<div class="page_title text-xs-center">
						<h2 class="title text-uppercase">"жизнь прекрасна"</h2>
						<h3 class="slogan">Никто не вспомнит салаты,
							но все будут помнить танцы!</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7">
				<div class="planing-text">
					<h3>Для усиления эмоций, предлагаю ещё заказать:</h3>
					<ul class="portfolio service-list">
						<li class="service-list-item">Хороший звук</li>
						<li class="service-list-item">Дым-машину</li>
						<li class="service-list-item">Светомузыку</li>
						<li class="service-list-item">Бумажное шоу</li>
						<li class="service-list-item">Мыльные пузыри</li>
					</ul>
				</div>
			</div>
			<div class="pull-right">
				<div class="ann">
					<div class="ann-name">Анна Топалова</div>
					<h3 class="ann-position">Руководитель агентства</h3>
				</div>
			</div>
		</div>
	</section>


<?php get_footer(); ?>