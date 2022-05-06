<header id="header" class="header">
	<div class="header__container _container">

		<div class="header__row d-flex">

			<a href="<? bloginfo("url"); ?>" class="logo-icon header__logo"></a>

			<div class="header__menu-block">
				<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'menu-list header__menu-list d-flex',
						'container_class' => 'menu-list header__menu-list d-flex','container' => false )); ?> 

				<div class="header__social social-block">
					<a href="<?php echo carbon_get_theme_option('as_vk'); ?>" class="header__social-icon social-block-icon social-block-icon-01"></a>
					<a href="<?php echo carbon_get_theme_option('as_telegr'); ?>" class="header__social-icon social-block-icon social-block-icon-02"></a>  
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
	<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'mob-menu__list',
		'container_class' => 'mob-menu__list','container' => false )); ?> 
	<a href="#callback" class="header__popup-link header__popup-link_mob _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
</div> 