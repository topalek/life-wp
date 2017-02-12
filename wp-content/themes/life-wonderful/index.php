<?php get_header(); ?>

<?php if (is_front_page()): ?>
	<section id="hero" class="hero wow fadeIn">
		<div class="row">
			<div class="col-md-12 no-padding">
				<div class="hero_img">
					<?php get_template_part( 'template-parts/nets');?>
					<div class="page_title text-xs-center">
						<h1 class="title">Профессиональная организация <br> Вашего идеального события!</h1>
						<span class="sep"></span>
						<h2 class="description">24 000 гостей уже никогда не забудут свой восторг, от созданных нами
							<br>
							свадеб, юбилеев, банкетов и корпоративов</h2>
						<a href="#" class="my-btn" data-toggle="modal" data-target="#formModal">Заказать консультацию организатора событий</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php $cat = ArrayHelper::map(array_filter( get_categories()), 'term_id', 'name');?>
	<section id="services" class="arr_top">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-title">услуги</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
						<?php foreach ( $cat as $id=>$term ) :
							$services = get_posts(['cat'=>$id,'post_type'=>'service','post_per_page'=>5]);
							if ($services):?>

                                <div class="col-sm-6 col-md-4 col-xs-12">
                                    <div class="service-item clearfix">
                                        <div class="col-xs-2 no-padding">
											<?php $th_id = ArrayHelper::getValue(get_term_meta( $id) , '_thumbnail_id.0');
											$src=wp_get_attachment_image_src( $th_id)[0];
											?>
                                            <img src="<?php echo $src ;?>" alt="">
                                        </div>
                                        <div class="col-xs-10">
                                            <h3 class="service-title">
                                                <a class="more-link" href="<?php echo get_category_link($id);?>">
													<?php echo $term;?>
                                                </a>
                                            </h3>
                                            <div class="service-text">

                                                <ul class="service-list">
													<?php foreach ($services as $service):?>
                                                        <li class="service-list-item"><?=$service->post_title;?></li>
													<?php endforeach;?>
                                                </ul>
                                            </div>
                                            <div class="service-more">
                                                <a class="more-link" href="<?php echo get_category_link($id);?>">Подробнее
                                                    <span>></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							<?php endif;?>
						<?php endforeach;?>
                    </div>
                </div>
			</div>
		</div>
		<div class="bnt-container">
			<div class="row">
				<div class="col-md-6">
					<a href="#" class="my-btn simple" data-toggle="modal" data-target="#formModal">Заказать персональную консультацию <br> о всех оказываемых
						услугах</a>
				</div>
				<div class="col-md-6">
					<a href="/service/" class="my-btn ghost p-25">Стотреть все услуги <span> ></span></a>
				</div>
			</div>
		</div>
	</section>
	<section id="portfolio" class="wow slideInUp">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-title">свежее портфолио</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 no-padding">
				<div class="portfolio-img arr_top">
					<div class="page_title text-xs-center">
						<h2 class="title text-uppercase">"жизнь прекрасна"</h2>
						<span class="sep"></span>
						<h3 class="slogan">Ваше агентство торжеств</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="portfolio-post-type-wedding clearfix">
				<div class="col-md-6 col-sm-12">
					<div class="entry">
						<div class="entry-title">
							<h3 class="post-title">Шикарная пара, шикарная свадьба.<br>
								Красота в каждой детали!</h3>
						</div>
						<div class="post-services">
							<ul class="portfolio service-list">
								<li class="service-list-item">Прокат авто</li>
								<li class="service-list-item">Фотозоны</li>
								<li class="service-list-item">Candy bar</li>
								<li class="service-list-item">Ведущий</li>
								<li class="service-list-item">Музыканты</li>
							</ul>
						</div>
						<div class="service-more">
							<a class="more-link" href="#">Подробнее
								<span>></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 no-padding">
					<div class="carousel">
						<div class="owl-carousel">
							<div class="carousel-item">
								<img src="<?= get_template_directory_uri();?>/img/wedding/wed-1.jpg" alt="" class="carousel-img img-fluid"></div>
							<div class="carousel-item">
								<img src="<?= get_template_directory_uri();?>/img/wedding/wed-2.jpg" alt="" class="carousel-img img-fluid"></div>
							<div class="carousel-item">
								<img src="<?= get_template_directory_uri();?>/img/wedding/wed-3.jpg" alt="" class="carousel-img img-fluid"></div>
							<div class="carousel-item">
								<img src="<?= get_template_directory_uri();?>/img/wedding/wed-4.jpg" alt="" class="carousel-img img-fluid"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="portfolio-post-type-wedding invert clearfix">
				<div class="col-md-6 right col-sm-12">
					<div class="entry">
						<div class="entry-title">
							<h3 class="post-title">Одним словом, это было феерично!
								Стильный Евгений и нереальная Мариам!
								Свадьба пролетела за минуту...</h3>
						</div>
						<div class="post-services">
							<ul class="portfolio service-list">
								<li class="service-list-item">Спецэффекты: Салют, дым, пузыри, проектор</li>
								<li class="service-list-item">Пригласительные, свадебная полиграфия</li>
								<li class="service-list-item">Техническое обеспечение: звук, свет</li>
								<li class="service-list-item">Подарки для гостей (бонбоньерки с конфетами)</li>
								<li class="service-list-item">Cover группа</li>
							</ul>
						</div>
						<div class="service-more">
							<a class="more-link" href="#">Подробнее
								<span>></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 no-padding">
					<div class="carousel">
						<div class="owl-carousel">
							<div class="carousel-item">
								<img src="<?= get_template_directory_uri();?>/img/wedding/wed-1.jpg" alt="" class="carousel-img img-fluid"></div>
							<div class="carousel-item">
								<img src="<?= get_template_directory_uri();?>/img/wedding/wed-2.jpg" alt="" class="carousel-img img-fluid"></div>
							<div class="carousel-item">
								<img src="<?= get_template_directory_uri();?>/img/wedding/wed-3.jpg" alt="" class="carousel-img img-fluid"></div>
							<div class="carousel-item">
								<img src="<?= get_template_directory_uri();?>/img/wedding/wed-4.jpg" alt="" class="carousel-img img-fluid"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="portfolio-post-type-wedding clearfix">
				<div class="col-md-6 col-sm-12">
					<div class="entry">
						<div class="entry-title">
							<h3 class="post-title">Свадьба в Роше Рояле</h3>
						</div>
						<div class="post-services">
							<ul class="portfolio service-list">
								<li class="service-list-item">Ведущий</li>
								<li class="service-list-item">Музыканты</li>
								<li class="service-list-item">Ди-джей</li>
								<li class="service-list-item">Свадебный декор</li>
								<li class="service-list-item">Выездная церемония</li>
							</ul>
						</div>
						<div class="service-more">
							<a class="more-link" href="#">Подробнее
								<span>></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 no-padding">
					<div class="carousel">
						<div class="owl-carousel">
							<div class="carousel-item">
								<img src="<?= get_template_directory_uri();?>/img/wedding/wed-1.jpg" alt="" class="carousel-img img-fluid"></div>
							<div class="carousel-item">
								<img src="<?= get_template_directory_uri();?>/img/wedding/wed-2.jpg" alt="" class="carousel-img img-fluid"></div>
							<div class="carousel-item">
								<img src="<?= get_template_directory_uri();?>/img/wedding/wed-3.jpg" alt="" class="carousel-img img-fluid"></div>
							<div class="carousel-item">
								<img src="<?= get_template_directory_uri();?>/img/wedding/wed-4.jpg" alt="" class="carousel-img img-fluid"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bnt-container">
			<div class="row">
				<div class="col-md-6 text-lg-center">
					<a href="#" class="my-btn ghost p-25">Стотреть все услуги <span> ></span></a>
				</div>
			</div>
		</div>
	</section>
	<section id="reviews wow fadeIn">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-title">Несколько отзывов</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 no-padding">
				<div class="review-img arr_top">
					<div class="page_title text-xs-center">
						<h2 class="title text-uppercase">"жизнь прекрасна"</h2>
						<span class="sep"></span>
						<h3 class="slogan">Праздник Вашей мечты и даже больше!</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="review-post">
			<div class="row">
				<div class="col-md-6">
					<div class="review-content">
						<div class="review-title">
							<h3>Румика и Дмитрий</h3>
						</div>
						<div class="review-text">
							<p>Хотим выразить огромную благодарность за прекрасную работу компании
								"Жизнь прекрасна" в лице Анны Топаловой, за организацию нашей свадьбы,
								подбор великолепного ведущего Антона. Он зажог наш праздник на гребне
								волны и никому не позволил скучать. Мы были в восторге от оформления
								зала. Все наши пожелания были учтены и даже более.</p>
							<p>Желаем вам только процветания, успешных проведенных торжеств, и
								чтобы все молодожены обращались только к вам!!!</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 text-md-center">
					<div class="review-image"><img
							src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcT364T-M_6GcxAxPZYQcEkQK7_CzWpZ4RtVa-DOrOPERvuhMLAv"
							alt="" class="review-thumb"></div>
				</div>
			</div>
		</div>
		<div class="review-post">
			<div class="row">
				<div class="invert">
					<div class="col-md-6 right">
						<div class="review-content">
							<div class="review-title">
								<h3>Елена и Павел</h3>
							</div>
							<div class="review-text">
								<p>Довольно сложно подобрать слова, которыми было бы возможно отблагодарить Вас за
									все.
									Знаем, что порой мы были очень придирчивы и сами не знали чего же хотим... И мы
									благодарны Вам за терпение и понимание, за помощь в подготовке, за
									организованность,
									за
									замечательных
									сотрудников, за великолепных ведущих!</p>
								<p>
									Благодаря всем Вам наш счастливый день навсегда останется в наших сердцах как
									яркое
									и
									волнующее воспонимание!</p>
								<p>
									Спасибо Вам огромное! Мы очень счастливы!</p>
								<p>
									Спасибо всем кто работал с нами!</p>
								<p>
									Все замечательные, добрый и отзывчивые.</p>
								<p>
									Желаем Вам процветания и благополучия! Вы дарите людям улыбки и радость!</p>
								<p>Желаем вам только процветания, успешных проведенных торжеств, и
									чтобы все молодожены обращались только к вам!!!</p>
							</div>
						</div>
					</div>
					<div class="col-md-6  text-md-center">
						<div class="review-image left"><img
								src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcT364T-M_6GcxAxPZYQcEkQK7_CzWpZ4RtVa-DOrOPERvuhMLAv"
								alt="" class="review-thumb"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="review-post">
			<div class="row">
				<div class="col-md-6">
					<div class="review-content">
						<div class="review-title">
							<h3>Егор и Марина</h3>
						</div>
						<div class="review-text">
							<p> С первого дня работы с вами ни разу не пожалели о своем
								выборе - все на высшем уровне!</p>
							<p>
								Подбор дома, машин, оформление...Все сделали за нас и именно так,
								как мы хотели!</p>
							<p>
								Довольными остались все!!! Эти два дня мы запомним на всю жизнь!</p>
							<p>
								Огромное спасибо вам за внимательность к нашим не всегда определенным
								и конкретным желаниям, спокойствие и терпение!</p>
							<p>
								При любом возможном случае будем рекомендовать вас как самых лучших
								организаторов свадебных торжеств!!!</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 text-md-center">
					<div class="review-image">
						<img
							src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcT364T-M_6GcxAxPZYQcEkQK7_CzWpZ4RtVa-DOrOPERvuhMLAv"
							alt="" class="review-thumb"></div>
				</div>
			</div>
		</div>
	</section>
	<section id="planing" class="wow slideInLeft">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-title">планирование и цена торжества</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 no-padding">
				<div class="planing-bg arr_top">
					<div class="page_title text-xs-center">
						<h2 class="title text-uppercase">"жизнь прекрасна"</h2>
						<span class="sep"></span>
						<h3 class="slogan">Я получу огромные скидки для Вас везде!</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7">
				<div class="planing-text">
					<h3>Планирование торжества</h3>
					<div class="planing-content">
						<p> Выбор ресторана - лишь начало подготовки торжественного банкета, ведь его организация
							подразумевает контроль очень многих вопросов, которые для виновников торжества всегда
							остаются за кадром и известны лишь опытному организатору. </p>
						<p>Замечательные эмоции и восторг от празднования создаются как грандиозными эффектами
							так и милыми мелочами. Мы знаем об этом всё. Каждый сезон добавляется много новинок.</p>
						<p>Мы сделаем для Вас персональный праздник, единственный и неповторимый.</p>
						<p>Приглашаю Вас в кафе и Вы узнаете все новинки свадебного шоу и корпоративных штучек!</p>
					</div>

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
<?php endif; ?>


<?php get_footer(); ?>