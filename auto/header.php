<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<!--коментарий-->

<head>
<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<?php wp_head(); ?>
	


	<!--Подключаем шрифты-->
	<!--------------------------------------------------------------->
	<title></title>
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="header__top">
				<?php the_custom_logo();?>
				<a href="tel:<?php the_field('phone-number');?>" class="phone"><?php the_field('phone');?></a>

			</div>
			<div class="header__content">
				<h1 class="header__title"><?php the_field('title');?></h1>
				<h2 class="header__subtitle"><?php the_field('triger');?></h2>
				<p class="header__text"><?php the_field('text');?></p>
				<a class="button" href="#">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
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
				<img class="header__images" src="<?php bloginfo('template_url'); ?>/assets/./img/header/ford-mystang.png" alt="ford-mystang.png">
			</div>
		</div>
	</header>