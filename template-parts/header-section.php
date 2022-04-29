<header id="header" class="header">
	<div class="header__container _container">

		<div class="header__row d-flex">

			<a href="<? bloginfo("url"); ?>" class="logo-icon header__logo"></a>

			<div class="header__menu-block">
				<ul class="menu-list header__menu-list d-flex">
					<li class="menu-list__item"><a href="#" class="menu-list__link">О федерации</a></li>
					<li class="menu-list__item"><a href="#" class="menu-list__link">Соревнования</a></li>
					<li class="menu-list__item"><a href="#" class="menu-list__link">Архив</a></li>
					<li class="menu-list__item"><a href="#" class="menu-list__link">Контакты</a></li> 
				</ul>
				<!-- <?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'menu__list',
						'container_class' => 'menu__list','container' => false )); ?>  -->

				<div class="header__social social-block">
					<a href="<?php echo carbon_get_theme_option('as_vk'); ?>" class="header__social-icon social-block-icon social-block-icon-01"></a>
					<a href="<?php echo carbon_get_theme_option('as_insta'); ?>" class="header__social-icon social-block-icon social-block-icon-02"></a> 
				</div>

				<div class="contacts header__contacts d-flex">
					<? $tel = carbon_get_theme_option("as_phones_1"); 
						if (!empty($tel)){?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="contacts__phone header__phone"><? echo $tel; ?></a><?}?> 
					<? $mail = carbon_get_theme_option("as_email");
						if (!empty($mail)) { ?><a href="mailto:<? echo $mail; ?>" class="contacts__mail header__mail"><? echo $mail; ?></a><? } ?>
				</div>
				<a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="mob-phone-icon header__mob-phone-icon"></a>

				<div class="icon-menu" aria-label="Бургер меню">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>

		</div>
</header>

<!-- Мобильное меню -->
<div class="mob-menu header__mob-menu">
	<ul class="mob-menu__list">
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">О федерации</a></li>
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">Соревнования</a></li>
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">Архив</a></li>
		<li class="mob-menu__item"><a href="#" class="mob-menu__link">Контакты</a></li>
	</ul>
	<!-- <?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'mob-menu__list',
		'container_class' => 'mob-menu__list','container' => false )); ?>  -->
	<a href="#callback" class="header__popup-link header__popup-link_mob _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
</div> 