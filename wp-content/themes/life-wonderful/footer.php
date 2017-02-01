<?php
//remove_filter( 'wpcf7_contact_form_shortcode', 'wpautop' );
//echo do_shortcode( '[contact-form-7 id="47" title="контактная форма 1"]');?>
</div>
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="footer-content">
					<a href="/"><span>“Жизнь прекрасна”</span> - агентство торжеств</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="footer-contacts">
					<div class="header_email pull-right">
						<i class="icon">
							<img src="<?= IMG_DIR;?>svg/evelope-white.svg" alt="phone-ringing">
						</i>
						<a href="mailto:<?=bloginfo('admin_email');?>"><?=bloginfo('admin_email');?></a>
					</div>
					<div class="pull-right">
						<div class="header_phone">
							<i class="icon">
								<img src="<?= IMG_DIR;?>svg/phone-ringing-white.svg" alt="phone-ringing">
							</i>
							<a href="tel:+380504708819">+38 (050) 470 88 19</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
	<script>
		new WOW().init();
		//var waypoints = $('.wow').waypoint({
		//	handler: function(direction) {
		//		notify(this.element.id + ' hit')
		//	}
		//})
	</script>
    <?php wp_footer();?>
</body>
</html>