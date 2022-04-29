<?php 

/*
Template Name: Страница Благодарности
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<section id="banner" class="banner">
	<div class="nuar_blk"></div>
	<div class="_container">
		<div class="banner__flex d-flex">

			<div class="banner__flex-descp">
				<h1 class="banner__title banner-thanks__title">Благодарим за обращение!</h1>
				<p class="banner__subtitle banner-thanks__subtitle">Наши менеджеры свяжутся с вами в ближайшее время</p>
				<div class="banner__flex-descp-btn d-flex">
					<a href="#callback" class="btn _popup-link">ПОДАТЬ ЗАЯВКУ</a>
					<a href="#" class="btn btn_transp">ПОДРОБНЕЕ О СОРЕВНОВАНИИ</a>  
				</div>
			</div>
		</div>
	</div>
</section>

<? $abouttc = carbon_get_theme_option("about_home");
	if (!empty($abouttc)) { ?>
<section id="about" class="about">
	<div class="_container">
		<h2 class="about__title"><?php echo carbon_get_theme_option('about_home_title'); ?></h2>
		<div class="about__descp">
			<p><? echo $abouttc; ?></p>
		</div>
	</div>
</section>
<? } ?>

<section id="line" class="line">
	<div class="_container">
		<div class="line-bg"></div>
	</div>
</section>

<section id="competitions" class="competitions">
	<div class="_container">
		<h2 class="competitions__title">Наши соревнования</h2>

		<div class="competitions__row">

			<div class="competitions__column">
				<div class="competitions__card">
					<div class="competitions__card-img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/competitions/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/competitions/01.jpg?_v=1646818987671" alt=""></picture>
					</div>
					<div class="competitions__card-descp">
						<h4>Мотокросс в Крутом логе</h4>
						<div class="competitions__card-descp-flex d-flex">
							<div class="competitions__card-descp-flex-contacts">
								<p class="competitions__card-descp-flex-contacts-date">16-17 октября 2022 г.</p>
								<p class="competitions__card-descp-flex-contacts-address">г. Курск, ур.Крутой лог</p>
							</div>
							<a href="#" class="competitions__card-descp-flex-btn btn">ПОДРОБНЕЕ О МЕРОПРИЯТИИ</a>
						</div>
					</div>
				</div>
			</div>

			<div class="competitions__column">
				<div class="competitions__card">
					<div class="competitions__card-img">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/competitions/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/competitions/02.jpg?_v=1646818987671" alt=""></picture>
					</div>
					<div class="competitions__card-descp">
						<h4>Extreme Challenge</h4>
						<div class="competitions__card-descp-flex d-flex">
							<div class="competitions__card-descp-flex-contacts">
								<p class="competitions__card-descp-flex-contacts-date">03 ноября 2022 г.</p>
								<p class="competitions__card-descp-flex-contacts-address">г. Курск, ур.Крутой лог</p>
							</div>
							<a href="#" class="competitions__card-descp-flex-btn btn">ПОДРОБНЕЕ О МЕРОПРИЯТИИ</a>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>

</main>

<?php get_footer(); ?> 