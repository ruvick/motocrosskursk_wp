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
				  $kubokR = carbon_get_the_post_meta('kubok_rossii');
          $rezultChemp = carbon_get_the_post_meta('rezultaty_chempionat');
        ?>

        <? if ($kubokR) {?>
          <a href="<?echo wp_get_attachment_url($kubokR);?>" class="about-competition__item">
            <span class="about-competition__item-icon about-competition__item-icon-01"></span>
            <p class="about-competition__item-descp">Кубок России мотокросс Курск 3 этап</p>
          </a>
        <?}?>

        <? if ($rezultChemp) {?>
          <a href="<?echo wp_get_attachment_url($rezultChemp);?>" class="about-competition__item">
            <span class="about-competition__item-icon about-competition__item-icon-02"></span>
            <p class="about-competition__item-descp">Результаты Чемпионат и первенство Курской области по мотокроссу 28-29 мая 2022</p>
          </a>
        <?}?>
      </div>

			<!-- <div class="arch-block-video-report">
				<h2 class="arch-block-video-report__title">Видеоотчет</h2>
				<div class="arch-block-video-report__file">
					<video src="<?php echo get_template_directory_uri();?>/img/video/01.mp4"></video>
				</div>
			</div> -->

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content();?>
					<?php endwhile;?>
				<?php endif; ?> 
			</div>
		</section>

</main>

<?php get_footer(); 