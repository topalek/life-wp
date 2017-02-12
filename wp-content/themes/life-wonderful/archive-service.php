<?php get_header(); ?>
<section id="serviсe-hero" class="hero wow fadeIn">
	<div class="row">
		<div class="col-md-12 no-padding">
			<div class="serviсe-hero_img">
				<?php get_template_part( 'template-parts/nets');?>
				<div class="page_title text-xs-center">
					<h1 class="title">Все услуги</h1>
					<span class="sep"></span>
					<h2 class="description">Все будет в тренде самых современных торжеств!</h2>
					<a href="#" class="my-btn" data-toggle="modal" data-target="#formModal">Заказать консультацию организатора событий</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $cat = ArrayHelper::map(array_filter( get_categories()), 'term_id', 'name');?>

<section id="services" class=" wow slideInUp arr_top">
	<div class="row">
		<div class="col-md-12">
			<div class="p-25">&nbsp;</div>
			<div class="p-25">&nbsp;</div>
			<div class="p-25">&nbsp;</div>
		</div>
	</div>
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

							<ul class="service-list portfolio">
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
</section>
<section id="service-mostly" class=" wow fadeIn">
	<div class="row">
		<div class="col-md-12">
			<h2 class="section-title">Что чаще заказывают наши клиенты</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 no-padding">
			<div class="service-mostly-img arr_top">
				<div class="page_title text-xs-center">
					<h2 class="title text-uppercase">"жизнь прекрасна"</h2>
					<span class="sep"></span>
					<h3 class="slogan">Ощущения создают детали.<br>Всё под контролем!</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<ul class="btn-block tabs clearfix" role="tablist">
			<li class="row">
			<li class="nav-item col-xs-6">
				<a class="tab my-btn ghost active" data-toggle="tab" href="#wedding" role="tab">Для свадьбы</a>
			</li>
			<li class="nav-item col-xs-6">
				<a class="tab my-btn ghost" data-toggle="tab" href="#corporative" role="tab">Для банкета,
					корпоратива</a>
			</li>
			</li>

		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div class="tab-pane active" id="wedding" role="tabpanel">
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<ul class="portfolio service-list flex-item">
							<li class="service-list-item">Личный организатор праздника</li>
							<li class="service-list-item">Разработка коцепции свадьбы</li>
							<li class="service-list-item">Создание поминутного плана свадьбы</li>
							<li class="service-list-item">Бронировка ресторана</li>
							<li class="service-list-item">Изготовление приглашений</li>
							<li class="service-list-item">Фото/Видео съёмка</li>
							<li class="service-list-item">Ведущий</li>
							<li class="service-list-item">Ди-джей</li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<ul class="portfolio service-list flex-item">
							<li class="service-list-item">Звук/микрофоны</li>
							<li class="service-list-item">Дыммашина</li>
							<li class="service-list-item">Арка молодых</li>
							<li class="service-list-item">Драпировка столов</li>
							<li class="service-list-item">Драпировка стульев</li>
							<li class="service-list-item">Аренда авто для молодых</li>
							<li class="service-list-item">Ленты для машин</li>
							<li class="service-list-item">Кольца для машин</li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<ul class="portfolio service-list flex-item">
							<li class="service-list-item">Цветочные композиции для машин</li>
							<li class="service-list-item">Оформление зала: цветы,</li>
							<li class="service-list-item">Воздушные шары для машин</li>
							<li class="service-list-item">шары, ленты, плакаты.</li>
							<li class="service-list-item">Подсвечники</li>
							<li class="service-list-item">Альбом для пожеланий гостей</li>
							<li class="service-list-item">Папки для свидетельств о браке</li>
							<li class="service-list-item">Рассадочные карточки</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="corporative" role="tabpanel">
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<ul class="portfolio service-list flex-item">
							<li class="service-list-item">Звук/микрофоны</li>
							<li class="service-list-item">Дыммашина</li>
							<li class="service-list-item">Арка молодых</li>
							<li class="service-list-item">Драпировка столов</li>
							<li class="service-list-item">Драпировка стульев</li>
							<li class="service-list-item">Аренда авто для молодых</li>
							<li class="service-list-item">Ленты для машин</li>
							<li class="service-list-item">Кольца для машин</li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<ul class="portfolio service-list flex-item">
							<li class="service-list-item">Цветочные композиции для машин</li>
							<li class="service-list-item">Оформление зала: цветы,</li>
							<li class="service-list-item">Воздушные шары для машин</li>
							<li class="service-list-item">шары, ленты, плакаты.</li>
							<li class="service-list-item">Подсвечники</li>
							<li class="service-list-item">Альбом для пожеланий гостей</li>
							<li class="service-list-item">Папки для свидетельств о браке</li>
							<li class="service-list-item">Рассадочные карточки</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="service-exclusive">
	<div class="row">
		<div class="col-md-12">
			<h2 class="section-title">нестандартные услуги</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 no-padding">
			<div class="service-exclusive-bg arr_top">
				<div class="page_title text-xs-center">
					<h2 class="title text-uppercase">"жизнь прекрасна"</h2>
					<span class="sep"></span>
					<h3 class="slogan">Я воплощу любые Ваши мечты. Любые!</h3>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="p-25">&nbsp;</div>
			<div class="p-25">&nbsp;</div>
			<div class="p-25">&nbsp;</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7">
			<div class="p-25">&nbsp;</div>
		</div>
		<div class="pull-right">
			<div class="ann">
				<div class="ann-name">Анна Топалова</div>
				<h3 class="ann-position">Руководитель агентства</h3>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="exclusive-post">
			<div class="row">
				<div class="col-md-5 col-xs-12">
					<div class="exclusive-content">
						<div class="exclusive-title">
							<h3>Румика и Дмитрий</h3>
						</div>
						<div class="exclusive-image">
							<img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcT364T-M_6GcxAxPZYQcEkQK7_CzWpZ4RtVa-DOrOPERvuhMLAv"
							     alt="" class="exclusive-thumb">
						</div>
					</div>
				</div>
				<div class="col-md-7 col-xs-12 text-md-center">
					<div class="exclusive-text">
						<p>     Ритуал объединения родов, благословения родителей, сборы молодой, встреча молодого, украшения гостями свадебного "гiльця", обряд "даровизни", "краяння короваю", "покривання молодої" и множество других старинных обычаев стали основой этого важнейшего для пары события. В этот день к молодым традиционно обращались "Князь" и "Княжна", и под бурные овации гости первыми узнали, что княжна-невеста таки стала Никитиной!
						</p><p>
							"Для меня свадьба началась с удивительного платья Роксоланы Богуцкой, созданного в стародавних свадебных традициях и с музея Гончара. Именно там меня усадили вышивать свадебный рушник, объяснили сакральное значение каждого символа и обряда из разных регионов, помогли найти женщин, которые пекут караваи с молитвами и песнопениями, объяснили зачем невесте да и любой женщине нужен "дукач".
						</p><p>
							Там же возле музея мы встретили и удивительный коллектив "Рожаница". Они в буквальном смысле этого слова сидели на улице и пели. Когда мы услышали, как они это делают, то просто подошли и пригласили на свадьбу! Именно они провели нам все обрядовые церемонии и сделали этот праздник особенным и уникальным", - восторженно рассказывает невеста.
						</p><p>
							Церемония бракосочетания прошла в Обрядовом зале замка "Радомысль" среди древних икон и ангелов, которые слышали уже не одну клятву верности и любви брачующихся. Духовными песнопениями ее сопровождал необыкновенный коллектив "Vox animae" - Голос души.
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>