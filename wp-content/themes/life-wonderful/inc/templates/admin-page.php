<!--<link rel="stylesheet" href="--><?//= get_template_directory_uri()?><!--/css/bootstrap.css">-->
<h1>Настройки темы</h1>

<?php settings_errors(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <form id="life_opt" action="options.php" method="post" role="form">
                <legend>Ссылки и аккаунты соцсетей</legend>
                <div class="form-group">
                    <?php settings_fields('life-settings-group'); ?>
                    <?php do_settings_sections('life_options_setup'); ?>
                    <?php submit_button('Сохранить изменения','primary','bntSubmit'); ?>

                </div>
            </form>
        </div>
        <div class="col-md-6">
            <div class="life-preview">
	            <div class="card">
                    <?php if (get_option('profile_pic')):?>
                        <img class="card-img-top img-fluid" src="<?=get_option('profile_pic');?>" alt="Card image cap">
                    <?php endif;?>
		            <div class="card-block">
			            <h4 class="card-title life-email""><?=get_option('frontend_email');?></h4>
			            <p class="card-text"> Email который будет выводиться на сайте</p>
		            </div>
		            <ul class="list-group list-group-flush">
			            <li class="list-group-item"><?=get_option('frontend_email');?></li>
			            <li class="list-group-item"><?=get_option('frontend_facebook');?></li>
			            <li class="list-group-item"><?=get_option('frontend_vk');?></li>
			            <li class="list-group-item"><?=get_option('frontend_youtube');?></li>
		            </ul>
		            <!--<div class="card-block">
			            <a href="#" class="card-link">Card link</a>
			            <a href="#" class="card-link">Another link</a>
		            </div>-->
            </div>
        </div>
    </div>
</div>

