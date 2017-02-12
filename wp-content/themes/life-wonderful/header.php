<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="robots" content="noindex,nofollow">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php bloginfo('name'); wp_title(" | ");?></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<header class="header">
	<div id="header_top">
		<div class="container">
			<div class="row">
                <div class="pull-right">
                    <div class="header_phone">
                        <i class="icon">
                            <img src="<?= IMG_DIR;?>svg/phone-ringing.svg" alt="phone-ringing">
                        </i>
                        <a href="tel:+380504708819">+38 (050) 470 88 19</a>
                    </div>
                </div>

                <div class="header_email pull-right">
                    <i class="icon">
                        <img src="<?= IMG_DIR;?>svg/evelope.svg" alt="phone-ringing">
                    </i>
                    <?php $email = get_option( 'frontend_email');
                        if(!$email) $email = bloginfo('admin_email');
                    ?>
                    <a href="mailto:<?=$email;?>"><?=$email;?></a>
                </div>
			</div>
		</div>
	</div>
	<div id="header_nav">
		<nav>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="nav-container clearfix">
							<div class="nav-item">
								<a href="/" class="logo text-xs-center">
									<div class="logo_header">жизнь прекрасна</div>
									<div class="logo_description">агентство торжеств</div>
								</a>
							</div>
                            <div id="menu-wrapp">
                                <?php wp_nav_menu(['theme_location'  => 'primary',
                                                   'container'       => 'div',
                                                   'container_class' => 'nav-item menu-item',
                                                   'menu_class'      => 'nav']) ;?>

                                <?php wp_nav_menu(['theme_location'  => 'secondary',
                                                    'container'       => 'div',
                                                   'container_class' => 'nav-item menu-item',
                                                   'menu_class'      => 'link_group']) ;?>
                                <div class="nav-item">
                                    <div class="search_trigger">
                                        <i class="fa fa-search"></i>
                                    </div>
                                </div>
                                <div class="header_search">
                                    <form action="<?=home_url("/");?>" class="form-search">
                                        <input type="text" class="input-search" name="s"
                                               placeholder="Например: прокат лимузина">
                                        <button class="input-submit" title="Найти">
                                            <i class="fa fa-search"></i>
                                        </button>
                                        <div id="close-search"><i class="fa fa-close"></i></div>
                                    </form>
                                </div>
                            </div>
                            <div id="nav-icon-close">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>
</header>
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="row">
					<div class="col-xs-12">
						<div class="modal-top clearfix">
							<svg class="pull-left icon-svg icon-double-bed">
								<use xlink:href="<?= IMG_DIR;?>svg/symbol-defs.svg#icon-list"></use>
							</svg>
							<h4 class="modal-title pull-left" id="exampleModalLabel">Заказать консультацию организатора событий</h4>
						</div>
					</div>
				</div>
				<?php echo do_shortcode( '[contact-form-7 id="133"]');?>
				<!--<form class="form" action="">

				</form>-->
			</div>
			<div class="modal-footer">
				<div class="row">
					<div class="col-xs-12">
						<div class="pull-right">
							<h5 class="d-inline-block">Анна</h5>
							<div class="d-inline-block header_phone">
								<i class="icon">
									<img src="<?= IMG_DIR;?>svg/phone-ringing.svg" alt="phone-ringing">
								</i>
								<a href="tel:+380504708819">+38 (050) 470 88 19</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">