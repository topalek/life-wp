<div class="review-post">
    <div class="row">
        <div class="<? if ( $r ) {echo 'invert';} ?>">
            <div class="col-md-6 <? if ( $r ) {echo 'right';} ?>">
                <div class="review-content">
                    <div class="review-title">
                        <h3><?= $post->post_title; ?></h3>
                    </div>
                    <div class="review-text">
                        <p>
	                        <?= $post->post_content; ?>
                        </p>

                        <?php //the_content()?>
                    </div>
                    <div class="review-author">
                        <?= ArrayHelper::getValue( get_post_meta( $post->ID, 'review_author' ), 0 ); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-xs-center">
                <div class="review-image <? if ( $r ) {echo 'left';} ?>">
                    <img class="review-thumb"
                         src="<?= get_the_post_thumbnail_url( $post->ID, 'medium' ); ?>" alt=""/>
                </div>
            </div>
        </div>
    </div>
</div>