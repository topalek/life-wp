<div class="portfolio-post-type-wedding <? if ( $r ) echo 'invert';?> clearfix">
    <div class="row">
        <div class="col-md-6 <? if ( $r ) echo 'right'; ?> col-sm-12">
            <div class="entry">
                <div class="entry-title">
                    <h3 class="post-title"><?= $post->post_title; ?></h3>
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
                    <a class="more-link" href="<?php the_permalink();?>">Подробнее
                        <span>></span>
                    </a>
                </div>
            </div>
        </div>
        <?php $ids = get_post_meta($post->ID,'event_gallery_img');?>
        <?php if ($ids):?>
        <div class="col-md-6  col-sm-12 no-padding">
            <?= owl_carousel( $ids);?>
        </div>
        <?php endif;?>
    </div>
</div>