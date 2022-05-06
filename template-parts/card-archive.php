<div class="card-compet__column">
  <div class="card-compet__card d-flex">
    <a href="<?php echo get_permalink();?>" class="card-compet__card-img">
		  <img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>"> 
    </a>
    <div class="card-compet__card-descp">
      <h4><?php the_title();?></h4>
      <p class="card-compet__card-descp-date"><?echo carbon_get_post_meta(get_the_ID(),"custom_post_date"); ?></p>
      <p class="card-compet__card-descp-address"><?echo carbon_get_post_meta(get_the_ID(),"custom_post_adress"); ?></p>
      <a href="<?php echo get_permalink();?>" class="card-compet__card-descp-btn btn">ПОСМОТРЕТЬ АРХИВ</a>
    </div>
  </div> 
</div> 