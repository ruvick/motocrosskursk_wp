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
				<? 
          $lkArchive = carbon_get_theme_option("link_to_archive");
	          if (!empty($lkArchive)) { 
        ?>
		      <div class="competitions-bgBlock">
				    <h5 class="competitions-bgBlock__name">Соревнования окончены</h5>
				    <a href="<?php echo $lkArchive; ?>" class="competitions-bgBlock__link">Смотреть результаты</a>
				    <!-- <p class="competitions-bgBlock__text">Регистрация откроется в следующем году</p> -->
			    </div>
        <? 
	        } 
          else {
        ?>
				<div class="banner__flex-descp-btn d-flex">
					<? $bLinkZayavka = carbon_get_theme_option("banner_link_zayavka"); 
						if (!empty($bLinkZayavka)){?><a href="<? echo $bLinkZayavka; ?>" class="btn _popup-link">ПОДАТЬ ЗАЯВКУ11</a><?}?> 
					<? $bLink = carbon_get_theme_option("banner_link"); 
						if (!empty($bLink)){?><a href="<? echo $bLink; ?>" class="btn btn_transp">ПОДРОБНЕЕ О СОРЕВНОВАНИИ</a><?}?>  
				</div>
        <? 
          }
        ?>
			</div>


			<!-- <div class="banner__flex-date">
				<p class="banner__flex-date-number"><?php echo carbon_get_theme_option('banner_number'); ?></p>
				<div class="banner__flex-date-line"></div> 
				<p class="banner__flex-date-month"><?php echo carbon_get_theme_option('banner_month'); ?></p>
				<p class="banner__flex-date-year"><?php echo carbon_get_theme_option('banner_year'); ?></p>
			</div> -->

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



</main>

<?php get_footer(); ?> 