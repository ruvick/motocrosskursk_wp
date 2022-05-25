
<?php
/*
Template Name: Страница протоколы
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?> 

	<main id="primary" class="page site-main"> 

	<section id="banner-narrow" class="banner-narrow">
		<div class="nuar_blk"></div>
		<div class="_container">
			<h1 class="banner-narrow__title"><? the_title();?></h1>
		</div>
	</section>

	<section class="content page-recurring">
  		<div class="_container">
  			<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
				}
			?> 
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content();?>
					<?php endwhile;?>
			<?php endif; ?>
			
			<h2>Текущее соревнование: <?echo $chid = carbon_get_theme_option("ch_id");?></h2>
				<br/>
				<br/>
			<?
				global $wpdb;
				$classes = $wpdb->get_results('SELECT `klass` FROM `wp_chelenge` WHERE `ch_id` = "'.$chid.'" AND `activate` != 0 GROUP BY `klass`');
				
				$baseUrl = "https://motocrosskursk.ru/wp-content/themes/motocrosskursk/protocol/kp.php";

				foreach ($classes as $cl) {
			?>	
				<?
					$get_q = http_build_query(
						[
							"klass" => $cl->klass,
							"chid" => $chid,
						]
					);
				?>
				<a href="<?echo $baseUrl."?".$get_q;?>">Скачать протокол в классе - <?echo $cl->klass;?></a> <br/>	
			<?}?>
		</div>
	</section>
	</main>

<?php get_footer();