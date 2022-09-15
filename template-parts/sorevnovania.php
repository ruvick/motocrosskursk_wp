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

					foreach( $posts as $post ){
			?>
			<div class="competitions__column">
				<div class="competitions__card">
					<a href="<?php echo get_permalink();?>" class="competitions__card-img">
						<img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>"> 
					</a>
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