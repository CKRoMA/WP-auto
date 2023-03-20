<footer class="footer">
		<div class="container">
			<div class="footer__inner">
			<?php the_custom_logo();?>
			<div class="social header__social">
					<a href="<?php the_field('instagram-link');?>" class="social__link header__social-link">
						<img src="<?php bloginfo('template_url'); ?>/assets/./img/header/icon/instagram.svg" alt="instagram.svg" class="social__img"></a>
					<a href="<?php the_field('telegram-link');?>" class="social__link header__social-link">
						<img src="<?php bloginfo('template_url'); ?>/assets/./img/header/icon/telegram.svg" alt="telegram.svg" class="social__img"></a>
					<a href="<?php the_field('whatsapp-link');?>" class="social__link header__social-link">
						<img src="<?php bloginfo('template_url'); ?>/assets/./img/header/icon/whatsapp.svg" alt="whatsapp.svg" class="social__img"></a>
					<a href="<?php the_field('facebook-link');?>" class="social__link header__social-link">
						<img src="<?php bloginfo('template_url'); ?>/assets/./img/header/icon/facebook.svg" alt="facebook.svg" class="social__img"></a>
				</div>
				<a class="footer__copy" href="<?php echo get_page_link(110);?>">Политика конфиденциальности</a>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>

</body>

</html>