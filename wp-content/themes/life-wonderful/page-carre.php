<?php get_header();
remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'set_servise_list' );

function set_servise_list($content){
	$output = str_replace( ["<ul>","<li>"], ['<ul class="portfolio service-list">','<li class="service-list-item">'], $content);
	return $output;
}
?>
<section id="carre-page-hero" class="hero wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <div class="row">
        <div class="col-md-12 no-padding">
            <div class="carre-page-hero_img">
	            <?php get_template_part( 'template-parts/nets');?>
                <div class="page_title text-xs-center">
                    <h1 class="title">Зажигательный cover band
                        для Вашего идеального события!</h1>
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
                            <img class="playlist-icon" src="<?=IMG_DIR;?>carre/playlist.png" alt=""/>
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
                                <img class="playlist-thumb" src="<?=IMG_DIR;?>carre/playlist-photo.png" alt=""/>
                            </div>
	                        <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
		                        <?php the_content();?>
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
                        <a class="my-btn ghost p-25" href="#" data-toggle="modal" data-target="#playlistModal">Стотреть плей-лист &gt;</a>
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
    <div class="row">
        <div class="col-md-12 no-padding">

            <!-- 16:9 aspect ratio -->
            <div class="arr_top promo-video">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Ot98yrVKbq8" width="300" height="150" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                </div>
            </div>
        </div>
        <section class="gallery">
            <div class="row"></div>
            <div class="video-gallery">
                <div class="col-md-4"><a class="fancybox" href="https://www.youtube.com/watch?v=FyQnSV08Mcg">
                        <img class="img-fluid" src="img/carre/video 01.jpg" alt=""/>
                    </a></div>
                <div class="col-md-4"><a class="fancybox" href="https://www.youtube.com/watch?v=YCKyOgXm7W4">
                        <img class="img-fluid" src="img/carre/video 02.jpg" alt=""/>
                    </a></div>
                <div class="col-md-4"><a class="fancybox" href="https://www.youtube.com/watch?v=FyQnSV08Mcg">
                        <img class="img-fluid" src="img/carre/video 03.jpg" alt=""/>
                    </a></div>
            </div>
            <div class="row"></div>
        </section>
        <section id="photo">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">фото</h2>
                </div>
            </div>
            <div class="row text-xs-center">
                <?php $ids = get_post_meta($post->ID,'page_gallery');
                    $gallery = '[gallery ids="'.implode( ",",$ids).'"]';
                    echo do_shortcode($gallery);
                ?>
            </div>
        </section>
    </div>
</section>
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
                <div class="review-post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="review-content">
                                <div class="review-title">
                                    <h3>Barrel club-restaurant</h3>
                                </div>
                                <div class="review-text">

                                    Ставимтвердую пятерку потрясающей группе “Carre”. Гармония
                                    музыки, и уникальный тембр, и красота голоса у вокалистов, и репертуар, и…..

                                    Можно продолжать до бесконечности, но они являются не только красивой
                                    картинкой на празднике, но и гармоничным его дополнением.
                                    Когда ребята на сцене, сразу понимаешь, что праздник пройдет весело
                                    и танцевально!!!! Супппер!

                                </div>
                                <div class="review-author">Михаил, управляющий Barrel club-restaurant</div>
                            </div>
                        </div>
                        <div class="col-md-6 text-xs-center">
                            <div class="review-image"><img class="review-thumb"
                                                           src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcT364T-M_6GcxAxPZYQcEkQK7_CzWpZ4RtVa-DOrOPERvuhMLAv"
                                                           alt=""/></div>
                        </div>
                    </div>
                </div>
                <div class="review-post">
                    <div class="row">
                        <div class="invert">
                            <div class="col-md-6 right">
                                <div class="review-content">
                                    <div class="review-title">
                                        <h3>Евгений Чичваркин</h3>
                                    </div>
                                    <div class="review-text">

                                        С кавер группой “Carre”. праздник прошёл на Ура!

                                        У меня выступали воздушные гимнасты, гости фотографировались с тигром
                                        и питоном… - но даже через месяц после мероприятия коллеги до сих пор
                                        вспоминают в основном выступление “Carre”.

                                        Меня всё спрашивал коллектив , как мне удалось так подобрать артистов!

                                        Абсолютно все пребывали в восторге.

                                    </div>
                                    <div class="review-author">Евгений Чичваркин, CEO Hedonism wines</div>
                                </div>
                            </div>
                            <div class="col-md-6 text-xs-center">
                                <div class="review-image left"><img class="review-thumb"
                                                                    src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcT364T-M_6GcxAxPZYQcEkQK7_CzWpZ4RtVa-DOrOPERvuhMLAv"
                                                                    alt=""/></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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