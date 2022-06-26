<?php

/*
Template Name: Страница архива соревнований
Template Post Type: post
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>  

<main class="page"> 

<section id="banner-narrow" class="banner-narrow">
	<div class="nuar_blk"></div>
	<div class="_container">
		<h1 class="banner-narrow__title"><? the_title();?></h1> 
	</div>
</section>

<section class="content page-recurring galery_lb_set">
  	<div class="_container">
  		<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );  
				}
			?> 

			<div class="arch-block-plach about-competition__row">
				<? 
		      $file = carbon_get_post_meta(get_the_ID(),"file_complex"); 
	          if ($file) {
		      $fileIndex = 0;
		        foreach ($file as $item) {
			  ?>
					<?php
						printf('
              <a href="%s" download class="about-competition__item">
                <span class="about-competition__item-icon about-competition__item-icon-01"></span>
                <p class="about-competition__item-descp">' . $item['file_complex_name'] . '</p>
              </a>', $item['file_complex_link']);
				?>
			  <?
			      	$fileIndex++; 
		        }
	        }
	      ?>
      </div> 

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content();?>
					<?php endwhile;?>
				<?php endif; ?> 
			</div>
		</section>

</main>

<?php get_footer(); 