<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<?php 
		$banner = wp_get_attachment_image_src( carbon_get_the_post_meta('banner_img'), 'full')[0];
			if(empty($banner)) {
		$banner = get_template_directory_uri() . '/img/banner.jpg';
	} ?>

<section id="banner" class="banner" style="background-image: url(<?php echo $banner?>);">
	<div class="nuar_blk"></div>
	<div class="_container">
		<div class="banner__flex d-flex">

			<div class="banner__flex-descp">
				<h1 class="banner__title">"ФМС" Курск</h1>
				<h2 class="banner_sub_title">
					<?php echo carbon_get_theme_option('banner_title'); ?>
				</h1>
				<div class="banner__flex-descp-btn d-flex">
					<a href="<?php echo carbon_get_theme_option('banner_link_zayavka'); ?>" class="btn _popup-link">ПОДАТЬ ЗАЯВКУ</a>
					<a href="<?php echo carbon_get_theme_option('banner_link'); ?>" class="btn btn_transp">ПОДРОБНЕЕ О СОРЕВНОВАНИИ</a>  
				</div>
			</div>

			<div class="banner__flex-date">
				<p class="banner__flex-date-number"><?php echo carbon_get_theme_option('banner_number'); ?></p>
				<div class="banner__flex-date-line"></div> 
				<p class="banner__flex-date-month"><?php echo carbon_get_theme_option('banner_month'); ?></p>
				<p class="banner__flex-date-year"><?php echo carbon_get_theme_option('banner_year'); ?></p>
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
			<p><? echo apply_filters( 'the_content', $abouttc); ?></p>
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

		<?php get_template_part('template-parts/sorevnovania');?> 

	</div>
</section>

</main>

<?php get_footer(); ?> 