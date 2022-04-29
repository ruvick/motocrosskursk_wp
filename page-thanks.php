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
			<?php 
				$posts = get_posts( array(
					'numberposts' => 2,
					'category'    => 4,
					'order'       => 'ASC',
					'include'     => array(),
					'post_type'   => 'post',
					'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				) );

				$result = wp_get_recent_posts( $args );

					foreach( $posts as $post ){
			?>
			<div class="competitions__column">
				<div class="competitions__card">
					<div class="competitions__card-img">
						<img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>"> 
					</div>
					<div class="competitions__card-descp">
						<h4><?php echo $post->post_title?></h4>
						<div class="competitions__card-descp-flex d-flex">
							<div class="competitions__card-descp-flex-contacts">
								<p class="competitions__card-descp-flex-contacts-date"><?echo carbon_get_post_meta(get_the_ID(),"custom_post_date"); ?></p>
								<p class="competitions__card-descp-flex-contacts-address"><?echo carbon_get_post_meta(get_the_ID(),"custom_post_adress"); ?></p>
							</div>
							<a href="<?php echo get_permalink();?>" class="competitions__card-descp-flex-btn btn">ПОДРОБНЕЕ О МЕРОПРИЯТИИ</a>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>

	</div>
</section>

</main>

<?php get_footer(); ?> 