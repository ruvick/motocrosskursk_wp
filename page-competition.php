<?php 

/*
Template Name: Страница Сорвенования
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?> 

<main class="main-page page">

<?php 
	$banner = wp_get_attachment_image_src( carbon_get_the_post_meta('banner_img'), 'full')[0];
	if(empty($banner)) {
		$banner = get_template_directory_uri() . '/img/banner.jpg';
	} 
?>

<section id="banner-narrow" class="banner-narrow">
	<div class="nuar_blk"></div>
	<div class="_container">
		<h1 class="banner-narrow__title"><? the_title();?></h1>
	</div>
</section>

<section id="competitions" class="competitions competitions-page">
	<div class="_container">
  <?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
				}
			?> 
		<h2 class="competitions__title">Наши соревнования</h2>

		<div class="competitions__text">
			<p>
				9 октября 2022 года запланированы соревнования по мотокроссу в городе Курске урочище «Крутой лог». 
				Вся подробная информация будет опубликована в сентябре 2022 года.
			</p>
		</div> 

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
				<?php get_template_part('template-parts/sorevnovania');?> 
		</div>

	</div>
</section>
<? } ?>


</main>

<?php get_footer();