<?php get_header(); ?>
<section id="portfolio-page-hero" class="hero">
    <div class="row">
        <div class="col-md-12 no-padding">
            <div class="portfolio-page-hero_img">
               <?php get_template_part( 'template-parts/nets');?>
                <div class="page_title text-xs-center">
                    <h1 class="title">Портфолио</h1>
                    <span class="sep"></span>
                    <h2 class="description">Здесь мои свадьбы, банкеты, корпоративы и торжества.<br>
                        Идеальный праздник - моя страсть и моя жизнь!</h2>
                    <a href="#" class="my-btn" data-toggle="modal" data-target="#formModal">Заказать консультацию организатора событий</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portfolio" class="arr_top">
    <div class="row">
        <ul class="btn-block clearfix tabs" role="tablist">
            <li class="nav-item col-xs-6">
                <a class="tab my-btn ghost active" data-toggle="tab" href="#wedding" role="tab">Для свадьбы</a>
            </li>
            <li class="nav-item col-xs-6">
                <a class="tab my-btn ghost" data-toggle="tab" href="#corporative" role="tab">Для банкета, корпоратива</a>
            </li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="wedding" role="tabpanel">
                <div class="row">
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
                                    <div class="portfolio-carousel">
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-1.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-2.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-3.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-4.jpg" alt="" class="carousel-img img-fluid"></div>
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
                            <div class="col-md-6  col-sm-12 no-padding">
                                <div class="carousel">
                                    <div class="portfolio-carousel">
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-1.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-2.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-3.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-4.jpg" alt="" class="carousel-img img-fluid"></div>
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
                                    <div class="portfolio-carousel">
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-1.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-2.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-3.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-4.jpg" alt="" class="carousel-img img-fluid"></div>
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
                            <div class="col-md-6  col-sm-12 no-padding">
                                <div class="carousel">
                                    <div class="portfolio-carousel">
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-1.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-2.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-3.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-4.jpg" alt="" class="carousel-img img-fluid"></div>
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
                                    <div class="portfolio-carousel">
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-1.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-2.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-3.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-4.jpg" alt="" class="carousel-img img-fluid"></div>
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
                            <div class="col-md-6  col-sm-12 no-padding">
                                <div class="carousel">
                                    <div class="portfolio-carousel">
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-1.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-2.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-3.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-4.jpg" alt="" class="carousel-img img-fluid"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Page navigation" class="text-xs-center">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="tab-pane" id="corporative" role="tabpanel">
                <div class="row">
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
                            <div class="col-md-6  col-sm-12 no-padding">
                                <div class="carousel">
                                    <div class="portfolio-carousel">
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-1.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-2.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-3.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-4.jpg" alt="" class="carousel-img img-fluid"></div>
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
                                    <div class="portfolio-carousel">
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-1.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-2.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-3.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-4.jpg" alt="" class="carousel-img img-fluid"></div>
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
                            <div class="col-md-6  col-sm-12 no-padding">
                                <div class="carousel">
                                    <div class="portfolio-carousel">
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-1.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-2.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-3.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-4.jpg" alt="" class="carousel-img img-fluid"></div>
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
                                    <div class="portfolio-carousel">
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-1.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-2.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-3.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-4.jpg" alt="" class="carousel-img img-fluid"></div>
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
                            <div class="col-md-6  col-sm-12 no-padding">
                                <div class="carousel">
                                    <div class="portfolio-carousel">
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-1.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-2.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-3.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-4.jpg" alt="" class="carousel-img img-fluid"></div>
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
                                    <div class="portfolio-carousel">
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-1.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-2.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-3.jpg" alt="" class="carousel-img img-fluid"></div>
                                        <div class="carousel-item">
                                            <img src="<?=get_template_directory_uri();?>/img/wedding/wed-4.jpg" alt="" class="carousel-img img-fluid"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Page navigation" class="text-xs-center">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
