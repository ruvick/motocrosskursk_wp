
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package light_market
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
			</div>
		</section>
	</main>

<?php get_footer();