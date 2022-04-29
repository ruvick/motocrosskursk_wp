<div class="card-compet__column">
  <div class="card-compet__card d-flex">
    <div class="card-compet__card-img">
		  <img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>"> 
    </div>
    <div class="card-compet__card-descp">
      <h4><?php the_title();?></h4>
      <p class="card-compet__card-descp-date">16-17 октября 2022 г.</p>
      <p class="card-compet__card-descp-address">г. Курск, ур. Крутой лог</p>
      <a href="<?php echo get_permalink();?>" class="card-compet__card-descp-btn btn">ПОСМОТРЕТЬ АРХИВ</a>
    </div>
  </div>
</div> 