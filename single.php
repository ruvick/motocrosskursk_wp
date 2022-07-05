<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="main-page page">

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